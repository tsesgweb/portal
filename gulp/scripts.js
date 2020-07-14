var $config = require("./config");
var $portal = require('../portal-config.json');
var pkg = require('../package.json');
var banner = ['/**',
    ' * <%= pkg.name %> - <%= pkg.description %>',
    ' * @version v<%= pkg.version %>',
    ' */',
    ''
].join('\n');
module.exports = (gulp, plugins) => {
    return () => {
        if ($config.run.scripts) {
            function runScript(caminho, name, assinatura = $config.run.banner.signature, comprimir = $config.run.js.uglify) {
                gulp.src(caminho)
                    .pipe(plugins.plumber())
                    .pipe($config.run.js.concat ? plugins.concat(`${name}.js`) : plugins.util.noop())
                    .pipe(comprimir ? plugins.uglify() : plugins.util.noop())
                    .pipe(assinatura ? plugins.header(banner, { pkg: pkg }) : plugins.util.noop())
                    .pipe($config.run.js.minify ? plugins.rename({
                        suffix: ".min",
                        extname: ".js"
                    }) : plugins.util.noop())
                    .pipe(plugins.plumber.stop())
                    .pipe(gulp.dest($config.paths.dest.js));
            }
            gulp.src(`${$config.paths.src.js}/*.htc`)
                .pipe(gulp.dest($config.paths.dest.js));
            Promise.all([
                runScript($portal.footer.js.portal, "portal"),
                runScript($portal.footer.js.template.home, "home"),
                runScript($portal.footer.js.template.internas, "internas"),
                runScript($portal.footer.js.vendor, "vendor", false),
                runScript($portal.footer.js.rybena, "rybena", false, false),
                runScript($portal.footer.js.external, "external", false),
                runScript($portal.head.js.ie[9], "ie"),
                runScript($portal.head.js.ie[8], "ie8"),
                runScript($portal.head.js.head, "modernizr", false),
            ]);
        }
    };
};