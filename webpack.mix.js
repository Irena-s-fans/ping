const mix = require('laravel-mix');

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
mix.js('resources/js/admin.js', 'public/js');
mix.sass('resources/css/index.scss', 'public/css')
    .options({
        processCssUrls: false
    })
    .sourceMaps(false);
mix.sass('resources/css/admin.scss', 'public/css')
    .options({
        processCssUrls: false
    })
    .sourceMaps(false);
