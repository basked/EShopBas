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
], 'Modules/Dev/Resources/assets/js/Dev_script.js');

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
], 'Modules/Dev/Resources/assets/css/Dev_style.css');
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
mix.styles([
    'node_modules/admin-lte/dist/css/adminlte.min.css',
    'node_modules/admin-lte/plugins/iCheck/flat/blue.css',
    'node_modules/admin-lte/plugins/morris/morris.css',
    'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
    'node_modules/admin-lte/plugins/datepicker/datepicker3.css',
    'node_modules/admin-lte/plugins/daterangepicker/daterangepicker-bs3.css',
    'node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
    'node_modules/admin-lte/plugins/font-awesome/css/font-awesome.min.css'
], 'Modules/Blog/Resources/assets/css/Blog_admin.css');

mix.scripts([
    'node_modules/admin-lte/plugins/jquery/jquery.min.js',
   // 'node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'node_modules/admin-lte/plugins/morris/morris.min.js',
    'node_modules/admin-lte/plugins/sparkline/jquery.sparkline.min.js',
    'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    'node_modules/admin-lte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    'node_modules/admin-lte/plugins/knob/jquery.knob.js',
    'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js',
    'node_modules/admin-lte/plugins/datepicker/bootstrap-datepicker.js',
    'node_modules/admin-lte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    'node_modules/admin-lte/plugins/slimScroll/jquery.slimscroll.min.js',
    'node_modules/admin-lte/plugins/daterangepicker/daterangepicker.js',
    'node_modules/admin-lte/plugins/fastclick/fastclick.js',
    'node_modules/admin-lte/dist/js/adminlte.js',
    'node_modules/admin-lte/dist/js/pages/dashboard.js',
    'node_modules/admin-lte/dist/js/demo.js'
], 'Modules/Blog/Resources/assets/js/Blog_admin.js');

mix.copy('Modules/Blog/Resources/assets/admin/assets/bootstrap/fonts', 'Modules/Blog/Resources/assets/fonts');
mix.copy('Modules/Blog/Resources/assets/admin/assets/dist/fonts', 'Modules/Blog/Resources/assets/fonts');
mix.copy('Modules/Blog/Resources/assets/admin/assets/dist/img', 'Modules/Blog/Resources/assets/img');


// КОНЕЦ для работы с модулем -=BLOG=-
//====================================
//НАЧАЛО для работы с модулем -=COURSE=-
mix.styles([
    'node_modules/video.js/dist/video-js.css',
    'node_modules/videojs-playlist/dist/videojs-playlist.js',
    'node_modules/videojs-playlist-ui/dist/videojs-playlist-ui.css'
], 'Modules/Course/Resources/assets/css/Course_videojs.css');

mix.scripts([
    'node_modules/video.js/dist/video.js',
    'node_modules/videojs-playlist/dist/videojs-playlist.js',
    'node_modules/videojs-playlist-ui/dist/videojs-playlist-ui.js',
    'node_modules/videojs-playbackrate-adjuster/dist/browser/videojs-playbackrate-adjuster.js'
], 'Modules/Course/Resources/assets/js/Course_videojs.js');

// КОНЕЦ для работы с модулем -=COURSE=-
//====================================