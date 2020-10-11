var $config = require("./config"),
  $browserSync = require("browser-sync").create();
var pkg = require("../package.json");

var banner = [
  "/*! <%= name %> - v<%= pkg.version %> - <%= new Date().getDate() %>.<%= new Date().getMonth()+1 %>.<%= new Date().getFullYear() %> <%= new Date().getHours() %>h<%= new Date().getMinutes() %> - Copyright (c) 2018 tse.jus.br */\n",
].join("\n");
module.exports = (gulp, plugins) => {
  return () => {
    gulp
      .src($config.paths.src.sass)
      .pipe(plugins.plumber())
      .pipe(
        $config.run.css.maps
          ? plugins.sourcemaps.init({
              loadMaps: true,
            })
          : plugins.util.noop()
      )
      .pipe(
        plugins
          .sass({
            indentType: "tab",
            indentWidth: 1,
            outputStyle: $config.run.sass,
          })
          .on("error", plugins.sass.logError)
      )
      .pipe(
        $config.run.autoprefix
          ? plugins.postcss([
              plugins.autoprefixer({
                browsers: [
                  "last 2 version",
                  "safari 5",
                  "ie 8",
                  "ie 9",
                  "opera 12.1",
                  "ios 6",
                  "android 4",
                ],
                cascade: false,
              }),
            ])
          : plugins.util.noop()
      )
      .pipe(
        $config.run.banner.signature
          ? plugins.header(banner, {
              pkg,
              name: "CSS",
            })
          : plugins.util.noop()
      )
      .pipe(
        $config.run.css.minify
          ? plugins.rename({
              suffix: ".min",
              extname: ".css",
            })
          : plugins.util.noop()
      )
      .pipe($config.run.cssminify ? plugins.minifyCss() : plugins.util.noop())
      .pipe(
        $config.run.css.maps ? plugins.sourcemaps.write() : plugins.util.noop()
      )
      .pipe(gulp.dest($config.paths.dest.css))
      .pipe(
        $browserSync.reload({
          stream: true,
        })
      );
  };
};
