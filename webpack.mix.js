const mix = require('laravel-mix')
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

mix.webpackConfig({
  resolve: {
    alias: {
      // Alias for using source of BootstrapVue
      'bootstrap-vue$': 'bootstrap-vue/src/index.js'
    }
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        // Exclude transpiling `node_modules`, except `bootstrap-vue/src`
        exclude: /node_modules\/(?!bootstrap-vue\/src\/)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  }
})

mix.js('resources/js/app.js', 'public/js')
  .sass('resources/sass/auth.sass', 'public/css')
  .sass('resources/sass/app.scss', 'public/css')
  .sass('resources/sass/welcome.sass', 'public/css')
  .options({
    processCssUrls: false,
    postCss: [
      tailwind('./tailwind.config.js')
    ]
  })
