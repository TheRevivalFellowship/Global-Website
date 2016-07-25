'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');
var livereload = require('gulp-livereload');

var $ = require('gulp-load-plugins')();

gulp.task('styles', function () {
    var sassOptions = {
        outputStyle: 'compressed'
    };

    return gulp.src([
        path.join(conf.paths.src, '/index.scss'),
        // path.join('!' + conf.paths.src, '/_setup/**/*'), // Ignore files in _setup
        // path.join(conf.paths.src, '/**/*.scss') // Grab all other .scss files
    ])
        .pipe($.concat('website.min.css')) // Concat all src files into one for scope
        .pipe($.sass(sassOptions)).on('error', conf.errorHandler('Sass'))
        .pipe($.autoprefixer()).on('error', conf.errorHandler('Autoprefixer'))
        .pipe(gulp.dest(path.join(conf.paths.dist, '/css')))
        .pipe(livereload());
});
