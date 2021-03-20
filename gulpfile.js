"use strict";

const { watch, series, src, dest, parallel } = require("gulp");
const browserSync = require("browser-sync").create();

if (process.env.NODE_ENV !== "production") {
  console.log("Development mode");
  require("dotenv").config();
}
function bs() {
  browserSync.init({
    proxy: "jacobson.test",
    files: ["./views/**/*.twig", "./theme/dist/dist.js", "./theme/style.css"],
  });
}

exports.bs = parallel([bs]);