
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//login
Vue.component('headerNav', require('./components/common/HeaderNav.vue'));
Vue.component('login', require('./components/login/Login.vue'));

// test
Vue.component('tHeaderNav', require('./components/test/HeaderNav.vue'));
Vue.component('example', require('./components/test/Example.vue'));

const app = new Vue({
    el: '#app'
});
