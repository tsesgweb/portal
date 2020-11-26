var $gulp = require('gulp'),
    $plugins = require('gulp-load-plugins')(),
    getTask = (task) => require('./gulp/' + task)($gulp, $plugins, func = null);

//chama os arquivos getTask('') e suas tasks
$gulp.task('clean', getTask('clean'));
$gulp.task('jshint', getTask('jshint'));
$gulp.task('sasslint', getTask('sasslint'));
$gulp.task('watch', getTask('watch'));
$gulp.task('html', getTask('html'));
$gulp.task('scripts', getTask('scripts'));
$gulp.task('sass', getTask('sass'));
$gulp.task('imagens', getTask('imagens'));
$gulp.task('fonts', getTask('fonts'));
$gulp.task('serve', getTask('server'));
$gulp.task('close', getTask('close'));
$gulp.task('en', getTask('en'));
//Default task usage:
//gulp
$gulp.task('default', ['sass'], (cb) => $plugins.sequence('jshint', ['sasslint', 'watch'], cb));
$gulp.task('watch', ['sass'], (cb) => $plugins.sequence('watch', ['sasslint'], cb));
//PHP server usage:
//gulp server
$gulp.task('server', ['sass'], (cb) => $plugins.sequence('close', ['serve', 'sasslint', 'jshint'], cb));
//Build usage:
//gulp build
//gulp build --env test
//gulp build --env production
$gulp.task('build', (cb) => $plugins.sequence('sass', ['scripts', 'imagens', 'fonts', 'html'], cb));
//Build usage:
//gulp build:en
//gulp build:en --env test
//gulp build:en --env production
$gulp.task('build:en', (cb) => $plugins.sequence('en', ['sass', 'html', 'scripts', 'imagens', 'fonts'], cb));