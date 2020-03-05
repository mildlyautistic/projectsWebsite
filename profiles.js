export const state = {
	profiles: []
}

export const actions = {
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
}

export const mutations = {
	CREATE_PROFILE(state, profile) {
        state.profiles.unshift(profile)
    },
    FETCH_PROFILES(state, profiles) {
        return state.profiles = profiles
    },
    DELETE_PROFILE(state, profile) {
        let index = state.profiles.findIndex(item => item.id === profile.id)
        state.profile.splice(index, 1)
    }
}

export const getters = {
	 profiles: state => {
        return state.profiles
    }
}