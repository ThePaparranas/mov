const mix = require('laravel-mix');
const tailwind = require('tailwindcss')

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/auth.sass', 'public/css')
  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/welcome.sass', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [
      tailwind('./tailwind.config.js'),
    ]
  });
