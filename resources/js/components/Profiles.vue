<template>
    <div>
        <h4 class="text-center font-weight-bold" >Profiles</h4>
        <h5><router-link to="/create-profile" class="nav-link">Create</router-link></h5>

        <div v-for="profile in profiles">
            <div class="first">
                <h4>{{ profile.name }}</h4>
                <p style=" color: #48ad26">{{ profile.username }}</p>
                <p style="color: grey">{{ profile.email }}</p>
                <div style="padding-bottom: 20px">
                        <button class="show" @click="showProfile(profile)">Show</button>
                &nbsp
                        <button class="edit" @click="updateProfile(profile)">Edit</button>
                &nbsp
                        <button class="btn btn-danger" @click="deleteProfile(profile)">Delete</button>
                </div>
            </div>

        <br>
        </div>
    </div>

</template>

<script>
    import {mapGetters} from 'vuex'
    export let pro
    export default {
        name: "Profiles",
        mounted() {
            this.$store.dispatch('fetchProfiles')
        },
        methods: {
            showProfile(profile) {
                pro = profile
                this.$router.push({path: `/profiles/${profile.id}`})
            },
            deleteProfile(profile) {
                this.$store.dispatch('deleteProfile',profile)
            },
            updateProfile(profile) {
                pro = profile
                this.$router.push({path: `/profiles/edit/${profile.id}`})
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


    .card {

        font-family: Times;
        font-size: 20px;
        top:50%;
        display: flex;
        flex-wrap: wrap;
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;

    }
    .first {
        border: 1px solid;
        padding: 30px 0;
        box-shadow: 10px 10px 5px #aaaaaa;
        height: 300px;
        text-align: center;
        width: 300px;
        margin: auto;
    }


</style>
