var gulp = require('gulp'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    compass = require('gulp-compass'),
    rename = require('gulp-rename'),
    minifyCSS = require('gulp-minify-css'),
    gulpWatch = require('gulp-watch');

var js = [
        './vendor/jquery/dist/jquery.js',
        './vendor/modernizr/modernizr.js',
        './js/tshirt.js'
    ];

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

gulp.task('js', function() {
    gulp.src(js)
        .pipe(concat('tshirt.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('./js/'));
});

gulp.task('watch', function() {
    gulp.watch('./scss/**/*.scss', ['css']);
    gulp.watch(js, ['js']);
});

gulp.task('default', ['css', 'js', 'watch']);