const mix = require('laravel-mix');
mix.options({
    processCssUrls: false // Process/optimize relative stylesheet url()'s. Set to false, if you don't want them touched.
  });

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css');
mix.browserSync('http://localhost/markad');
