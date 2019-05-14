var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync');

gulp.task('scss', function() {
  return gulp
    .src(['node_modules/bootstrap/scss/bootstrap.scss', './src/scss/**/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest('./dist/css'))
    .pipe(browserSync.stream());
});

gulp.task('js', function() {
  return gulp
    .src([
      'node_modules/jquery/dist/jquery.min.js',
      'node_modules/popper.js/dist/umd/popper.min.js',
      'node_modules/bootstrap/dist/js/bootstrap.min.js',
      './src/**/*.js'
    ])
    .pipe(concat('index.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'))
    .pipe(browserSync.stream());
});

gulp.task('connect-sync', function() {
  connect.server({}, function() {
    browserSync({
      proxy: 'localhost/wordpress'
    });
  });
});

gulp.task(
  'watch',
  gulp.series(['scss', 'js', 'connect-sync'], function() {
    browserSync.init({
      server: ''
    });

    gulp.watch('./src/scss/**/*.scss', gulp.series(['scss']));
    gulp.watch('./src/js/**/*.js', gulp.series(['js']));
    gulp.watch('**/*.php').on('change', browserSync.reload);
  })
);

gulp.task('default', gulp.series(['scss', 'js', 'connect-sync', 'watch']));
