var config = require('./config');
module.exports = (gulp, plugins) => {
    return () => {
        gulp.src(config.paths.src.js + '/*.js')
            .pipe(plugins.jshint({ esversion: 6 }))
            .pipe(plugins.jshint.reporter());
    };
};