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

const admfooter = new Vue({
    el: '#admin-footer',
    components: {Adminfooter}
});
const admdashboard = new Vue({
    el: '#admin-dashboard',
    components: {Admindashboard}
});
const admtable = new Vue({
    el: '#admin-table',
    components: {Admintable}
});

