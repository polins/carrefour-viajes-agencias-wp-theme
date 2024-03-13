var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var watch = require('gulp-watch');
var postcss = require('gulp-postcss');
var purgecss = require('gulp-purgecss');
var tailwindcss = require("tailwindcss")
var autoprefixer = require("autoprefixer")

gulp.task('sass', function () {
  return gulp
    .src('assets/scss/*.scss')
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([tailwindcss('tailwind.config.js'), autoprefixer]))
    .pipe(purgecss({
        content: [
            'template-parts/*.php',
            'template-parts/*/*.php',
            'template-parts/*/*/*.php',
            'inc/*.php',
            '*.php',
        ],
        defaultExtractor: content =>
          content.match(/[\w-/:]+(?<!:)/g) || []
    }))
    .pipe(gulp.dest('./dist/css'));
});

gulp.task('javascript', function () {
  return gulp.src('assets/js/*.js')
    .pipe(gulp.dest('./dist/js'));
});

gulp.task('watch', function () {
    gulp.watch([
        'assets/scss/*.scss',
        'template-parts/*.php',
        'template-parts/*/*/*.php',
        'template-parts/*/*.php',
        'inc/*.php',
        '*.php',
        'assets/js/*.js'
    ], gulp.series('sass','javascript'));
});


gulp.task('default', gulp.parallel('sass','watch'));