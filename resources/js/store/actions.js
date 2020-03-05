let actions = {
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
};
export default actions
//fetches all the actions and displays only the required ones
