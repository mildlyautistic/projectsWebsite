/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import Projects from './components/Projects';
import CreateProject from './components/CreateProject';

import Articles from './components/Articles';
import CreateArticle from './components/CreateArticle';

import Profiles from './components/Profiles';
import createProfile from './components/CreateProfile';

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
import store from './store/index.js'

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
});

