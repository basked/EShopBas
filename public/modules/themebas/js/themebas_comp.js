
let Basmenu = require('./components/BasMenu.vue');
let Basmenu1 = require('./components/BasMenu1.vue');
let Bastable = require('./components/BasTables.vue');
let Bascart = require('./components/BasCart.vue');
let Bascontent = require('./components/BasContent.vue');
let Basfooter = require('./components/BasFooter.vue');

const basmenu = new Vue({
    el: '#basdiv',
    components: {Basmenu,Basmenu1,Bastable,Bascart,Bascontent,Basfooter}
});
