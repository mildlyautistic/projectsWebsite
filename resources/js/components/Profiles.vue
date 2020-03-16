<template>
    <div>
        <h4 class="text-center font-weight-bold" >Profiles</h4>
        <h5><router-link to="/create-profile" class="nav-link">Create</router-link></h5>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Image</th>
                <th scope="col">UserId</th>
                <th scope="col">Email</th>
                <th scope="col">About me</th>
                <th scope="col">Likes</th>
                <th scope="col">Dislikes</th>
                <th scope="col">URL</th>
                <th scope="col">Linkedin URL</th>
                <th scope="col">Github URL</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="profile in profiles">
                <td>{{profile.name}}</td>
                <td>{{profile.username}}</td>
                <td>{{profile.image_url}}</td>
                <td>{{profile.user_id}}</td>
                <td>{{profile.email}}</td>
                <td>{{profile.about_me}}</td>
                <td>{{profile.likes}}</td>
                <td>{{profile.dislikes}}</td>
                <td>{{profile.url}}</td>
                <td>{{profile.l_url}}</td>
                <td>{{profile.g_url}}</td>
                <td>
                    <button class="btn btn-danger" @click="deleteProfile(profile)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "Profiles",
        mounted() {
            this.$store.dispatch('fetchProfiles')
        },
        methods: {
            deleteProfile(profile) {
                alert('Do you really want to delete your Profile? You might not be able to undo this action!')
                this.$store.dispatch('deleteProfile',profile)
            }
        },
        computed: {
            ...mapGetters([
                'profiles'
            ])
        }
    }
</script>

<style scoped>
    h4{
        font-size: 40px;
        color: darkred;
    }

    .table {
        font-family: "Noto Sans", sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    .table td, .table th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    .table tr:nth-child(even){background-color: #f2f2f2;}

    .table tr:hover {background-color: #ddd;}

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #009ACD;
        color: white;
    }

</style>
