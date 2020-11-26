const _ = require('lodash')
const pkg = require('../package.json')
const gutil = require('gulp-util')
const env = gutil.env.env || 'development'
const header = require('gulp-header')
let dest,
  min = ''

switch (env) {
  case 'development':
    dest = 'pages/'
    break
  case 'test':
    dest = 'dist/test/'
    break
  case 'production':
    dest = 'dist/production/'
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
  plugins: `/assets/css/plugins${min}.css`,
  portal: `/assets/css/master${min}.css`,
  plus: `/assets/css/plus${min}.css`,
  cssinternas: `/assets/css/internas${min}.css`,
  cssnoticias: `/assets/css/noticias${min}.css`,
  cssbiblioteca: `/assets/css/biblioteca${min}.css`,
  csshome: `/assets/css/home${min}.css`,
  css9: {
    src: `/assets/css/ie${min}.css`,
    tpl: '<!--[if lt IE 9]><link rel="stylesheet" href="%s"></link><![endif]-->'
  },
  css8: {
    src: `/assets/css/ie8${min}.css`,
    tpl: '<!--[if lt IE 8]><link rel="stylesheet" href="%s"></link><![endif]-->'
  },
  js9: {
    src: `/assets/js/ie/ie${min}.js`,
    tpl: '<!--[if lt IE 9]><script src="%s"></script><![endif]-->'
  },
  js8: {
    src: `/assets/js/ie/ie8${min}.js`,
    tpl: '<!--[if lt IE 8]><script src="%s"></script><![endif]-->'
  },
  jshead: `/assets/js/modernizr${min}.js`,
  jsvendor: `/assets/js/vendor${min}.js`,
  jsrybena: `/assets/js/rybena${min}.js?positionPlayer=left`,
  jsexternal: `/assets/js/external${min}.js`,
  jsportal: `/assets/js/portal${min}.js`,
  jshome: `/assets/js/home${min}.js`,
  jsinternas: `/assets/js/internas${min}.js`
}

const paths = {
  src: {
    base: './',
    php: ['pages/**/*.php','!pages/**/*.inc.php', '!pages/internacional/**/*.php'],
    html: '**/*.html',
    css: 'assets/css/**/*.css',
    sass: 'scss/**/*.scss',
    img: 'pages/assets/imagens/**/*.+(png|jpg|bmp|svg)',
    fonts: 'pages/assets/fonts/**/*.+(otf|eot|svg|ttf|woff|woff2)',
    js: 'pages/assets/js',
    ieplugins: [
      'node_modules/html5shiv/dist/html5shiv.js',
      'node_modules/html5shiv/dist/html5shiv-printshiv.js',
      'pages/assets/js/vendor/respond.js',
      'node_modules/what-input/dist/lte-IE8.js',
      'pages/assets/js/ie/*.js'
    ],
    vendor: [
      'pages/assets/js/vendor/modernizr.js',
      'pages/assets/js/vendor/bootstrap-datepicker.js'
    ],
    rybena: ['pages/assets/js/vendor/rybena.js']
  },
  dest: {
    all: dest,
    js: `${dest}/assets/js`,
    img: `${dest}/assets/imagens`,
    css: `${dest}/assets/css`,
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
