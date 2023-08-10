// webpack.mix.js

const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix
  .setResourceRoot('./')
  .setPublicPath('dist')
  .autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
  })

  .js('assets/js/app.js', 'js')
  //.js('assets/js/blog-ajax.js', 'js')
  .sass('assets/sass/app.sass', 'css')
  .sass('assets/sass/admin-login.sass', 'css')
  .options({
    postCss: [ tailwindcss('./tailwind.config.js') ],
  })

  .browserSync({
    proxy: "felixlodge.local",
    files: ["./**/*.php", "./dist/js/*.js", "./dist/css/*.css"]
  })
  .disableNotifications();
  

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}