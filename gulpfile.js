const gulp         = require('gulp');
const browserSync  = require('browser-sync');
const sass         = require('gulp-sass')(require('sass'));
const cleanCSS     = require('gulp-clean-css');
const autoprefixer = require('gulp-autoprefixer');
const rename       = require('gulp-rename');

// Локальный dev-сервер с проксированием на aquaborn.local
function server(done) {
    browserSync.init({
        proxy: 'aquaborn.local'
    });

    gulp.watch('src/**/*.php').on('change', browserSync.reload);
    gulp.watch('src/*.html').on('change', browserSync.reload);
    done();
}

// Компиляция SCSS в минифицированный CSS (styles.scss подключает партиалы)
function styles() {
    return gulp.src('src/sass/styles.scss')
        .pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
        .pipe(rename({ suffix: '.min', prefix: '' }))
        .pipe(autoprefixer())
        .pipe(cleanCSS())
        .pipe(gulp.dest('src/css'))
        .pipe(browserSync.stream());
}

function watch() {
    gulp.watch('src/sass/**/*.+(scss|sass)', styles);
}

exports.styles = styles;
exports.watch  = watch;
exports.default = gulp.parallel(watch, server, styles);