<template>
    <div>
        <h4 class="text-center font-weight-bold">{{profile.name}}</h4>
        <h3>ID: {{profile.id}} </h3>
        <h3>User_ID: {{profile.user_id}} </h3>
        <h3>Username: {{profile.username}} </h3>
        <h3>Image_URL: {{profile.image_url}} </h3>
        <h3>E-mail: {{profile.email}} </h3>
        <h3>About-me: {{profile.about_me}} </h3>
        <h3>Likes: {{profile.likes}} </h3>
        <h3>Dislikes: {{profile.dislikes}} </h3>
        <h3>URL: {{profile.url}} </h3>
        <h3>LinkenIN_URL: {{profile.l_url}} </h3>
        <h3>GitHub_URL: {{profile.g_url}} </h3>

    </div>
</template>

<script>
    import {pro} from "./Profiles";
    export default {
        name: "ShowProfile",
        data() {
            return {
                profile: {
                    id: pro.id,
                    name: pro.name,
                    username: pro.username,
                    image_url:pro.image_url,
                    user_id:pro.user_id,
                    email:pro.email,
                    about_me:pro.about_me,
                    likes:pro.likes,
                    dislikes:pro.dislikes,
                    url:pro.url,
                    l_url:pro.l_url,
                    g_url:pro.g_url
                }
            }
        },
        methods: {
            showProfile(profile) {
                this.$store.dispatch('showProfile', profile);
            }
        },
    }
</script>

<style scoped>

</style>
