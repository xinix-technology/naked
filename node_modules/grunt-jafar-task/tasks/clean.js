/*
 * grunt-jafar-task
 * https://github.com/reekoheek/grunt-jafar-task
 *
 * Copyright (c) 2013 Jafar Shadiq
 * Licensed under the MIT license.
 */


var shell = require('shelljs'),
    _ = require('lodash');

module.exports = function(grunt) {
    'use strict';

    grunt.registerMultiTask('clean', 'Jafar\'s clean task', function() {
        _.each(this.data, function(file) {
            shell.rm('-rf', file);
        });
    });

};
