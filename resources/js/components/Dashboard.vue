<template>
    <div class="container">
        <h1>Hello , {{ currentUser.data.name }} . . . welcome to your work space.</h1>
    </div>
</template>
<script>

    export default {
        computed:{
            currentUser(){
                return this.$store.getters.currentUser
            }
        }
    }
</script>

<style scoped>
    div.container {
        color:black;
        font-size: 40px;
    }
</style>