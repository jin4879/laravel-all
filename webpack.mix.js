const mix = require('laravel-mix');

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
    .js('resources/js/common/common.js', 'public/js/common')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/auth/auth.scss', 'public/css/auth')
   .sass('resources/sass/layouts/layouts.scss', 'public/css/layout')
   .sass('resources/sass/home/home.scss', 'public/css/home');
