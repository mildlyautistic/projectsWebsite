<template>
    <form action="" @submit="createProject(project)">
        <h4 class="text-center font-weight-bold">Project creation form</h4>
        <div class="form-group">
            <label for="user_id">User_id:</label>
            <input type="number" name="user_id" id="user_id" placeholder="Enter your user_id" v-model="project.user_id">
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your project title" v-model="project.name">
        </div>

        <div class="form-group">
            <label for="s_month">Start_month:</label>
            <!--<select name="s_month" id="s_month" v-model="project.s_month">
                <option value="january">January</option>
                <option value="february">February</option>
                <option value="march">March</option>
                <option value="april">April</option>
                <option value="may">May</option>
                <option value="june">June</option>
                <option value="july">July</option>
                <option value="august">August</option>
                <option value="september">September</option>
                <option value="october">October</option>
                <option value="november">November</option>
                <option value="december">December</option>
            </select>-->
            <input type="month" id="s_month" name="s_month" v-model="project.s_month">
        </div>

        <div class="form-group">
            <label for="s_year">Start_Year:</label>
            <select name="s_year" id="s_year" v-model="project.s_year">
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
        </div>

        <!--<div class="form-group">
            <label for="e_month">End_month:</label>
            <select name="e_month" id="e_month" v-model="project.e_month">
                <option value="january">January</option>
                <option value="february">February</option>
                <option value="march">March</option>
                <option value="april">April</option>
                <option value="may">May</option>
                <option value="june">June</option>
                <option value="july">July</option>
                <option value="august">August</option>
                <option value="september">September</option>
                <option value="october">October</option>
                <option value="november">November</option>
                <option value="december">December</option>
            </select>
        </div>

        <div class="form-group">
            <label for="e_year">End_Year:</label>
            <select name="e_year" id="e_year" v-model="project.e_year">
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
        </div>-->
        <div class="form-group">
            <label for="e_month">End_month:</label>
            <input type="month" id="e_month" name="e_month" v-model="project.e_month">
        </div>

        <div class="form-group">
            <label for="e_year">End_Year:</label>
            <select name="e_year" id="e_year" v-model="project.e_year">
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
                <option value="2014">2014</option>
                <option value="2015">2015</option>
                <option value="2016">2016</option>
                <option value="2017">2017</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
            </select>
        </div>

        <div class="form-group">
            <label for="associated_with">Associated_with:</label>
            <input type="text" name="associated_with" id="associated_with" placeholder="Enter your team-mate name" v-model="project.associated_with">
        </div>

        <div class="form-group">
            <label class="label" for="description">Description: </label>
                <textarea class="textarea" name="description" id="description" placeholder="Project Description" v-model="project.description"></textarea>
        </div>

                <div class="form-group">
            <label for="proj_url">Proj_url:</label>
            <input type="url" name="proj_url" id="proj_url" placeholder="Enter your project_url if exists*" v-model="project.proj_url">
        </div>

        <div class="form-group">
            <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createProject(project)">
                Submit
            </button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "CreateProject",
        data() {
            return {
                project: {
                    user_id: '',
                    name: '',
                    s_month: '',
                    s_year: '',
                    e_month: '',
                    e_year: '',
                    associated_with: '',
                    description: '',
                    proj_url: ''
                }
            }
        },
        methods: {
            createProject(project) {
                this.$store.dispatch('createProject', project);
                this.$router.push({path: '/projects'});
            }
        },
        computed: {
            isValid() {
                return this.project.user_id !== '' && this.project.name !== ''
            }
        }
    }

</script>

<style scoped>
    h4 {
        color: #000000;
        font-size: 24px;
    }

    .form-group {
        padding: 10px;
        text-align: left;
        position: center;
    }

    ::placeholder {
        font-size: 16px;
        height:36px;
        width:180px;
        font-family: 'Noto Sans', sans-serif;
    }

    textarea {
        width: 97%;
        padding: 12px;
        border: 1px solid #000000;
        resize: vertical;
        height: 80px;
        border-radius: 4px;
        font-family: 'Noto Sans', sans-serif;
    }

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        font-size: 16px;
        display: inline-block;
        border: 1px solid #000000;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #ffffff;
    }

    input[type=month] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        font-size: 16px;
        font-family: 'Noto Sans', sans-serif;
        display: inline-block;
        border: 1px solid #000000;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #ffffff;
    }

    input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #000000;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #ffffff;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
        float: left;
    }

    input[type=url] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #000000;
        border-radius: 4px;
        box-sizing: border-box;
        background-color: #ffffff;
    }

    button {
        background-color: #ff2d4b;
        color: white;
        padding: 14px 20px;
        font-family: 'Noto Sans', sans-serif;
        font-size: 16px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        position: center;
    }

    button:hover {
        background-color: #ff003b;
        color: #000000;
        box-shadow: 0 0 15px #939393;
    }

</style>
