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

//НАЧАЛО для работы с модулем -=DEV=-
//основные скрипты
mix.scripts([

    'node_modules/jquery/dist/jquery.min.js',
    <!-- A DevExtreme library -->
    'node_modules/devextreme/dist/js/dx.all.js'
    // 'node_modules/devextreme/dist/js/dx.mobile.js',
    // 'node_modules/devextreme/dist/js/dx.viz.js',
    // 'node_modules/devextreme/dist/js/dx.web.js',
    // 'node_modules/devextreme/dist/js/dx.viz-web.js',
], 'Modules/Dev/Resources/assets/js/script_dev.js');

// дополнительные скрипты
// <!-- Reference Globalize if you need to localize app or your app uses custom date, number or currency formatting -->
mix.copy('node_modules/cldrjs/dist/cldr.js', 'Modules/Dev/Resources/assets/js/cldr.js');
mix.copy('node_modules/cldrjs/dist/cldr/event.js', 'Modules/Dev/Resources/assets/js/event.js');
mix.copy('node_modules/cldrjs/dist/cldr/supplemental.js', 'Modules/Dev/Resources/assets/js/upplemental.js');
mix.copy('node_modules/globalize/dist/globalize.js', 'Modules/Dev/Resources/assets/js/globalize.js');
mix.copy('node_modules/globalize/dist/globalize/message.js', 'Modules/Dev/Resources/assets/js/message.js');
mix.copy('node_modules/globalize/dist/globalize/number.js', 'Modules/Dev/Resources/assets/js/number.js');
mix.copy('node_modules/globalize/dist/globalize/currency.js', 'Modules/Dev/Resources/assets/js/currency.js');
mix.copy('node_modules/globalize/dist/globalize/date.js', 'Modules/Dev/Resources/assets/js/date.js');
<!-- Reference the JSZip script if you need client-side exporting -->
mix.copy('node_modules/jszip/dist/jszip.js', 'Modules/Dev/Resources/assets/js/jszip.js');

// основные стили devextreme
mix.styles([
    'node_modules/devextreme/dist/css/dx.common.css',
    'node_modules/devextreme/dist/css/dx.spa.css'
], 'Modules/Dev/Resources/assets/css/style_dev.css');
// стили devextreme
mix.copy('node_modules/devextreme/dist/css/dx.light.css', 'Modules/Dev/Resources/assets/css/dx.light.css');
mix.copy('node_modules/devextreme/dist/css/dx.dark.css', 'Modules/Dev/Resources/assets/css/dx.dark.css');
mix.copy('node_modules/devextreme/dist/css/dx.android5.light.css', 'Modules/Dev/Resources/assets/css/dx.android5.light.css');
mix.copy('node_modules/devextreme/dist/css/dx.carmine.compact.css', 'Modules/Dev/Resources/assets/css/dx.carmine.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.carmine.css', 'Modules/Dev/Resources/assets/css/dx.carmine.css');
mix.copy('node_modules/devextreme/dist/css/dx.contrast.compact.css', 'Modules/Dev/Resources/assets/css/dx.contrast.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.contrast.css', 'Modules/Dev/Resources/assets/css/dx.contrast.css');
mix.copy('node_modules/devextreme/dist/css/dx.dark.compact.css', 'Modules/Dev/Resources/assets/css/dx.dark.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.dark.css', 'Modules/Dev/Resources/assets/css/dx.dark.css');
mix.copy('node_modules/devextreme/dist/css/dx.darkmoon.compact.css', 'Modules/Dev/Resources/assets/css/dx.darkmoon.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.darkmoon.css', 'Modules/Dev/Resources/assets/css/dx.darkmoon.css');
mix.copy('node_modules/devextreme/dist/css/dx.darkviolet.compact.css', 'Modules/Dev/Resources/assets/css/dx.darkviolet.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.darkviolet.css', 'Modules/Dev/Resources/assets/css/dx.darkviolet.css');
mix.copy('node_modules/devextreme/dist/css/dx.greenmist.compact.css', 'Modules/Dev/Resources/assets/css/dx.greenmist.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.greenmist.css', 'Modules/Dev/Resources/assets/css/dx.greenmist.css');
mix.copy('node_modules/devextreme/dist/css/dx.ios7.default.css', 'Modules/Dev/Resources/assets/css/dx.ios7.default.css');
mix.copy('node_modules/devextreme/dist/css/dx.light.compact.css', 'Modules/Dev/Resources/assets/css/dx.light.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.light.css', 'Modules/Dev/Resources/assets/css/dx.light.css');
mix.copy('node_modules/devextreme/dist/css/dx.softblue.compact.css', 'Modules/Dev/Resources/assets/css/dx.softblue.compact.css');
mix.copy('node_modules/devextreme/dist/css/dx.softblue.css', 'Modules/Dev/Resources/assets/css/dx.softblue.css');
mix.copy('node_modules/devextreme/dist/css/dx.spa.css', 'Modules/Dev/Resources/assets/css/dx.spa.css');
mix.copy('node_modules/devextreme/dist/css/dx.win8.black.css', 'Modules/Dev/Resources/assets/css/dx.win8.black.css');
mix.copy('node_modules/devextreme/dist/css/dx.win8.white.css', 'Modules/Dev/Resources/assets/css/dx.win8.white.css');
mix.copy('node_modules/devextreme/dist/css/dx.win10.black.css', 'Modules/Dev/Resources/assets/css/dx.win10.black.css');
mix.copy('node_modules/devextreme/dist/css/dx.win10.white.css', 'Modules/Dev/Resources/assets/css/dx.win10.white.css');
//иконки
mix.mix.copyDirectory('node_modules/devextreme/dist/css/icons', 'Modules/Dev/Resources/assets/css/icons');

//КОНЕЦ для работы с модулем -=DEV=-
//====================================
//НАЧАЛО для работы с модулем -=BLOG=-



// КОНЕЦ для работы с модулем -=BLOG=-
//====================================