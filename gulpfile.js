const assetsResPath = 'src/Resources/public/';
const assetsDesPath = 'public/';
const cssResPath = 'src/Resources/private/less/';
const cssDesPath = 'public/css/';

const gulp = require('gulp');
const less = require('gulp-less');
const postcss = require('gulp-postcss');
const stylelint = require('gulp-stylelint');
const cssnano = require('cssnano');
const autoprefixer = require('autoprefixer');
const del = require('del');

function cssBuild() {
    const plugins = [
        autoprefixer({
            browsers: ['> 1%', 'not ie < 10'],
            flexbox: false,
            cascade: false,
        }),
        cssnano({
            'zindex': false,
        }),
    ];
    return gulp.src([cssResPath + '*.less'])
        .pipe(less())
        .pipe(postcss(plugins))
        .pipe(gulp.dest(cssDesPath));
}

function cssWatch() {
    gulp.watch(cssResPath + '**', cssBuild);
}

function cssLint() {
    return gulp.src([cssResPath + '**/*.less'])
        .pipe(stylelint({
            failAfterError: false,
            reporters: [{
                formatter: 'string',
                console: true
            }]
        }));
}

function assetsClear() {
    return del([assetsDesPath + '**/*', '!' + assetsDesPath + 'index.php']);
}

function assetsInstall() {
    return gulp.src(assetsResPath + '**/*')
        .pipe(gulp.dest(assetsDesPath));
}

exports.css = cssBuild;
exports.watch = cssWatch;
exports.lint = cssLint;
exports.assets = gulp.series(assetsClear, assetsInstall);
exports.build = gulp.series(assetsClear, assetsInstall, gulp.parallel(cssBuild, cssLint));
