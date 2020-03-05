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

};
export default mutations 
// does all the required mutations