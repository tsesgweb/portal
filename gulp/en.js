var $config = require('./config');
module.exports = (gulp, plugins) => {
    return () => {
        $config.constants.htmlreplace = $config.constants.htmlreplaceen;
        $config.paths.src.php = $config.paths.srcen.php;
        // $config.paths.src.img = $config.paths.srcen.img;
        $config.paths.dest.all = $config.paths.desten.all;
        $config.paths.dest.js = $config.paths.desten.js;
        $config.paths.dest.img = $config.paths.desten.img;
        $config.paths.dest.css = $config.paths.desten.css;
        $config.paths.dest.fonts = $config.paths.desten.fonts;
    };
};