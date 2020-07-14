var $config = require('./config');
module.exports = (gulp, plugins) => {
    return () => {
        return gulp.src([$config.paths.src.css])
            .pipe(plugins.clean());
    };
};