import Vue from 'vue'
import App from '../App.vue'
import router from '../router'
import store from '../store'
import Axios from 'axios'
//import Register from './components/Register';

//Vue.component('register',Register);
Vue.prototype.$http = Axios;

const token = localStorage.getItem('user-token');
if (token) {
    Vue.prototype.$http.defaults.headers.common['Authorization'] = token
}

/*require('./bootstrap');

window.Vue = require('vue');*/

Vue.config.productionTip = false;

new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
}).$mount('#app');
