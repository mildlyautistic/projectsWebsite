<template>
    <div class="container">
        <h1>Hello {{ use }} . . . welcome to your work space.</h1>
    </div>
</template>
<script>
    export default {
        computed:{
            use(){
                //console.log(this.$store.getters.use)
                return this.$store.getters.use
            }
        }
    }
</script>
