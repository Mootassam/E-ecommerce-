/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');
window.EventBus = new Vue();
import router from './router'
import Vue from 'vue';
import VueToast from 'vue-toast-notification';
// Import one of available themes
import 'vue-toast-notification/dist/theme-default.css';
//import 'vue-toast-notification/dist/theme-sugar.css';


Vue.use(VueToast);

import Cart from './components/Helpers/Cart'
window.Cart = Cart
    /**
     * Next, we will create a fresh Vue application instance and attach it to
     * the page. Then, you may begin adding components to this application
     * or customize the JavaScript scaffolding to fit your unique needs.
     */
    // backoffice
Vue.component('footers', require('./components/Layouts/footers'));
Vue.component('sidebar', require('./components/Layouts/sidebar'));

Vue.component('example-component', require('./components/AppComponent.vue'));

// forentend

Vue.component('site-component', require('./components/siteCompoenent.vue'))
Vue.component('contents-component', require('./components/frontend/Content/content'))
Vue.component('foot-component', require('./components/frontend/Footers/footersq'))

//Helpers//



const app = new Vue({
    el: '#app',
    router,
});