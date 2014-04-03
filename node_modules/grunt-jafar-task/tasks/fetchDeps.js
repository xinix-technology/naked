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


    grunt.registerMultiTask('fetchDeps', 'Jafar\'s fetch dependencies task', function() {
        if (this.target === 'bower') {
            var subtaskPath = require.resolve('grunt-bower-task').split('grunt-bower-task')[0] + 'grunt-bower-task/tasks',
                targetDir = this.data.targetDir;

            grunt.loadTasks(subtaskPath);

            grunt.config('bower', {
                install: {
                    options: {
                        copy: false
                    }
                }
            });

            grunt.registerTask('fetchDepsCopy', function() {
                shell.rm('-rf', targetDir);
                shell.cp('-R', './bower_components/', targetDir);
            });

            grunt.task.run('bower', 'fetchDepsCopy');
        }
    });

};
