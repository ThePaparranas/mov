/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue'
import Vuex from 'vuex'
import router from './router'
import VueRouter from 'vue-router'
import Storage from './store/store'

// import BootstrapVue from 'bootstrap-vue'
import { ModalPlugin, TablePlugin } from 'bootstrap-vue'
import './bootstrap-vue-custom.scss'
import 'vue-material-design-icons/styles.css'

require('./bootstrap')
require('animate.css')
require('babel-polyfill')

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.use(Vuex)
Vue.use(VueRouter)
// Vue.use(BootstrapVue)
Vue.use(ModalPlugin)
Vue.use(TablePlugin)

Vue.component('App', require('./components/App.vue').default)

/**
 * Set up Vuex store
 */
const store = new Vuex.Store(Storage())

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
// eslint-disable-next-line no-unused-vars
const app = new Vue({
  el: '#app',
  router,
  store
})
