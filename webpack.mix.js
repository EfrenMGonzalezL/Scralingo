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
    .js('resources/js/student/tabs.js', 'public/js')
    .js('resources/js/layouts/teacher.layout.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/layouts/student.layout.scss', 'public/css/layouts/')
    .sass('resources/sass/layouts/teacher.layout.scss', 'public/css/layouts/');
