<template>
    <div>
        <h4 class="text-center font-weight-bold">Projects</h4>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">User_id</th>
                <th scope="col">Name</th>
                <th scope="col">S_month</th>
                <th scope="col">S_year</th>
                <th scope="col">E_month</th>
                <th scope="col">E_year</th>
                <th scope="col">Associated_with</th>
                <th scope="col">Description</th>
                <th scope="col">Proj_url</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="project in projects">
                <td>{{project.user_id}}</td>
                <td>{{project.name}}</td>
                <td>{{project.s_month}}</td>
                <td>{{project.s_year}}</td>
                <td>{{project.e_month}}</td>
                <td>{{project.e_year}}</td>
                <td>{{project.associated_with}}</td>
                <td>{{project.description}}</td>
                <td>{{project.proj_url}}</td>
                <td>
                    <button class="btn btn-danger" @click="deleteProject(project)"><i style="color:#000000;" class="fa fa-trash"></i></button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>


<script>
    import {mapGetters} from 'vuex'

    export default {
        name: "Projects",
        mounted() {
            this.$store.dispatch('fetchProjects')
        },
        methods: {
            deleteProject(project) {
                this.$store.dispatch('deleteProject',project)
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
