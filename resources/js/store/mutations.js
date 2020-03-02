let mutations = {
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

};
export default mutations
