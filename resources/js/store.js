import {getToken} from './partials/auth';
const user = getToken()
function getAuthHeaders(){
    const token = getToken();
    const customHeaders = {headers: { Authorization: "Bearer " + token }};

    if(!token){
        router.push('/login');
    }

    return customHeaders;
}
export default {
    state: {
        currentUser: user,
        isLoggedIn: null,
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
        register(state){
            state.auth_error = null;
            },

        loginSuccess(state, payload) {
            state.auth_error = null;
            state.isLoggedIn = true;
            state.loading = false;
            state.currentUser = payload;
            localStorage.setItem('user', JSON.stringify(state.currentUser.data.token));
            localStorage.setItem('complete', JSON.stringify(state.currentUser));
        },
        loginFailed(state, payload){
            state.loading = false;
            state.auth_error = payload.error;
        },
        logout(state){
            localStorage.removeItem("user");
            localStorage.removeItem("complete");
            state.isLoggedIn = false;
            state.currentUser = null;
        },
        registerSuccess(state, payload){
            state.reg_error = null;
            state.isLoggedIn = true;
            state.registeredUser = payload.user;
            state.currentUser = payload;
            localStorage.setItem("user", JSON.stringify(state.currentUser.data.token));
            localStorage.setItem('complete', JSON.stringify(state.currentUser));
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
        UPDATE_PROFILE(state, profile) {
            let index = state.profiles.findIndex(item => item.id === profile.id)
            state.profiles.splice(index, 1)
            state.profiles.unshift(profile)
        },
        DELETE_PROFILE(state, profile) {
            let index = state.profiles.findIndex(item => item.id === profile.id);
            state.profile.splice(index, 1)
        },
        CREATE_ARTICLE(state, article) {
            state.articles.unshift(article)
        },

        FETCH_ARTICLES(state, articles) {
            return state.articles = articles
        },
        UPDATE_ARTICLE(state, article) {
             let index = state.articles.findIndex(item => item.id === article.id)
             state.articles.splice(index, 1)
             state.articles.unshift(article)
        },
        DELETE_ARTICLE(state, article) {
            let index = state.articles.findIndex(item => item.id === article.id);
            state.articles.splice(index, 1)
        },
        CREATE_PROJECT(state, project) {
            state.projects.unshift(project)
        },
        FETCH_PROJECTS(state, projects) {
            return state.projects = projects
        },
        UPDATE_PROJECT(state, project) {
             let index = state.projects.findIndex(item => item.id === project.id)
             state.projects.splice(index, 1)
             state.projects.unshift(project)
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

        register(context){
            context.commit("register");
        },

        createProfile({commit}, profile) {
            const headers = getAuthHeaders();
            axios.post('/api/create-profile', profile, headers)
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
        updateProfile({commit}, profile) {
             const headers = getAuthHeaders();
             axios.put(`/api/profiles/${profile.id}`, profile, headers)
                .then(res => {
                    //console.log(profile)
                    commit('UPDATE_PROFILE', profile)
                }).catch(err => {
                console.log(err)
            })
        },
        deleteProfile({commit}, profile) {
            const headers = getAuthHeaders();
            axios.delete(`/api/profiles/${profile.id}`, headers)
                .then(res => {
                    if (res.data === 'ok')
                        commit('DELETE_PROFILE', profile)
                }).catch(err => {
                console.log(err)
            })
        },
        createArticle({commit}, article) {
            const headers = getAuthHeaders();
            axios.post('/api/create-article', article, headers)
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
        updateArticle({commit}, article) {
             const headers = getAuthHeaders();
             axios.put(`/api/articles/${article.id}`, article, headers)
                .then(res => {
                    commit('UPDATE_ARTICLE', article)
                }).catch(err => {
                console.log(err)
            })
        },
        deleteArticle({commit}, article) {
            const headers = getAuthHeaders();
            axios.delete(`/api/articles/${article.id}`, headers)
                .then(res => {
                    if (res.data === 'ok')
                        commit('DELETE_ARTICLE', article)
                }).catch(err => {
                console.log(err)
            })
        },
        createProject({commit}, project) {
            const headers = getAuthHeaders();
            axios.post('/api/create-project', project, headers)
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
        updateProject({commit}, project) {
            const headers = getAuthHeaders();
            axios.put(`/api/projects/${project.id}`, project, headers)
                .then(res => {
                    commit('UPDATE_PROJECT', project)
                }).catch(err => {
                console.log(err)
            })
        },
        deleteProject({commit}, project) {
            const headers = getAuthHeaders();
            axios.delete(`/api/projects/${project.id}`, headers)
                .then(res => {
                    if (res.data === 'ok')
                        commit('DELETE_PROJECT', project)
                }).catch(err => {
                console.log(err)
            })
        }
    }
};
