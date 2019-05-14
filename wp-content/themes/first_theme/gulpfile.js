var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
let cleanCSS = require('gulp-clean-css');

gulp.task('scss', function() {
  return gulp
    .src('./src/scss/**/*.scss')
    .pipe(concat('main.min.scss'))
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest('./dist/css'));
});

gulp.task('js', function() {
  return gulp
    .src('./src/**/*.js')
    .pipe(concat('index.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js'));
});

gulp.task(
  'watch',
  gulp.series(['scss', 'js'], function() {
    gulp.watch('./src/scss/**/*.scss', gulp.series(['scss']));
    gulp.watch('./src/js/**/*.js', gulp.series(['js']));
  })
);

gulp.task('default', gulp.series(['scss', 'js', 'watch']));
