var $config = require('./config'),
    $browserSync = require('browser-sync').create();
module.exports = (gulp, plugins) => {
    return () => {
        if (gulp.tasks.default.running != undefined) {
            $browserSync.init({
                baseDir: $config.paths.src.base
            });
        }
        gulp.watch($config.paths.src.sass, ['sass']);
        gulp.watch($config.paths.src.js + '/*.js', ['jshint']).on('change', $browserSync.reload);
        gulp.watch($config.paths.src.css).on('change', $browserSync.reload);
        gulp.watch($config.paths.src.php).on('change', $browserSync.reload);
        gulp.watch($config.paths.src.base + '/inc/*.php').on('change', $browserSync.reload);
    };
};