const mix = require('laravel-mix');
const postcssPresetEnv = require('postcss-preset-env');


mix.js('resources/js/site.js', 'public/js')
    .sass('resources/scss/site.scss', 'public/css')
    .options({
    	processCssUrls: false,
    	uglify: mix.inProduction(),
        postCss: [
            postcssPresetEnv({
                enableClientSidePolyfills: false,
            }),
        ],
    })
 	.sourceMaps()
   	.version();


if (mix.inProduction()) {
   mix.version();
}