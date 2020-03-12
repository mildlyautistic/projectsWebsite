import Home from './components/Home.vue';
import Register from './components/Register.vue';
import Login from './components/Login.vue';
import Dashboard from './components/Dashboard.vue';
import Articles from './components/Articles.vue';
import Profiles from './components/Profiles.vue';
import Projects from './components/Projects.vue';
import CreateArticle from './components/CreateArticle.vue';
import CreateProfile from './components/CreateProfile.vue';
import CreateProject from './components/CreateProject.vue';

export const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
},
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
    }
]
