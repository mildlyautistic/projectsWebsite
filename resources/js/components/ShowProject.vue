<template>
    <div>
        <h4 class="text-center font-weight-bold">{{project.name}}</h4>
        <h3>ID: {{project.id}} </h3>
        <h3>User_ID: {{project.user_id}} </h3>
        <h3>Start_Month: {{project.s_month}} </h3>
        <h3>Start_Year: {{project.s_year}} </h3>
        <h3>End_Month: {{project.e_month}} </h3>
        <h3>End_Year: {{project.e_year}} </h3>
        <h3>Associated with: {{project.associated_with}} </h3>
        <h3>Description: {{project.description}} </h3>
        <h3>Project_URL: {{project.proj_url}} </h3>
    </div>
</template>

<script>
    import {proj} from "./Projects";
    export default {
        name: "ShowProject",
        data() {
            return {
                project: {
                    id: proj.id,
                    user_id: proj.user_id,
                    name: proj.name,
                    s_month: proj.s_month,
                    s_year: proj.s_year,
                    e_month: proj.e_month,
                    e_year: proj.e_year,
                    associated_with: proj.associated_with,
                    description: proj.description,
                    proj_url: proj.proj_url
                }
            }
        },
        methods: {
            showProject(project) {
                this.$store.dispatch('showProject', project);
            }
        },
    }
</script>

<style scoped>

</style>
