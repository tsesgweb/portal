var $config = require('./config');
module.exports = (gulp, plugins) => {
    return () => {
        if ($config.run.imgs)
            gulp.src($config.paths.src.img)
            .pipe(plugins.plumber())
            // .pipe($config.run.imagemin ? plugins.imagemin({
            //     interlaced: true,
            //     progressive: true,
            //     optimizationLevel: 9,
            //     svgoPlugins: [{ removeViewBox: true }]
            // }) : plugins.util.noop())
            .pipe(plugins.plumber.stop())
            .pipe(gulp.dest($config.paths.dest.img));
    };
};