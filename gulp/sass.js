var $config = require('./config'),
    $browserSync = require('browser-sync').create();
module.exports = (gulp, plugins) => {
    return () => {
        gulp.src($config.paths.src.sass)
            .pipe(plugins.plumber())
            .pipe($config.run.css.maps ? plugins.sourcemaps.init({
                loadMaps: true
            }) : plugins.util.noop())
            .pipe(plugins.sass({
                indentType: 'tab',
                indentWidth: 1,
                outputStyle: $config.run.sass
            }).on('error', plugins.sass.logError))
            .pipe($config.run.autoprefix ? plugins.postcss([
                    plugins.autoprefixer({
                        browsers: ['last 2 version', 'safari 5', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'],
                        cascade: false
                    })
                ]) :
                plugins.util.noop())
            .pipe($config.run.css.minify ?
                plugins.rename({
                    suffix: ".min",
                    extname: ".css"
                }) : plugins.util.noop())
            .pipe($config.run.cssminify ?
                plugins.minifyCss() : plugins.util.noop())
            .pipe($config.run.css.maps ?
                plugins.sourcemaps.write() : plugins.util.noop())
            // .pipe(plugins.groupCssMediaQueries())
            .pipe(gulp.dest($config.paths.dest.css))
            .pipe($browserSync.reload({
                stream: true
            }));
    };
};