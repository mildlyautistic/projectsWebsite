let mutations_project = {
    CREATE_PROJECT(state_project, project) {
        state_project.projects.unshift(project)
    },
    FETCH_PROJECTS(state_project, projects) {
        return state_project.projects = projects
    },
    DELETE_PROJECT(state_project, project) {
        let index = state_project.projects.findIndex(item => item.id === project.id)
        state_project.projects.splice(index, 1)
    }

};
export default mutations_project
