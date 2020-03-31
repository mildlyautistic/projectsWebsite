<template>
    <div>
        <h4 class="text-center font-weight-bold">Projects</h4>
        <h5><router-link to="/create-project" class="nav-link">Create</router-link></h5>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">Project_id</th>
                <th scope="col">Name</th>
                <th scope="col">Associated_with</th>
                <th scope="col">Show</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="project in projects">
                <td>{{project.id}}</td>
                <td>{{project.name}}</td>
                <td>{{project.associated_with}}</td>
                <td>
                    <button class="show" @click="showProject(project)">Show</button>
                </td>
                <td>
                    <button class="edit" @click="updateProject(project)">Edit</button>
                </td>
                <td>
                    <button class="btn btn-danger" @click="deleteProject(project)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
    import {mapGetters} from 'vuex'
    export let proj
    export default {
        name: "Projects",
        mounted() {
            this.$store.dispatch('fetchProjects')
        },
        methods: {
            showProject(project) {
                proj= project
                //console.log(project)
                this.$router.push({path: `/projects/${project.id}`});
            },
            deleteProject(project) {
              //alert('Do you really want to delete this project? You might not be able to undo this action!')
                this.$store.dispatch('deleteProject',project)
            },
            updateProject(project) {
                proj = project
                this.$router.push({path: `/projects/edit/${project.id}`})
            }
        },
        computed: {
            ...mapGetters([
                'projects'
            ])
        }
    }
</script>

<style scoped>
   h4 {
       color: #000000;
       font-family: "Noto Sans", sans-serif;
       font-size: 24px;
   }

    .table {
        font-family: "Noto Sans", sans-serif;
        font-size: 18px;
        border-collapse: collapse;
        width: 100%;
    }

   .table td, .table th {
       border: 1px solid #ddd;
       padding: 8px;
       height: 50px;
       text-align: center;
   }

   .table tr:nth-child(even){background-color: #f2f2f2;}

   .table tr:hover {background-color: #ddd;}

   .table th {
       padding-top: 12px;
       padding-bottom: 12px;
       text-align: center;
       background-color: #ff2d4b;
       color: white;
   }

    .btn-danger:hover {
        box-shadow: 0 0 15px #939393;
    }
</style>
