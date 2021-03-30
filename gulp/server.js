var $config = require('./config'),
    $browserSync = require('browser-sync').create();
module.exports = function(gulp, plugins) {
    return function() {
        plugins.connectPhp.server({ 
          stdio: 'ignore',
          base: 'pages',          
        }, () => {
            $browserSync.init({
                proxy: $config.constants.apiHost,
            });
        });
        gulp.watch($config.paths.src.sass, ['sass']);
        gulp.watch($config.paths.src.js + '/**/*.js', ['jshint']).on('change', $browserSync.reload);
        gulp.watch($config.paths.src.css).on('change', $browserSync.reload);
        gulp.watch($config.paths.src.php).on('change', $browserSync.reload);
        gulp.watch($config.paths.src.base + '/**/*.php').on('change', $browserSync.reload);        
    };
};