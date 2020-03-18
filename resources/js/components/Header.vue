<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel mb-4">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"><div class="navbar-nav ml-auto">
            <template v-if="!currentUser">
                <li>
                    <router-link to="/register" class="nav-link">Register</router-link>
                </li>
                <li>
                    <router-link to="/login" class="nav-link">Login</router-link>
                </li>
            </template>

            <template v-else>
                <li>
                    <router-link to="/dashboard" class="nav-link">Dashboard</router-link>
                </li>
                <li>
                    <router-link to="/articles" class="nav-link">Articles</router-link>
                </li>
                <li>
                    <router-link to="/profiles" class="nav-link">Profiles</router-link>
                </li>
                <li>
                    <router-link to="/projects" class="nav-link">Projects</router-link>
                </li>


                <button type="button" @click="logout">
                    Logout
                </button>
            </template>



        </div>
        </div>
    </div>
    </nav>
</template>
<script>
    import { authComputed } from '../helper.js'
    export default {
        name: 'app-header',
    methods:{
        logout(){

            this.$store.commit('logout');
            this.$router.push({path: '/login'});


        }
    },
    computed:{
       currentUser(){
            return this.$store.getters.currentUser
        },
        ...authComputed
    }
    }
</script>

<style scoped>
    .navbar {
        background-image: linear-gradient(to left, rgba(120,60,200,0.5), rgba(120,60,200,0.9));
        color: solid black;
        font-size: 20px;
    }

    button {
        background-color: white ;
        border-radius: 4px;
        border-style: rounded solid black;
    }

    button:hover {
        background-color:  rgba(120,60,200,0.3);
            box-shadow: 0 0 15px #939393;
    }
</style>