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
   .sass('resources/sass/app.scss', 'public/css').version();

// mix.styles([
//     'resources/css/bootstrap-gantry.css',
//     'resources/css/cookieconsent.min.css',
//     'resources/css/custom.css',
//     'resources/css/dotnav.min.css',
//     'resources/css/dynamic-captions.css',
//     'resources/css/font-awesome.min.css',
//     'resources/css/fontello.css',
//     'resources/css/greeennature.css',
//     'resources/css/greeennature-joomla.css',
//     'resources/css/icomoon.css',
//     'resources/css/joomla.css',
//     'resources/css/module-default.css',
//     'resources/css/nucleus.css',
//     'resources/css/settings.css',
//     'resources/css/slidenav.min.css',
//     'resources/css/slider.min.css',
//     'resources/css/static-captions.css',
//     'resources/css/uikit.min.css',
// ], 'public/css/template.css');
