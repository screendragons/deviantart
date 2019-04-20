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

mix.scripts([
	'resources/js/app.js',
	'node_modules/jquery/dist/jquery.min.js',
	'node_modules/bootstrap/dist/js/bootstrap.in.js'
], 'public/js/app.js')

   .sass('resources/sass/app.scss', 'public/css')
   .browserSync('localhost');
