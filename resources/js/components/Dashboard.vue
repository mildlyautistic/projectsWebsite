<template>
    <div class="container">
        <h1>Hello {{ currentUser.data.name }} . . . welcome to your work space.</h1>
    </div>
</template>
<script>

    export default {
        computed:{
            currentUser(){
                //console.log(this.$store.getters.use)
                return this.$store.getters.currentUser
            }
        }
    }
</script>
