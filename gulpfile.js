const gulp = require('gulp'),
    concat = require('gulp-concat'),
    watch = require('gulp-watch'),
    autoprefixer = require('autoprefixer'),
    postcssApply = require('postcss-apply'),
    postcssVar = require('postcss-css-variables'),
    postcss = require('gulp-postcss'),
    cssnano = require('gulp-cssnano'),
    processors = [
        autoprefixer({browsers: ['last 3 version']}),
        postcssApply,
        postcssVar
    ];

gulp.task('default', function () {

    var options = {};
    watch('.component/*.css', options, function (e) {
        // console.log('e:'+JSON.stringify(e));
        console.log(new Date() + ' -- ' + e.history[0].replace(e.base, ''));
        // console.log('\n');
        gulp.src('.component/*.css')
        .pipe(concat('component.css' , {newLine: '\n'}))
        .pipe(postcss(processors))
        .pipe(cssnano())
        .pipe( gulp.dest('build/') );
    });
});
