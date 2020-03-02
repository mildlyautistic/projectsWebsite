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
    }
};

export default actions
