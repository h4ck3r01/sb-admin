const mix = require('laravel-mix');
const CleanWebpackPlugin = require('clean-webpack-plugin');

var pathsToClean = [
    'public/js',
    'public/css',
];

var cleanOptions = {};

mix.webpackConfig({
    plugins: [
        new CleanWebpackPlugin(pathsToClean, cleanOptions)
    ]
});

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

mix.copy('bower_components/bootstrap/dist/fonts', 'public/fonts');
mix.copy('bower_components/fontawesome/fonts', 'public/fonts');

mix.styles([
    'bower_components/bootstrap/dist/css/bootstrap.css',
    'bower_components/fontawesome/css/font-awesome.css',
    'resources/assets/css/sb-admin.css',
    'resources/assets/css/timeline.css'
], 'public/css/app.css').version();

mix.scripts([
    'bower_components/jquery/dist/jquery.js',
    'bower_components/bootstrap/dist/js/bootstrap.js',
    'bower_components/Chart.js/Chart.js',
    'bower_components/metisMenu/dist/metisMenu.js',
    'resources/assets/js/sb-admin.js'
], 'public/js/app.js').version();

mix.styles([
    'node_modules/pace-progress/themes/blue/pace-theme-minimal.css',
    'node_modules/select2/dist/css/select2.min.css',
    'node_modules/jquery-confirm/dist/jquery-confirm.min.css'
], 'public/css/node_modules.css').version();

mix.scripts([
    'node_modules/pace-progress/pace.js',
    'node_modules/select2/dist/js/select2.min.js',
    'node_modules/jquery-confirm/dist/jquery-confirm.min.js'
], 'public/js/node_modules.js').version();