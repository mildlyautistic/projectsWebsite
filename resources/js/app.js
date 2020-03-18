/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';
import VueRouter from 'vue-router';
import Vuex from 'vuex';
import * as VeeValidate from 'vee-validate';
import {routes} from './routes.js';
import storeData from './store.js';
import MainApp from './components/MainApp.vue';
import axios from 'axios';
import Projects from './components/Projects';
import CreateProject from './components/CreateProject';
import UpdateProject from './components/UpdateProject';

import Articles from './components/Articles';
import CreateArticle from './components/CreateArticle';
import UpdateArticle from './components/UpdateArticle';

import Profiles from './components/Profiles';
import createProfile from './components/CreateProfile';
import UpdateProfile from './components/UpdateProfile';

Vue.use(VeeValidate);
Vue.use(VueRouter);
Vue.use(Vuex);

Vue.component('projects', Projects);
Vue.component('createProject', CreateProject);
Vue.component('updateProject', UpdateProject);

Vue.component('articles', Articles);
Vue.component('createArticle', CreateArticle);
Vue.component('updateArticle', UpdateArticle);

Vue.component('profiles', Profiles);
Vue.component('createProfile', createProfile);
Vue.component('updateProfile', UpdateProfile);

const router = new VueRouter({
    routes,
    mode: 'history'
});

const store = new Vuex.Store(storeData);

const app = new Vue({
    el: '#app',
    router,
    store,
    created () {
    const userString = localStorage.getItem('complete')
    if(userString) {
        const payload = JSON.parse(userString)
        this.$store.commit('loginSuccess',payload)
        this.$store.commit('login')
    }
    axios.interceptors.response.use(
        response => response,
        error => {
            if(error.response.status === 401) {
                this.$store.dispatch('logout')
            }
            return Promise.reject(error)
        })
  },
    components: {
        MainApp
    }
});

