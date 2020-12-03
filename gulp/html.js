var $config = require('./config');
module.exports = (gulp, plugins) => {
    return () => {
        if ($config.run.html)
            gulp.src($config.paths.src.php)
            .pipe(plugins.plumber())
            .pipe(plugins.phpipe())
            .pipe(plugins.rename({
                extname: ".html"
            }))
            .pipe(plugins.htmlBeautify({
                indentSize: 2,
            }))
            .pipe($config.run.js.replace ? plugins.htmlReplace($config.constants.htmlreplace, {
                keepUnassigned: false,
                keepBlockTags: false,
                resolvePaths: false                
            }) : plugins.util.noop())
            .pipe($config.run.js.replace ? plugins.replace(/(\.{1,3}\/)?(assets\/)?/gm, '') : plugins.util.noop())
            .pipe($config.run.js.replace ? plugins.replace('.php', '.html') : plugins.util.noop())
            .pipe(plugins.plumber.stop())
            .pipe(gulp.dest($config.paths.dest.all));
    };
};