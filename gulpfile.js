// Подключаем все плагины
const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const fileInclude = require('gulp-file-include');
const browserSync = require('browser-sync').create();
const buffer = require('gulp-buffer');
// Пути к файлам
const paths = {
    styles: {
        src: 'src/scss/**/*.scss',
        dest: 'dist/css/'
    },
    scripts: {
        src: 'src/js/**/*.js',
        dest: 'dist/js/'
    },
    html: {
        src: 'src/pages/**/*.html',
        dest: 'dist/pages/'
    },
    images: {
        src: 'src/images/**/*',
        dest: 'dist/images/'
    },
     swiper: {
        src: 'node_modules/swiper/swiper-bundle.min.css',
        dest: 'dist/css/'
    }
};

// Задача: сборка стилей
function buildStyles() {
    return gulp.src(paths.styles.src)
        .pipe(sass({
            includePaths: ['node_modules'] // Проверьте, что эта строка есть
        }).on('error', sass.logError))
        .pipe(cleanCSS())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());
}

// Задача: сборка скриптов
function buildScripts() {
     return gulp.src([
        // Сначала библиотеки (важно!)
        'node_modules/jquery/dist/jquery.min.js',
        'node_modules/swiper/swiper-bundle.min.js',
        'node_modules/imask/dist/imask.min.js',
        // Потом ваш код
        paths.scripts.src
    ])
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(paths.scripts.dest))
        .pipe(browserSync.stream());
}

// Задача: сборка HTML с подключением компонентов
function buildHtml() {
    return gulp.src(paths.html.src)
        .pipe(fileInclude({
            prefix: '@@',
            basepath: '@file'
        }))
        .pipe(gulp.dest(paths.html.dest))
        .pipe(browserSync.stream());
}

// Задача: копирование изображений
function copyImages() {
    return gulp.src(paths.images.src, { encoding: false })
        .pipe(buffer())
        .pipe(gulp.dest(paths.images.dest))
        .pipe(browserSync.stream());
}
function copySwiperCSS() {
    return gulp.src(paths.swiper.src)
        .pipe(gulp.dest(paths.swiper.dest))
        .pipe(browserSync.stream());
}
// Задача: слежение за изменениями
function watchFiles() {
    browserSync.init({
        server: {
            baseDir: './dist/'
        },
        startPath: '/pages/index.html'
    });

    gulp.watch(paths.styles.src, buildStyles);
    gulp.watch(paths.swiper.src, copySwiperCSS);
    gulp.watch(paths.scripts.src, buildScripts);
    gulp.watch('src/components/**/*.html', buildHtml);
    gulp.watch(paths.html.src, buildHtml);
    gulp.watch(paths.images.src, copyImages);
}

// Задача по умолчанию (запускаем gulp)
exports.default = gulp.series(
    gulp.parallel(buildStyles, buildScripts, buildHtml, copyImages, copySwiperCSS),
    watchFiles
);

// Задача для финальной сборки
exports.build = gulp.parallel(buildStyles, buildScripts, buildHtml, copyImages, copySwiperCSS);