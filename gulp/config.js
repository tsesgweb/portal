const _ = require('lodash')
const pkg = require('../package.json')
const gutil = require('gulp-util')
const env = gutil.env.env || 'development'
const header = require('gulp-header')
let dest,
  min = ''

switch (env) {
  case 'development':
    dest = 'pages/assets/'
    break
  case 'test':
    dest = 'dist/test/'
    break
  case 'production':
    dest = 'production/'
    min = '.min'
    break
}

const banner = [
  '/**',
  ' * <%= pkg.author %> - v<%= pkg.version %>',
  ' */'
].join('\n');

const htmlreplace = {
  external: '',
  cssvendor: '',
  plugins: `css/plugins${min}.css`,
  portal: `css/master${min}.css`,
  plus: `css/plus${min}.css`,
  cssinternas: `css/internas${min}.css`,
  cssnoticias: `css/noticias${min}.css`,
  cssbiblioteca: `css/biblioteca${min}.css`,
  csshome: `css/home${min}.css`,
  css9: {
    src: `css/ie${min}.css`,
    tpl: '<!--[if lt IE 9]><link rel="stylesheet" href="%s"></link><![endif]-->'
  },
  css8: {
    src: `css/ie8${min}.css`,
    tpl: '<!--[if lt IE 8]><link rel="stylesheet" href="%s"></link><![endif]-->'
  },
  js9: {
    src: `js/ie${min}.js`,
    tpl: '<!--[if lt IE 9]><script src="%s"></script><![endif]-->'
  },
  js8: {
    src: `js/ie8${min}.js`,
    tpl: '<!--[if lt IE 8]><script src="%s"></script><![endif]-->'
  },
  jshead: `js/modernizr${min}.js`,
  jsvendor: `js/vendor${min}.js`,
  jsrybena: `js/rybena${min}.js?positionPlayer=left`,
  jsexternal: `js/external${min}.js`,
  jsportal: `js/portal${min}.js`,
  jshome: `js/home${min}.js`,
  jsinternas: `js/internas${min}.js`
}

const paths = {
  src: {
    base: './',
    php: ['pages/**/*.php','!pages/**/*.inc.php', '!pages/internacional/**/*.php'],
    html: '**/*.html',
    css: 'pages/assets/css/**/*.css',
    sass: 'scss/**/*.scss',
    img: 'pages/assets/imagens/**/*.+(png|jpg|bmp|svg)',
    fonts: 'pages/assets/fonts/**/*.+(otf|eot|svg|ttf|woff|woff2)',
    js: 'assets/js',
    ieplugins: [
      'assets/js/ie/html5shiv.js',
      'assets/js/ie/html5shiv-printshiv.js',
      'assets/js/ie/respond.js',
      'assets/js/ie/lte-IE8.js',
      'assets/js/ie/*.js'
    ],
    vendor: [
      'assets/js/vendor/modernizr.js',
      'assets/js/vendor/bootstrap-datepicker.js'
    ],
    rybena: [
      'assets/js/vendor/rybena.js'
    ]
  },
  dest: {
    all: dest,
    js: `${dest}/js`,
    img: `${dest}/imagens`,
    css: `${dest}/css`,
    fonts: `${dest}/fonts`,
  },
  srcen: {
    php: 'en/*.php',
    img: [
      'assets/imagens/internacional/*.+(png|jpg|bmp)',
      'assets/imagens/*.+(png|jpg|bmp)'
    ]
  },
  desten: {
    all: dest + 'internacional/',
    js: dest + 'internacional/js',
    img: dest + 'internacional/imagens/',
    css: dest + 'internacional/css/',
    fonts: dest + 'internacional/fonts/'
  }
}
const constants = {
  default: {
    apiHost: '127.0.0.1:8000',
    htmlreplace: {}
  },
  development: {
    apiHost: '127.0.0.1:8000',
    htmlreplace: {}
  },
  test: {
    apiHost: '127.0.0.1:8000/' + dest,
    htmlreplace: htmlreplace
  },
  production: {
    apiHost: 'http://webhomologa.tse.jus.br/portal',
    htmlreplace: htmlreplace
  }
}
const run = {
  default: {
    imagemin: false,
    js: {
      uglify: false,
      concat: false,
      minify: false,
      rename: false,
      replace: false
    },
    css: {
      autoprefix: false,
      cssminify: false,
      maps: true,
      minify: false,
      rename: false
    },
    sass: 'compact',
    html: false,
    scripts: false,
    fonts: false,
    imagens: false,
    banner: {
      signature: false
    }
  },
  development: {
    imagemin: false,
    js: {
      uglify: false,
      concat: false,
      minify: false,
      rename: false,
      replace: false
    },
    css: {
      autoprefix: false,
      cssminify: false,
      maps: true,
      minify: false,
      rename: false
    },
    sass: 'expanded',
    html: false,
    scripts: false,
    fonts: false,
    imgs: false,
    banner: {
      signature: false
    }
  },
  test: {
    imagemin: true,
    js: {
      uglify: false,
      concat: true,
      minify: false,
      rename: true,
      replace: true
    },
    css: {
      autoprefix: true,
      cssminify: true,
      maps: false,
      minify: false,
      rename: true
    },
    sass: 'nested',
    html: true,
    scripts: true,
    fonts: true,
    imgs: true,
    banner: {
      signature: true
    }
  },
  production: {
    imagemin: true,
    js: {
      uglify: true,
      concat: true,
      minify: true,
      rename: true,
      replace: true
    },
    css: {
      autoprefix: true,
      cssminify: true,
      maps: false,
      minify: true,
      rename: true
    },
    sass: 'compressed',
    html: true,
    scripts: true,
    fonts: true,
    imgs: true,
    banner: {
      signature: true,
      logo: header(banner, {
        pkg: pkg
      })
    }
  }
}

const runOpts = _.merge({}, run.default, run[env])
const constantsOpts = _.merge({}, constants.default, constants[env])
module.exports.paths = paths
module.exports.constants = constantsOpts
module.exports.run = runOpts
