<template>
    <div class="container">
        <h1>Hello , {{ details }} . . . welcome to your work space.</h1>
    </div>
</template>
<script>
    export default {
        computed:{
            details(){
                return this.$store.getters.details
            }
        }
    }
</script>
