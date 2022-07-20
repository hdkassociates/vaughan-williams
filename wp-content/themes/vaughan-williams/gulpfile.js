var gulp = require('gulp'),
	cleanCSS = require('gulp-clean-css'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-sass'),
	gutil = require('gulp-util'),
	concat = require('gulp-concat'),
	notify = require("gulp-notify"),
	gulpif = require('gulp-if');
var isProduction = gutil.env.production === true;

/** ASSETS */
gulp.task('assets', function(done) {
	gulp.src([
//		'node_modules/bootstrap-sass/assets/fonts/**',
		//'node_modules/font-awesome/fonts/**',
		//'node_modules/slick-carousel/slick/fonts/**',
		'resources/fonts/**',
	])
	.pipe(gulp.dest('dist/fonts'));
	gulp.src([
		'node_modules/slick-carousel/slick/ajax-loader.gif',
	])
	.pipe(gulp.dest('dist/images'));
	return done();
});

/* SITE STYLES */
gulp.task('styles', function() {
	return gulp.src(['resources/sass/site.scss'])
	.pipe(sass(gulpif(isProduction, {outputStyle: 'compressed'}))).on('error', sass.logError)
	.pipe(concat('style.css'))
	.pipe(gulp.dest('.'));
});

/* EDITOR STYLES */
gulp.task('editor-style', function() {
	return gulp.src(['resources/sass/editor-styles.scss'])
	.pipe(sass(gulpif(isProduction, {outputStyle: 'compressed'}))).on('error', sass.logError)
	.pipe(concat('editor-styles.css'))
	.pipe(gulp.dest('.'));
});


/* SITE SCRIPTS */
gulp.task('javascript', function() {
	return gulp.src([
		//'node_modules/jquery/dist/jquery.js',
		//'resources/js/customizer.js',
		'node_modules/bootstrap/dist/js/bootstrap.js',
		//'node_modules/jquery-match-height/dist/jquery.matchHeight.js',
		//'node_modules/jquery-visible/jquery.visible.js',
		'node_modules/slick-carousel/slick/slick.js',
		//'node_modules/venobox/venobox/venobox.js',
		//'node_modules/webfontloader/webfontloader.js',
		//'node_modules/aos/dist/aos.js',
		'resources/js/main.js',
	])
	.pipe(concat('main.js'))
	.pipe(isProduction ? uglify() : gutil.noop())
	.pipe(gulp.dest('dist/js'));
});

// Watch
gulp.task('watch', function() {
	gulp.watch('resources/sass/**', gulp.parallel('styles', 'editor-style'));
	gulp.watch('resources/js/**', gulp.parallel('javascript'));
	// Optimize Images added by GC 30/05/20
	//gulp.watch( 'img/**/*', gulp.parallel('images'));
});

gulp.task('default', gulp.parallel('assets', 'styles', 'editor-style', 'javascript'));
