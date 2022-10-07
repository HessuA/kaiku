"use strict";
const gulp = require("gulp");
const postcss = require("gulp-postcss");
const sass = require("gulp-sass")(require("sass"));
const cssnano = require("cssnano");
const autoprefixer = require("autoprefixer");
const sourcemaps = require("gulp-sourcemaps");

const paths = {
  styles: {
    src: "sass/**/*.scss",
    dest: "assets/build/css",
  },
};

function style() {
  return gulp
    .src(paths.styles.src)
    .pipe(sourcemaps.init())
    .pipe(sass())
    .on("error", sass.logError)
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(paths.styles.dest));
}

function watch() {
  style();
  gulp.watch("sass/**", style);
}

exports.watch = watch;
