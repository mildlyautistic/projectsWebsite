let actions_project = {
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

export default actions_project
