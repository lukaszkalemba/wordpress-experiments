var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
let cleanCSS = require('gulp-clean-css');

gulp.task('scss', function() {
  return gulp
    .src(['node_modules/bootstrap/scss/bootstrap.scss', './src/scss/**/*.scss'])
    .pipe(sass().on('error', sass.logError))
    .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(concat('main.min.css'))
    .pipe(gulp.dest('./dist/css'));
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
    .pipe(gulp.dest('./dist/js'));
});

gulp.task('fonts', function() {
  return gulp
    .src('node_modules/font-awesome/fonts/*')
    .pipe(gulp.dest('dist/fonts'));
});

gulp.task(
  'watch',
  gulp.series(['scss', 'js'], function() {
    gulp.watch('./src/scss/**/*.scss', gulp.series(['scss']));
    gulp.watch('./src/js/**/*.js', gulp.series(['js']));
  })
);

gulp.task('default', gulp.series(['scss', 'js', 'fonts', 'watch']));
