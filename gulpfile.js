'use strict';

const gulp = require('gulp');
const pug = require('gulp-pug');
const concat = require('gulp-concat');
const coffee = require('gulp-coffee');
const uglify = require('gulp-uglify');
const pump = require('pump');
const gulpIf = require('gulp-if');
const browserSync = require('browser-sync').create();
const sass = require('gulp-sass');
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');
const sourcemaps = require('gulp-sourcemaps');
const del = require('del');
const imagemin = require('gulp-imagemin');
const useref = require('gulp-useref');
const runSequence = require('run-sequence');

gulp.task('indexHTML', function buildHTML() {
  return gulp.src('./src/_mock/templates/pug/index.pug').pipe(pug()).pipe(rename({ extname: '.html' })).pipe(gulp.dest('./app'));
});

gulp.task('tabHTMLs', function buildHTML() {
  return gulp.src(['src/_mock/templates/pug/Marketing-Campaigns.pug', 'src/_mock/templates/pug/Promotional-Services.pug', 'src/_mock/templates/pug/Website-Development.pug']).pipe(pug()).pipe(rename({ extname: '.html' })).pipe(gulp.dest('./dist'));
});

gulp.task('uglifiedJS', function (cb) {
  pump([
      gulp.src('./src/_mock/scripts/coffee/*.coffee',{ sourcemaps: true }),
      coffee({bare: true}),
      uglify(),
      rename({ extname: '.uglified.js' }),
      gulp.dest('./app')
    ],
    cb
  )
});

gulp.task('minifiedCSS', function () {
  return gulp.src('./src/_mock/styles/sass/*.sass').pipe(sass()).pipe(sourcemaps.init()).pipe(cleanCSS({ debug: true }, function (details) {
    console.log(details.name + ': ' + details.stats.originalSize);
    console.log(details.name + ': ' + details.stats.minifiedSize);
  })).pipe(rename({ extname: '.min.css' })).pipe(sourcemaps.write()).pipe(gulp.dest('./dist/css'));
});

gulp.task('clean:dist', function() {
  return del.sync('dist');
});

gulp.task('sass', function() {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass.sync().on('error', sass.logError))
    .pipe(gulp.dest('app/css'))
});

gulp.task('useref', function(){
  return gulp.src('app/*.html')
    .pipe(useref())
    // Minifies only if it's a JavaScript file
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulp.dest('./'))
});

gulp.task('images', function(){
  return gulp.src('src/_mock/img/**/*.+(png|jpg|gif|svg)')
  .pipe(imagemin())
  .pipe(gulp.dest('dist/images'))
});

gulp.task('fonts', function() {
  return gulp.src('app/fonts/**/*')
  .pipe(gulp.dest('dist/fonts'))
});

gulp.task('build', function (callback) {
  runSequence('clean:dist',
    ['sass', 'useref', 'images', 'fonts'],
    callback
  )
});

gulp.task('browserSync', function() {
  browserSync.init({server: true}, function(err, bs) {
    console.log(bs.options.getIn(["urls", "local"]));
  })
});

gulp.task('watch', ['browserSync', 'sass'], function (){
  gulp.watch('./src/_mock/styles/sass/scss/**/*.scss', ['sass']);
  // Reloads the browser whenever HTML or JS files change
  gulp.watch('./*.html', browserSync.reload);
  gulp.watch('./src/public/scripts/js/*.js', browserSync.reload);
});

gulp.task('default', function (callback) {
  runSequence(['sass','browserSync', 'watch'],
    callback
  )
});
