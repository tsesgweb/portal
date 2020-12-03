var $config = require("./config");
var pkg = require("../package.json");
var $portal = require("../portal-config.json");
var banner = [
  "/*! <%= name %> - v<%= pkg.version %> - <%= new Date().getDate() %>.<%= new Date().getMonth()+1 %>.<%= new Date().getFullYear() %> <%= new Date().getHours() %>h<%= new Date().getMinutes() %> - Copyright (c) 2018 tse.jus.br */\n",
].join("\n");
module.exports = (gulp, plugins) => {
  return () => {
    if ($config.run.scripts) {
      function runScript(
        caminho,
        name,
        assinatura = $config.run.banner.signature,
        comprimir = $config.run.js.uglify
      ) {
        gulp
          .src(caminho)
          .pipe(plugins.plumber())
          .pipe(
            $config.run.js.concat
              ? plugins.concat(`${name}.js`)
              : plugins.util.noop()
          )
          .pipe(comprimir ? plugins.uglify() : plugins.util.noop())
          .pipe(
            assinatura
              ? plugins.header(banner, { pkg, name })
              : plugins.util.noop()
          )
          .pipe(
            $config.run.js.minify
              ? plugins.rename({
                  suffix: ".min",
                  extname: ".js",
                })
              : plugins.util.noop()
          )
          .pipe(plugins.plumber.stop())
          .pipe(gulp.dest($config.paths.dest.js));
      }
      gulp
        .src(`${$config.paths.src.js}/*.htc`)
        .pipe(gulp.dest($config.paths.dest.js));
        console.log($portal.footer.js.portal);
      Promise.all([
        runScript($portal.footer.js.portal.map(path=> `pages/${path}`), "portal"),
        runScript($portal.footer.js.template.home.map(path=> `pages/${path}`), "home"),
         runScript($portal.footer.js.template.internas.map(path=> `pages/${path}`), "internas"),
        runScript($portal.footer.js.vendor.map(path=> `pages/${path}`), "vendor", false, false),
        runScript($portal.footer.js.rybena.map(path=> `pages/${path}`), "rybena", false, false),        
        runScript($portal.head.js.ie[8].map(path=> `pages/${path}`), "ie8"),
        runScript($portal.head.js.ie[9].map(path=> `pages/${path}`), "ie"),        
        runScript($portal.head.js.head.map(path=> `pages/${path}`), "modernizr", false),
      ]);
    }
  };
};
