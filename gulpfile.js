var gulp = require('gulp'),
    compass = require('gulp-compass'),
    rename = require('gulp-rename'),
    minifyCSS = require('gulp-minify-css');

gulp.task('css', function() {
    gulp.src('./scss/**/*.scss')
        .pipe(compass({
            css: 'css',
            sass: 'scss',
            image: 'img',
        }))
        .pipe(gulp.dest('css'));

    gulp.src('./scss/**/*.scss')
        .pipe(compass({
            css: 'css',
            sass: 'scss',
            image: 'img',
        }))
        .pipe(minifyCSS())
        .pipe(rename({
            suffix: ".min"
        }))
        .pipe(gulp.dest('css'));
});

gulp.task('default', ['css']);

gulp.task('watch', ['default'], function() {
    gulp.watch('scss/**/*.scss', ['css']);
});