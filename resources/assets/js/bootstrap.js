window._ = require('lodash');
window.Popper = require('popper.js').default;

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.$ = window.jQuery = require('jquery');
    // для графиков
    window.Chart = require('chart.js/dist/Chart.js');
    window.TypeaHead = require('bootstrap-3-typeahead/bootstrap3-typeahead.min');
    // слайдер обзываем noUiSlider для коректной работы form-adwansed.js
    window.noUiSlider = require('nouislider/distribute/nouislider.min');
    window.select = require('bootstrap-select/dist/js/bootstrap-select.min');

    require('bootstrap');

    // window.moment= require('moment/min/moment.min');
    require('messenger-hubspot/build/js/messenger.min.js');
    require('jquery.cookie/jquery.cookie.js');
    // для админки dark-admin работа с таблицами // нкжно придумаьб как загружыть только для datatables
    require('datatables.net/js/jquery.dataTables');
    require('datatables.net-bs4/js/dataTables.bootstrap4');
    require('datatables.net-responsive/js/dataTables.responsive.min');
    require('datatables.net-responsive-bs4/js/responsive.bootstrap4.min');

    // gaugeJS
    require('gaugeJS/dist/gauge.min');
    require('jquery-sparkline/jquery.sparkline.min');
    // forms-ardwanced

    require('bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min');
    require('bootstrap-datepicker/dist/js/bootstrap-datepicker.min');
    require('bootstrap-tagsinput/src/bootstrap-tagsinput');
    require('jasny-bootstrap/dist/js/jasny-bootstrap.min');
    require('multiselect/js/jquery.multi-select.js');

    // editors
    // summernote
    require('summernote/dist/summernote-bs4.min');
    // dropezone
    window.Dropzone = require('dropzone/dist/dropzone');


    // Calendar

    require('fullcalendar/dist/fullcalendar.min.js');
    require('fullcalendar/dist/gcal.min.js');

    // Galary
    require('lightbox2/dist/js/lightbox.min');

    // notyfications
    require('messenger-hubspot/build/js/messenger.min.js');

    // button loaders
    require('ladda/dist/spin.min.js');
    window.Ladda =require('ladda/dist/ladda.min.js');

} catch (e) {
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */


// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
