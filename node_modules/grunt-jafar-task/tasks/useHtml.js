var jsdom = require("jsdom"),
    path = require('path'),
    fs = require('fs'),
    _ = require('lodash'),
    d = require('simply-deferred'),
    Deferred = d.Deferred,
    when = d.when,
    libJquerySrc = path.resolve(__dirname + '/../libs/jquery-2.0.3.min.js'),
    scan = function(file) {
        var content = file.body,
            deferred = new Deferred(),
            dirname = path.dirname(file.path),
            prepareURL = function(p) {
                return path.join(dirname, p);
            };

        jsdom.env(content, [libJquerySrc], function(err, window) {
            var $ = window.$,
                results = [],
                combiningObject,
                check = function(dom) {
                    $.each(dom.childNodes, function() {
                        if (this.nodeType == 1) {

                            if (combiningObject) {
                                if (combiningObject.type == 'js' && this.tagName == 'SCRIPT' && this.src) {
                                    combiningObject.urls.push(prepareURL(this.src));
                                } else if (combiningObject.type == 'css' && this.tagName == 'LINK' && this.href) {
                                    combiningObject.urls.push(prepareURL(this.href));
                                }
                            }

                            check(this);
                            return;
                        }

                        if (this.nodeType == 8) {
                            var c = this.nodeValue.trim().replace(/[\s\n\r\t]+/, ' ') || '',
                                found;

                            if (!combiningObject) {
                                found = c.match(/combine\:(\w+)\s+(.*)/);
                                if (found) {
                                    combiningObject = {
                                        type: found[1],
                                        file: prepareURL(found[2]),
                                        urls: []
                                    };
                                }
                            } else {
                                found = c.match(/endcombine/);
                                if (found) {
                                    results.push(combiningObject);
                                    combiningObject = null;
                                }
                            }
                        }
                    });
                };

            check($('html')[0]);

            if (combiningObject) {
                results.push(combiningObject);
            }

            deferred.resolve(results);
        });

        return deferred.promise();
    },
    map = function(fo) {
        var content = fo.body,
            htmlDirName = path.dirname(fo.path),
            deferred = new Deferred(),
            opened,
            results = [];
        content = content.split('\n');
        _.forEach(content, function(line) {
            var found,
                rep;
            if (opened) {
                found = line.match(/<!--\s*endcombine\s*-->/);
                if (found) {
                    opened = false;
                }
            } else {
                found = line.match(/<!--\s*combine\:(\w+)\s+((?!\s).*)\s*-->/);
                if (found) {
                    var f = found[2].trim(),
                        ext = path.extname(f),
                        minname = f.substr(0, f.length - ext.length) + '.min' + ext;

                    if (fs.existsSync(path.join(htmlDirName, minname))) {
                        f = minname;
                    }

                    if (found[1] == 'css') {
                        rep = '<link rel="stylesheet" type="text/css" href="' + f + '" />';
                        rep = line.replace(/<!--\s*combine\:(\w+)\s+((?!\s).*)\s*-->/, rep);
                        results.push(rep);
                    } else if (found[1] == 'js') {
                        rep = '<script type="text/javascript" src="' + f + '"></script>';
                        rep = line.replace(/<!--\s*combine\:(\w+)\s+((?!\s).*)\s*-->/, rep);
                        results.push(rep);
                    }
                    opened = true;
                } else {
                    results.push(line);
                }
            }

        });

        deferred.resolve(results.join('\n'));

        return deferred.promise();
    };

module.exports = function(grunt) {
    grunt.registerMultiTask('useHtml', 'Jafar\'s use html task', function() {
        var done = this.async(),
            promises = [],
            that = this;


        if (this.target == 'scan') {
            var files = grunt.file.expand({filter: 'isFile'}, this.data);
            files = files.map(function (filepath) {
                return {
                    path: filepath,
                    body: grunt.file.read(filepath)
                };
            });
            files.forEach(function (file) {
                promises.push(scan(file));
            });

            when(promises).then(function(results) {
                var uglifyUs = {},
                    toUglify = false;
                results.forEach(function(o) {
                    var name = o.file.replace(/[\/\\\.]/g, '_');
                    var ext = path.extname(o.file);
                    var minname = o.file.substr(0, o.file.length - ext.length) + '.min' + ext;

                    grunt.config('concat.' + name, {
                        src: o.urls,
                        dest: o.file
                    });

                    if (o.type == 'js') {
                        toUglify = true;
                        uglifyUs[minname] = [o.file];
                    }

                });

                if (toUglify) {
                    grunt.config('uglify.target', {
                        files: uglifyUs
                    });
                }
                done();
            });
        } else if (this.target == 'map') {

            _.forEach(this.data, function(to, from) {
                var froms = grunt.file.expand({filter: 'isFile'}, [from]);
                if(froms.length) {
                    map({
                        path: from,
                        body: grunt.file.read(from)
                    }).then(function(content) {
                        grunt.file.write(to, content);
                    });
                }
            });
            done();
        }
    });
};