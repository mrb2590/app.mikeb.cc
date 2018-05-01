let mix = require('laravel-mix');

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

mix.webpackConfig({})

	// Copy Brick Breaker assets
	.copyDirectory('resources/assets/js/games/brick-breaker', 'public/js/games/brick-breaker')
	.copyDirectory('resources/assets/css/games/brick-breaker', 'public/css/games/brick-breaker')
	.copyDirectory('resources/assets/images/games/brick-breaker', 'public/images/games/brick-breaker')

	// Copy Pong assets
	.copyDirectory('resources/assets/js/games/pong', 'public/js/games/pong')
	.copyDirectory('resources/assets/css/games/pong', 'public/css/games/pong')

	// Compile app
	.js('resources/assets/js/app.js', 'public/js')
	.sass('resources/assets/sass/app.scss', 'public/css')
	.extract(['jquery', 'bootstrap-sass', 'toastr'])
	.autoload({
		jquery: ['$', 'window.jQuery', 'jQuery', 'jquery'],
	})
	.version()
	.sourceMaps();
