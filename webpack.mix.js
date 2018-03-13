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

// создадим файл для импорты всех компонентов vue
mix.js('resources/assets/js/components.js', 'public/js');

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');

// styles devexetreme собираем все стили в один
mix.styles(['node_modules/devextreme/dist/css/dx.dark.css',
    'node_modules/devextreme/dist/css/dx.spa.css',
    'node_modules/devextreme/dist/css/dx.common.css'], 'public/devextreme/css/style.css');

// scripts devexetreme собираем все стили в один
mix.scripts(['node_modules/jquery/dist/jquery.min.js',

    'node_modules/devextreme/dist/js/dx.all.js'], 'public/devextreme/js/devall.js');
