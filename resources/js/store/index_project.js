import Vue from 'vue'
import Vuex from 'vuex'
import actions_project from './actions_project'
import mutations_project from './mutations_project'
import getters_project from './getters_project'
import state_project from "./state_project";

Vue.use(Vuex);

export default new Vuex.Store({
    state: state_project,
    mutations: mutations_project,
    getters: getters_project,
    actions: actions_project
})
