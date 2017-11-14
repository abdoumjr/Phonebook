
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)
//
Vue.component('one', require('./components/one.vue'));
Vue.component('three', require('./components/three.vue'));
Vue.component('two', require('./components/two.vue'));

Vue.component('add', require('./components/add.vue'));
//
// let mjrHeader = require('./components/mjrHeader.vue');
// let mjrFooter = require('./components/mjrFooter.vue');
// let mjrBody = require('./components/mjrBody.vue');
//
//
// const routes = [
//   { path: '/home', component: mjrBody },
//
// ];
//
// const router = new VueRouter({
//   // mode : 'history',
//   routes // short for `routes: routes`
// });
//


const app = new Vue({
    el: '#app',
    // components : { one, two, three }
    // router,
});
