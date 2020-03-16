/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
/*import Projects from './components/Projects';
import CreateProject from './components/CreateProject';

import Articles from './components/Articles';
import CreateArticle from './components/CreateArticle';

import Profiles from './components/Profiles';
import createProfile from './components/CreateProfile';

require('./bootstrap');

window.Vue = require('vue');*/

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
/*import store from './store'


Vue.component('projects', Projects);
Vue.component('createProject', CreateProject);

Vue.component('articles', Articles);
Vue.component('createArticle', CreateArticle);

Vue.component('profiles', Profiles);
Vue.component('createProfile', createProfile);

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
    store

});*/

//.......................................................................................................................

require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import * as VeeValidate from 'vee-validate';
import {routes} from './routes.js';
import storeData from './store.js';
import MainApp from './components/MainApp.vue';
import Projects from './components/Projects';
import CreateProject from './components/CreateProject';

import Articles from './components/Articles';
import CreateArticle from './components/CreateArticle';
import UpdateArticle from './components/UpdateArticle';

import Profiles from './components/Profiles';
import createProfile from './components/CreateProfile';

//import storee from './store'

Vue.use(VeeValidate);
Vue.use(VueRouter);
Vue.use(Vuex);

Vue.component('projects', Projects);
Vue.component('createProject', CreateProject);

Vue.component('articles', Articles);
Vue.component('createArticle', CreateArticle);
Vue.component('updateArticle', UpdateArticle);

Vue.component('profiles', Profiles);
Vue.component('createProfile', createProfile);

const router = new VueRouter({
    routes,
    mode: 'history'
});

const store = new Vuex.Store(storeData);

const app = new Vue({
    el: '#app',
    router,
    store,
    components: {
        MainApp
    }
});

