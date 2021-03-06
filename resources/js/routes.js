import Register from './components/Register.vue';
import Login from './components/Login.vue';
import Dashboard from './components/Dashboard.vue';
import Articles from './components/Articles.vue';
import Profiles from './components/Profiles.vue';
import Projects from './components/Projects.vue';
import CreateProfile from './components/CreateProfile.vue';
import CreateProject from './components/CreateProject.vue';
import CreateArticle from './components/CreateArticle.vue';
import UpdateArticle from './components/UpdateArticle.vue';
import UpdateProfile from './components/UpdateProfile.vue';
import UpdateProject from './components/UpdateProject.vue';
import ShowArticle from './components/ShowArticle.vue';
import ShowProject from './components/ShowProject.vue';
import ShowProfile from './components/ShowProfile.vue';
export const routes = [

{
    path: '/register',
    name: 'register',
    component: Register,
},
{
    path: '/login',
    name: 'login',
    component: Login,
},
{
    path: '/dashboard',
    name: 'dashboard',
    component: Dashboard,
},
    {
        path: '/articles',
        name: 'articles',
        component: Articles,
    },
    {
        path: '/create-article',
        name: 'createArticle',
        component: CreateArticle,
    },
    {
        path: '/create-project',
        name: 'createProject',
        component: CreateProject,
    },
    {
        path: '/create-profile',
        name: 'createProfile',
        component: CreateProfile,
    },
    {
        path: '/profiles',
        name: 'profiles',
        component: Profiles,
    },
    {
        path: '/projects',
        name: 'projects',
        component: Projects,
    },
    {
        path: '/create-profile',
        name: 'create-profile',
        component: CreateProfile,
    },
    {
        path: '/create-project',
        name: 'create-project',
        component: CreateProject,
    },
    {
        path: '/create-article',
        name: 'create-article',
        component: CreateArticle,
    },
    {
        path: '/articles/edit/:id',
        name: 'update-article',
        component: UpdateArticle,
    },
    {
        path: '/profiles/edit/:id',
        name: 'update-profile',
        component: UpdateProfile,
    },
    {
        path: '/projects/edit/:id',
        name: 'update-project',
        component: UpdateProject,
    },
    {
        path: '/articles/:id',
        name: 'show-article',
        component: ShowArticle,
    },
    {
        path: '/projects/:id',
        name: 'show-project',
        component: ShowProject,
    },
    {
        path: '/profiles/:id',
        name: 'show-profile',
        component: ShowProfile,
    },
]
