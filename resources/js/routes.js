//import welcome from '../views/welcome.blade.php';
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
        path: '/articles/:id',
        name: 'update-article',
        component: UpdateArticle,
    }
]
