/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Profiles from './components/Profiles';
import createProfile from './components/CreateProfile';

require('./bootstrap');

window.Vue = require('vue');

import store from './store/index'


Vue.component('profiles', Profiles);
Vue.component('createProfile', createProfile);

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
const app = new Vue({
    el: '#app',
    store
});



