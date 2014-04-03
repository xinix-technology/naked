# grunt-jafar-task

> Jafar's grunt tasks

## Getting Started
This plugin requires Grunt `~0.4.1`

If you haven't used [Grunt](http://gruntjs.com/) before, be sure to check out the [Getting Started](http://gruntjs.com/getting-started) guide, as it explains how to create a [Gruntfile](http://gruntjs.com/sample-gruntfile) as well as install and use Grunt plugins. Once you're familiar with that process, you may install this plugin with this command:

```shell
npm install grunt-jafar-task --save-dev
```

Once the plugin has been installed, it may be enabled inside your Gruntfile with this line of JavaScript:

```js
grunt.loadNpmTasks('grunt-jafar-task');
```

Make sure you already have package.json and Gruntfile.js file.

```js
/**
 * Gruntfile.js example
 */

module.exports = function(grunt) {

    grunt.loadNpmTasks('grunt-jafar-task');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    grunt.initConfig({
        clean: {
            remove: ['dist', 'bower_components']
        },
        fetchDeps: {
            bower: {}
        },
        useHtml: {
            scan: ['index-unminified.html'],
            map: {
                'index-unminified.html': 'index.html'
            }
        }
    });

    grunt.registerTask('build', ['fetchDeps', 'useHtml:scan', 'concat', 'uglify', 'useHtml:map']);

};
```

## The "clean" task

### Overview
To be defined

```js
grunt.initConfig({
  clean: {
    remove: [
      // Files to remove.
    ]
  }
})
```

## The "fetchDeps" task

### Overview
To be defined

## The "useHtml" task

### Overview
To be defined

## Contributing
In lieu of a formal styleguide, take care to maintain the existing coding style. Add unit tests for any new or changed functionality. Lint and test your code using [Grunt](http://gruntjs.com/).

## Release History
_(Nothing yet)_
