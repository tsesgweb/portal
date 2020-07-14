var $config = require('./config');
module.exports = (gulp, plugins) => {
    return () => {
        gulp.src($config.paths.src.sass + '/**/*.scss')
            .pipe(plugins.sassLint())
            .pipe(plugins.sassLint.format());
    };
};