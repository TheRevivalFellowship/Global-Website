'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');
var livereload = require('gulp-livereload');

var $ = require('gulp-load-plugins')();

gulp.task('scripts', function () {
    return gulp.src(path.join(conf.paths.src, '/**/*.js'))
        .pipe($.eslint())
        .pipe($.eslint.format())
        .pipe($.uglify()).on('error', conf.errorHandler('Uglify'))
        .pipe($.concat('website.min.js'))
        .pipe(gulp.dest(path.join(conf.paths.dist, '/js')))
        .pipe(livereload());
});
