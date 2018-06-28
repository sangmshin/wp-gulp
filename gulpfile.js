var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');
var jslint = require('gulp-jslint');
var imagemin = require('gulp-imagemin');
var rename = require('gulp-rename');
var bs = require('browser-sync').create(); // create a browser sync instance.
var babel = require("gulp-babel");


gulp.task('browser-sync', function () {
    bs.init({
        // Replace 'localhost' with your IP address with yours
        proxy: 'localhost:8888/MyMembership/', // We need to use a proxy instead of the built-in server because WordPress has to do some server-side rendering for the theme to work.
        watchOptions: {
            debounceDelay: 1000 // This introduces a small delay when watching for file change events to avoid triggering too many reloads
        }
    });
});

gulp.task('img', function () {

    gulp.src('./assets/img/raw/*.{png,jpg,gif,svg}')

        .pipe(imagemin({

            optimizationLevel: 7,

            progressive: true

        }))

        .pipe(gulp.dest('./assets/img'))
        .pipe(notify({
            message: 'Images task complete',
            onLast: true
        }));

});

gulp.task('sass', function () {

    gulp.src('./assets/css/*.scss')
        .pipe(sass({
            outputStyle: 'expanded'
        }).on('error', sass.logError))
        .pipe(gulp.dest('./dist/css'))
        .pipe(notify({
            message: 'Sass Compilation task complete',
            onLast: true
        }))

});

gulp.task('js', function () {

    gulp.src('./assets/js/custom/*.js')
        .pipe(jslint())
        .pipe(concat('custom.js'))
        .pipe(babel({
            presets:['env']
        }))
        .pipe(rename( {
            basename: "custom",
            suffix: '.min'
        }))
        // .pipe(uglify())
        .pipe(gulp.dest('./dist/js'))

        .pipe(notify({
            message: 'JS scripts task complete',
            onLast: true
        }))

});



gulp.task('vendorsJS', function () {
    return gulp.src('./assets/js/vendor/*.js')
        .pipe(concat('vendors.js'))
        // .pipe(gulp.dest('./assets/js'))
        .pipe(rename({
            basename: "vendors",
            suffix: '.min'
        }))
        .pipe(uglify())
        .pipe(gulp.dest('./dist/js/'))
        .pipe(notify({
            message: 'Vendor scripts task complete',
            onLast: true
        }));
});

gulp.task('watch', ['browser-sync'], function () {


    gulp.watch('./assets/css/*.scss', ['sass']);
    gulp.watch('./assets/css/partials/*.scss', ['sass']);

    gulp.watch('./assets/js/custom/*.js', ['js']);

    gulp.watch('./assets/img/raw/*.{png,jpg,gif,svg}', ['img']);
    gulp.watch("./*.*").on('change', bs.reload);
    gulp.watch("./partials/*.*").on('change', bs.reload);
    gulp.watch("./assets/css/partials/*.scss").on('change', bs.reload);
    gulp.watch("./assets/js/custom/*.js").on('change', bs.reload);

});

gulp.task('default', ['sass', 'js', 'vendorsJS', 'img', 'watch', 'browser-sync' ]);