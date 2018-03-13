/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Vue = require('vue');

let Adminfooter = require('./components/AdminFooter.vue');
let Admintable = require('./components/AdminTable.vue');
let Admindashboard = require('./components/AdminDashboard.vue');

//require('./../../../Modules/ThemeBas/Resources/assets/js/themebas_comp');
/*bas
const admfooter = new Vue({
    el: '#admfooter',
    components: {Adminfooter}
});



! пока закоментим
const admdashboard = new Vue({
    el: '#admdashboard',
    components: {Admindashboard}
});
const admtable = new Vue({
    el: '#admtable',
    components: {Admintable}
});

*/