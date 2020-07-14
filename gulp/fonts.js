var $config = require('./config');
module.exports = function(gulp, plugins) {
    return function() {
        if ($config.run.fonts)
            gulp.src($config.paths.src.fonts)
            .pipe(gulp.dest($config.paths.dest.fonts));
    };
};