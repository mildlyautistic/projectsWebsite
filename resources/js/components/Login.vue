<template>
    <div>
    	<h1>Login Form</h1>
        <form @submit.prevent="login">
        	<label for="email">
                Email:
            </label>
            <input v-model="email" type="email" name="email" value>
            <br />
            <label for="password">
                Password:
            </label>
            <input v-model="password" type="password" name="password" value>
            <button type="submit" name="button">
                Login
            </button>
            <p>{{ error }}</p>
            <!--<div>
            	Don't have an account? <router-link to="/register">
    		Register
    	</router-link>
    </div>-->
        </form>
    </div>
</template>
<script>
export default {
    name: "Login",
    data() {
        return {
            email: '',
            password: '',
            error: null
        }
    },
    methods: {
    	login () {
    		this.$store.dispatch('login', {
    			email: this.email,
    			password: this.password
    		})
    		.then(() => {
    			this.$router.push({ name: '/articles' })
    		})
    		.catch(err => {
    			this.error = err.response.data.error
    		})
    	}
    }
}
</script>
<style scoped>
</style>