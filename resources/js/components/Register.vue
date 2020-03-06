<template>
    <div>
    	<h1>Registration Form</h1>
        <form @submit.prevent="register">
            <label for="name">
                Name:
            </label>
            <input v-model="name" type="text" name="name" value>
            <label for="email">
                Email:
            </label>
            <input v-model="email" type="email" name="email" value>
            <label for="password">
                Password:
            </label>
            <input v-model="password" type="password" name="password" value>
            <button type="submit" name="button">
                Register
            </button>
            <p><ul>
            	<li v-for="(error,index) in errors" :key="index">{{ error }}</li>
            </ul></p>
            <!--<div>
            	Already have an account? <router-link to="/login">
    		Login 
    	</router-link>
    </div>-->
        </form>
    </div>
</template>
<script>
export default {
    name: "Register",
    data() {
        return {
            name: '',
            email: '',
            password: '',
            errors: null
        }
    },
    methods: {
    	register () {
    		this.$store.dispatch('register', {
    			name: this.name,
    			email: this.email,
    			password: this.password
    		})
    		.then(() => {
    			this.$router.push({ name: 'dashboard' })
    		})
    		.catch(err => {
    			this.errors = err.response.data.errors
    		})
    	}
    }
}
</script>
<style scoped>
</style>