import gulp from "gulp";
import { deleteAsync } from "del";
import concat from "gulp-concat";
import uglify from "gulp-uglify";
import dartSass from "sass";
import gulpSass from "gulp-sass";
const sass = gulpSass(dartSass);
import cleanCSS from "gulp-clean-css";
import ext from "gulp-ext-replace";
// import imagemin, { gifsicle, mozjpeg, optipng, svgo } from "gulp-imagemin";

// theme folder
const themeFolder = "./wp-content/themes/new-theme/";

// delete the existing wp-content folder
export const clean = () => deleteAsync(["./wp-content"]);

// process javascript
export function scripts() {
	gulp
		.src(["node_modules/bootstrap/dist/js/bootstrap.bundle.js", "src/js/main.js"], {
			sourcemaps: true,
			allowEmpty: true,
		})
		.pipe(uglify())
		.pipe(concat("main.js"))
		.pipe(gulp.dest(themeFolder + "js/"));
	return gulp
		.src(["src/js/remove-block-styles.js"], { sourcemaps: true, allowEmpty: true })
		.pipe(uglify())
		.pipe(gulp.dest(themeFolder + "js/"));
}

// process css
export function styles() {
	return gulp
		.src("src/scss/style.scss")
		.pipe(sass({ outputStyle: "compressed" }))
		.pipe(cleanCSS())
		.pipe(gulp.dest(themeFolder));
}

// process PHP templates
export function templates() {
	return (
		gulp
			.src(
				[
					"src/templates/**/**/*.html",
					"src/templates/**/**/*.php",
					"src/templates/partials/**/**/*.php",
					"src/templates/partials/**/**/*.html",
					"src/templates/includes/**/**/*.php",
				],
				{
					allowEmpty: true,
				}
			)
			// .pipe(hb().partials("src/html/partials/**/*.hbs"))
			.pipe(ext(".php"))
			.pipe(gulp.dest(themeFolder))
	);
}

// watch me for the changes and try to keep up
function watch() {
	gulp.watch("src/js/**/*.js", scripts);
	gulp.watch("src/scss/**/*", styles);
	gulp.watch(["src/templates/**/**/*.php", "src/templates/**/**/*.html"], templates);
	// gulp.watch("src/img/**/*", images);
	// gulp.watch("src/fonts/**/*", fonts);
}

// put it all together and what do we get
const build = gulp.series(clean, scripts, styles, templates, watch);
export default build;
