'use strict';

var path = require('path');
var gulp = require('gulp');
var conf = require('./conf');

var livereload = require('gulp-livereload');

var $ = require('gulp-load-plugins')();

gulp.task('watch', function () {

    livereload.listen({quite:false});

    gulp.watch([
        path.join(conf.paths.src, '/**/*.css'),
        path.join(conf.paths.src, '/**/*.scss')
    ], function (event) {
        gulp.start('styles');
    });

    gulp.watch(path.join(conf.paths.src, '/**/*.js'), function (event) {
        gulp.start('scripts');
    });

    gulp.watch(path.join(conf.paths.dist, '/**/*.html'), function (event) {
        livereload.reload();
    });

});
