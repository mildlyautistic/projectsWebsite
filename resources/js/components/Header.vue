<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel mb-4">
    <div class="container">
        <router-link class="navbar-brand" to="/">Authentication Laravel 5.6/Vue SPA</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent"><div class="navbar-nav ml-auto">
            <template v-if="!currentUser">
                <li>
                    <router-link to="/register" class="nav-link">Register</router-link>
                </li>
                    <router-link to="/login" class="nav-link">Login</router-link>
                <li>

                </li>
            </template>

               <!-- <li>
                    <router-link to="/articles" class="nav-link">Articles</router-link>
                </li>-->
                <!--<li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{currentUser.name}} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a href="#!" @click.prevent="logout" class="dropdown-item">Logout</a>
                    </div>
                </li>-->

                <button v-else type="button" @click="logout">
                    Logout
                </button>



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
            this.$router.push('/login');
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
