const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.webpackConfig({
    output: {
        chunkFilename: 'public/js/chunks/[name].[chunkhash].js'
    },
    stats: {
        children: true,
    },
});

mix.js('resources/js/app.js', 'public/js');
mix.js('resources/js/index.js', 'public/js');
mix.sass('resources/css/index.scss', 'public/css')
    .options({
        processCssUrls: false
    })
    .sourceMaps(false);
