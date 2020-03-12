<template>
    <div class="login row justify-content-center">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <form @submit.prevent="register">

                        <div class="form-group row" v-if="regError">
                            <p class="error">
                                {{regError}}
                            </p>
                        </div>
                        <div class="form-group row">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" v-model="formRegister.name" placeholder="Name" required>

                        </div>
                        <div class="form-group row">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" v-model="formRegister.email" placeholder="Email address" required>

                        </div>
                        <div class="form-group row">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" v-model="formRegister.password" placeholder="password" required>


                        </div>
                        <div class="form-group row">
                            <label for="c_password">Confirm Password</label>
                            <input type="password" id="c_password" name="c-password" class="form-control" v-model="formRegister.c_password" placeholder="confirm password" required>

                        </div>
                        <div class="form-group row">
                            <input type="submit" value="Register" class="btn btn-outline-primary ml-auto">
                        </div>

                        <router-link to="/login">
                            Already have an account? Login.
                        </router-link>

                    </form>
                    Already have an account?
                    <router-link to="/login">Login</router-link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { registerUser} from "../partials/auth";
    import { authComputed } from '../helper.js'

    export default {
        data () {
            return {
                formRegister: {
                    name: '',
                    email: '',
                    password: '',
                    c_password: ''
                },
                errors: null
            }
        },

            methods:{
                register(){
                    /*registerUser(this.$data.formRegister)
                        .then(res => {
                            console.log(res);
                            this.$store.commit("registerSuccess", res);
                            //this.$router.push({path: '/login'});
                            this.$router.push({path: '/dashboard'});
                        })
                        .catch(error => {
                            this.$store.commit("registerFailed", {error});
                        })
                }*/
                   /* let condition = true;
                    if(this.$data.formRegister.password.length < 6){
                        alert("Password should contain at least 6 characters.");
                        condition = false;
                    }*/
                    /*if(this.$data.formRegister.password !== this.$data.formRegister.c_password){
                        return new Promise((res,rej)=>{
                        rej('Both passwords should match.')
                        //alert("Both passwords should match.");
                        condition = false; })
                    }*/

                    /*if(!condition) {
                        return false;
                    }*/
                    this.$store.dispatch('register');
                    registerUser(this.$data.formRegister)
                        .then(res => {
                            this.$store.commit("registerSuccess", res);
                            this.$router.push({path: '/dashboard'});
                        })
                        .catch(error => {
                            this.$store.commit("registerFailed", {error});
                        })
                }


            },
            computed:{
                regError(){
                    return this.$store.getters.regError
                },
                ...authComputed
            }


    }
</script>
