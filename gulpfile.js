"use strict";
const gulp = require("gulp");
const postcss = require("gulp-postcss");
const sass = require("gulp-sass")(require("sass"));
const cssnano = require("cssnano");

function style() {
  let plugins = [cssnano()];

  return gulp
    .src("./sass/*scss")
    .pipe(sass())
    .pipe(postcss(plugins))
    .pipe(gulp.dest("./assets/build/css"));
}

function watch() {
  gulp.watch("./sass/*scss", style);
}

exports.style = style;
exports.watch = watch;
