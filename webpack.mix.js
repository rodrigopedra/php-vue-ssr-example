const mix = require('laravel-mix');

mix.js('js/entry-client.js', 'public/js');
mix.js('js/entry-server.js', 'public/js');

mix.webpackConfig(() => {
    const config = {};

    config.resolve = {
        alias: {
            vue$: 'vue/dist/vue.runtime.common.js',
        },
    };

    return config;
});
