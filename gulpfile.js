var gulp = require('gulp');
var sass = require('gulp-ruby-sass');
var sourcemaps = require('gulp-sourcemaps');
var source = require('vinyl-source-stream');
var buffer = require('vinyl-buffer');
var browserify = require('browserify');
var watchify = require('watchify');
var babel = require('babelify');
/*function compile(watch) {
    var bundler = watchify(browserify('./src/index.js', {debug: true}).transform(babel));

    function rebundle() {
        bundler.bundle()
            .on('error', function (err) {
                console.error(err);
                this.emit('end');
            })
            .pipe(source('build.js'))
            .pipe(buffer())
            .pipe(sourcemaps.init({loadMaps: true}))
            .pipe(sourcemaps.write('./'))
            .pipe(gulp.dest('./assets'));
    }

    if (watch) {
        bundler.on('update', function () {
            console.log('-> bundling...');
            rebundle();
        });
    }
    rebundle();
}
function watch() {
    return compile(true);
};
gulp.task('build', function () {
    return compile();
});
gulp.task('watch', function () {
    return watch();
});
gulp.task('default', ['watch']);*/
//-------------------------------------------------
/*var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
// Static Server + watching scss/html files
gulp.task('serve', ['sass'], function () {

    browserSync.init({
        server: ".app"
    });

    gulp.watch("resources/assets/scss/!*.scss", ['sass']);
    gulp.watch("resources/views/members/!*.php").on('change', browserSync.reload);
});
// Compile sass into CSS & auto-inject into browsers
gulp.task('sass', function () {
    return gulp.src("resources/assets/scss/!*.scss")
        .pipe(sass())
        .pipe(gulp.dest("public/assets/css"))
        .pipe(browserSync.stream());
});
gulp.task('default', ['serve']);*/
//-------------------------------------------------
var prefix = require('gulp-autoprefixer');
gulp.task('default', function () {
    sass('resources/assets/sass/app.scss', {sourcemap: true, style: 'compact'})
        .pipe(prefix("last 1 version", "> 1%", "ie 8", "ie 7"))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('public/assets/css'));
});
//-------------------------------------------------
var elixir = require('laravel-elixir');
elixir(function (mix) {
    mix.sass([
        'app.scss'
    ], 'public/assets/css');
    mix.scripts([
        "jquery.js",
        "bootstrap.js",
        "app.js",
        "members.js",
        "custom.js"
    ], 'public/assets/js');
});