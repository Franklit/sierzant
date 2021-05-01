const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();



function style() {
    return gulp.src('./src/scss/**/*.scss')

    .pipe(sass())

    .pipe(gulp.dest('./dist/css'))

    .pipe(browserSync.stream());

}

function watch(){
    browserSync.init({
        proxy: 'localhost/sierzant',


    });
    gulp.watch('./src/scss/**/*.scss', style);
    gulp.watch('./*php').on('change', browserSync.reload);
    gulp.watch('./js/**/*.js').on('change', browserSync.reload);
}


exports.style = style;
exports.watch = watch;

