<template>
    <form @submit.prevent="updateProfile">
        <section class="section">
            <div class="container has-text-centered">

                <h4 class="text-center font-weight-bold">Profile updation form</h4>
                <div class="row">
                    <div class="col-25">
                        <label for="name" class="label">Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input" id="name" v-model="profile.name" required>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="user-name" class="label">User Name:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input" id="user-name" v-model="profile.username" required>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="image" class="label">Image:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input" id="image" v-model="profile.image_url">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="email" class="label">Email:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" class="input" id="email" v-model="profile.email" required>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="aboutme" class="label">About Me:</label>
                    </div>
                    <div class="col-75">
                        <textarea v-model="profile.about_me" class="textarea" id="aboutme"></textarea>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="likes" class="label">Likes:</label>
                    </div>
                    <div class="col-75">
                        <textarea v-model="profile.likes" id="likes" class="textarea"></textarea>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="dislikes" class="label">Dislikes:</label>
                    </div>
                    <div class="col-75">
                        <textarea v-model="profile.dislikes" id="dislikes" class="textarea"></textarea>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="url" class="label">URL:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="url" class="input" v-model="profile.url">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="lurl" class="label">Linkedin URL:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="lurl" class="input" v-model="profile.l_url" required>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-25">
                        <label for="gurl" class="label">Github URL:</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="gurl" class="input" v-model="profile.g_url" required>
                    </div>
                </div><br><br>
                <div class="row">
                    <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="updateProfile(profile)">
                        Submit
                    </button>
            </div>
            </div>
        </section>
    </form>
</template>

<script>

    import {pro} from "./Profiles";
    //const prof = pro.id
    export default {
        name: "updateProfile",
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
            updateProfile (profile) {
                //console.log(profile)
                this.$store.dispatch('updateProfile', profile);
                this.$router.push({path: '/profiles'});
            }
        },
        computed: {
            isValid() {
                return this.profile.name !== '' && this.profile.username !== '' && this.profile.l_url !== '' && this.profile.g_url !== ''
            }
        }
    }
</script>

<style scoped>
    h4{
        font-size: 40px;
        color: darkred;
    }

    input[type=text], input[type=number], select{
        width: 75%;
        height:40px;
        padding: 5px;
        border: 1px solid black;
        border-radius: 4px;
        resize: vertical;
    }
    textarea {
        width: 75%;
        height: 90px;
        padding: 5px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;

        resize: none;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    button {
        background-color: #4CAF50;
        color: white;
        margin-top: 20px;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: start;
    }

    button:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        background-color: rgba(211, 211, 211, 0.67);
        padding: 20px;
        text-align: center;
    }


    .col-25 {
        float: left;
        width: 25%;
        text-align: center;
        margin-top: 6px;
    }

    .col-75 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    @media screen and (max-width: 600px) {
        .col-25, .col-75, input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
</style>
