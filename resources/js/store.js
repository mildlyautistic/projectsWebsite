import {getLoggedinUser} from './partials/auth';
const user = getLoggedinUser();
export default {
    state: {
        currentUser: user,
        isLoggedIn: !!user,
        loading: false,
        auth_error: null,
        reg_error:null,
        registeredUser: null,
        profiles: [],
        articles: [],
        projects: []
    },
    getters: {
        isLoading(state){
            return state.loading;
        },
        isLoggedin(state){
            return state.isLoggedIn;
        },
        currentUser(state){
            return state.currentUser;
        },
        authError(state){
            return state.auth_error;
        },
        regError(state){
            return state.reg_error;
        },
        registeredUser(state){
            return state.registeredUser;
        },
        profiles: state => {
            return state.profiles
        },
        articles: state => {
            return state.articles
        },
        projects: state => {
            return state.projects
        }
    },
    mutations: {
        login(state){
            state.loading = true;
            state.auth_error = null;
        },

        loginSuccess(state, payload){
            state.auth_error = null;
            state.isLoggedin = true;
            state.loading = false;
            state.currentUser = Object.assign({}, payload.user, {token: payload.access_token});
            localStorage.setItem("user", JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload){
            state.loading = false;
            state.auth_error = payload.error;
        },
        logout(state){
            localStorage.removeItem("user");
            state.isLoggedin = false;
            state.currentUser = null;
        },
        registerSuccess(state, payload){
            state.reg_error = null;
            state.registeredUser = payload.user;
        },
        registerFailed(state, payload){
            state.reg_error = payload.error;
        },
        CREATE_PROFILE(state, profile) {
            state.profiles.unshift(profile)
        },
        FETCH_PROFILES(state, profiles) {
            return state.profiles = profiles
        },
        DELETE_PROFILE(state, profile) {
            let index = state.profiles.findIndex(item => item.id === profile.id)
            state.profile.splice(index, 1)
        },
        CREATE_ARTICLE(state, article) {
            state.articles.unshift(article)
        },
        FETCH_ARTICLES(state, articles) {
            return state.articles = articles
        },
        DELETE_ARTICLE(state, article) {
            let index = state.articles.findIndex(item => item.id === article.id)
            state.articles.splice(index, 1)
        },
        CREATE_PROJECT(state, project) {
            state.projects.unshift(project)
        },
        FETCH_PROJECTS(state, projects) {
            return state.projects = projects
        },
        DELETE_PROJECT(state, project) {
            let index = state.projects.findIndex(item => item.id === project.id)
            state.projects.splice(index, 1)
        }
    },
    actions: {
        login(context){
            context.commit("login");
        },

        createProfile({commit}, profile) {
            axios.post('/api/profiles', profile)
                .then(res => {
                    commit('CREATE_PROFILE', res.data)
                }).catch(err => {
                console.log(err)
            })

        },
        fetchProfiles({commit}) {
            axios.get('/api/profiles')
                .then(res => {
                    commit('FETCH_PROFILES', res.data)
                }).catch(err => {
                console.log(err)
            })
        },
        deleteProfile({commit}, profile) {
            axios.delete(`/api/profiles/${profile.id}`)
                .then(res => {
                    if (res.data === 'ok')
                        commit('DELETE_PROFILE', profile)
                }).catch(err => {
                console.log(err)
            })
        },
        createArticle({commit}, article) {
            axios.post('/api/articles', article)
                .then(res => {
                    commit('CREATE_ARTICLE', res.data)
                }).catch(err => {
                console.log(err)
            })

        },
        fetchArticles({commit}) {
            axios.get('/api/articles')
                .then(res => {
                    commit('FETCH_ARTICLES', res.data)
                }).catch(err => {
                console.log(err)
            })
        },
        deleteArticle({commit}, article) {
            axios.delete(`/api/articles/${article.id}`)
                .then(res => {
                    if (res.data === 'ok')
                        commit('DELETE_ARTICLE', article)
                }).catch(err => {
                console.log(err)
            })
        },
        createProject({commit}, project) {
            axios.post('/api/projects', project)
                .then(res => {
                    commit('CREATE_PROJECT', res.data)
                }).catch(err => {
                console.log(err)
            })

        },
        fetchProjects({commit}) {
            axios.get('/api/projects')
                .then(res => {
                    commit('FETCH_PROJECTS', res.data)
                }).catch(err => {
                console.log(err)
            })
        },
        deleteProject({commit}, project) {
            axios.delete(`/api/projects/${project.id}`)
                .then(res => {
                    if (res.data === 'ok')
                        commit('DELETE_PROJECT', project)
                }).catch(err => {
                console.log(err)
            })
        }
    }
};
