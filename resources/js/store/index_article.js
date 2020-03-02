import Vue from 'vue'
import Vuex from 'vuex'
import actions_article from './actions_article'
import mutations_article from './mutations_article'
import getters_article from './getters_article'
import state_article from "./state_article";

Vue.use(Vuex);

export default new Vuex.Store({
    state: state_article,
    mutations: mutations_article,
    getters: getters_article,
    actions: actions_article
})
