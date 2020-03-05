

<template>
   <form action="" @submit="createProfile(profile)">
       <section class="section">
        <div class="container has-text-centered">

        <h4 class="text-center font-weight-bold">Profile creation form</h4>
        <div class="row">
            <div class="col-25">
            <label for="name" class="label">Name:</label>
            </div>
            <div class="col-75">
            <input type="text" class="input" id="name" placeholder="Name" v-model="profile.name" required>
            </div>
        </div>
<br><br>
        <div class="row">
            <div class="col-25">
            <label for="user-name" class="label">User Name:</label>
            </div>
            <div class="col-75">
            <input type="text" class="input" id="user-name" placeholder="UserName" v-model="profile.username" required>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="image" class="label">Image:</label>
            </div>
            <div class="col-75">
            <input type="text" class="input" id="image" placeholder="Image URL" v-model="profile.image_url">
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="userid" class="label">User ID:</label>
            </div>
            <div class="col-75">
            <input type="number" class="input" id="userid" placeholder="User Id" v-model="profile.user_id" required>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="email" class="label">Email:</label>
            </div>
            <div class="col-75">
            <input type="text" class="input" id="email" placeholder="Email" v-model="profile.email" required>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="aboutme" class="label">About Me:</label>
            </div>
            <div class="col-75">
            <textarea v-model="profile.about_me" class="textarea" id="aboutme" placeholder="Description"></textarea>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="likes" class="label">Likes:</label>
            </div>
            <div class="col-75">
            <textarea v-model="profile.likes" id="likes" class="textarea" placeholder="Likes"></textarea>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="dislikes" class="label">Dislikes:</label>
            </div>
            <div class="col-75">
            <textarea v-model="profile.dislikes" id="dislikes" class="textarea" placeholder="Dislikes"></textarea>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="url" class="label">URL:</label>
            </div>
            <div class="col-75">
            <input type="text" id="url" class="input" placeholder="URL" v-model="profile.url">
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="lurl" class="label">Linkedin URL:</label>
            </div>
            <div class="col-75">
            <input type="text" id="lurl" class="input" placeholder="Linkedin URL" v-model="profile.l_url" required>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-25">
            <label for="gurl" class="label">Github URL:</label>
            </div>
            <div class="col-75">
            <input type="text" id="gurl" class="input" placeholder="Github URL" v-model="profile.g_url" required>
            </div>
        </div><br><br>
        <!--<div class="field is-grouped">-->
            <div class="row">
            <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createProfile(profile)">Submit
            </button></div>
        </div>
       </section>
    </form>
    <!--   <h4 class="text-center font-weight-bold">Profile creation form</h4>
    <div class="text-center form-group">
        <label for="name" class="label">Name:</label>
        <input type="text" class="input" id="name" placeholder="Name" v-model="profile.name">
    </div>
    <div class="form-group">
        <label for="user-name" class="label">User Name:</label>
        <input type="text" class="input" id="user-name" placeholder="UserName" v-model="profile.username">
    </div>
    <div class="form-group">
        <label for="image" class="label">Image:</label>

        <input type="text" class="input" id="image" placeholder="Image URL" v-model="profile.image_url">
    </div>
    <div class="form-group">
        <label for="userid" class="label">User ID:</label>

        <input type="number" class="input" id="userid" placeholder="User Id" v-model="profile.user_id">
    </div>
    <div class="form-group">
        <label for="email" class="label">Email:</label>

        <input type="text" class="input" id="email" placeholder="Email" v-model="profile.email">
    </div>
    <div class="form-group">
        <label for="aboutme" class="label">About Me:</label>

        <textarea v-model="profile.about_me" class="textarea" id="aboutme" placeholder="Description"></textarea>
    </div>
    <div class="form-group">
        <label for="likes" class="label">Likes:</label>

        <textarea v-model="profile.likes" id="likes" class="textarea" placeholder="Likes"></textarea>
    </div>
    <div class="form-group">
        <label for="dislikes" class="label">Dislikes:</label>

        <textarea v-model="profile.dislikes" id="dislikes" class="textarea" placeholder="Dislikes"></textarea>
    </div>
    <div class="form-group">
        <label for="url" class="label">URL:</label>

        <input type="text" id="url" class="input" placeholder="URL" v-model="profile.url">
    </div>
    <div class="form-group">
        <label for="lurl" class="label">Linkedin URL:</label>

        <input type="text" id="lurl" class="input" placeholder="Linkedin URL" v-model="profile.l_url">
    </div>
    <div class="form-group">
        <label for="gurl" class="label">Github URL:</label>

        <input type="text" id="gurl" class="input" placeholder="Github URL" v-model="profile.g_url">
    </div>
    <div class="form-group">
        <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createProject(project)">
            Submit
        </button>
    </div>
   </form>-->
        <!--    @csrf
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <label for="name" class="label" style="float: left">Name:</label>
                        <p class="control has-icons-left">

                            <input type="text" class="input" id="name" placeholder="Name" v-model="profile.name">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <label for="user-name" class="label" style="float: left">User Name:</label>
                        <p class="control has-icons-left">

                            <input type="text" class="input" id="user-name" placeholder="UserName" v-model="profile.username">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                        <label for="image" class="label" style="float: left">Image:</label>

                        <input type="text" class="input" id="image" placeholder="Image URL" v-model="profile.image_url">
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <label for="userid" class="label" style="float: left">User ID:</label>

                            <input type="number" class="input" id="userid" placeholder="User Id" v-model="profile.user_id">
                        </p>
                    </div>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <label for="email" class="label">Email:</label>
                        <p class="control has-icons-left has-icons-right">

                            <input type="text" class="input" id="email" placeholder="Email" v-model="profile.email">
                            <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <p class="control">
                            <label for="aboutme" class="label">About Me:</label>

                            <textarea v-model="profile.about_me" class="textarea" id="aboutme" placeholder="Description"></textarea>
                        </p>
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <label for="likes" class="label">Likes:</label>

                            <textarea v-model="profile.likes" id="likes" class="textarea" placeholder="Likes"></textarea>
                        </div>
                    </div>
                </div>
            </div>
           <div class="field is-horizontal">
               <div class="field-body">
                   <div class="field">
                       <div class="control">
                           <label for="dislikes" class="label">Dislikes:</label>

                           <textarea v-model="profile.dislikes" id="dislikes" class="textarea" placeholder="Dislikes"></textarea>
                       </div>
                   </div>
               </div>
           </div>
           <div class="field is-horizontal">
               <div class="field-body">
                   <div class="field">
                       <div class="control">
                           <label for="url" class="label">URL:</label>

                           <input type="text" id="url" class="input" placeholder="URL" v-model="profile.url">
                       </div>
                   </div>
               </div>
           </div>
           <div class="field is-horizontal">
               <div class="field-body">
                   <div class="field">
                       <div class="control">
                           <label for="lurl" class="label">Linkedin URL:</label>

                           <input type="text" id="lurl" class="input" placeholder="Linkedin URL" v-model="profile.l_url">
                       </div>
                   </div>
               </div>
           </div>
           <div class="field is-horizontal">
               <div class="field-body">
                   <div class="field">
                       <div class="control">
                           <label for="gurl" class="label">Github URL:</label>

                           <input type="text" id="gurl" class="input" placeholder="Github URL" v-model="profile.g_url">
                       </div>
                   </div>
               </div>
           </div>

            <div class="field is-horizontal">
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createProfile(profile)">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </div>
       </section>
   </form>-->
</template>

<script>
    export default {
        name: "CreateProfile",
        data() {

            return {
                profile: {
                    name: '',
                    username: '',
                    image_url:'',
                    user_id:'',
                    email:'',
                    about_me:'',
                    likes:'',
                    dislikes:'',
                    url:'',
                    l_url:'',
                    g_url:''
                }
            }
        },
        methods: {
            createProfile(profile) {
                this.$store.dispatch('createProfile', profile)
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

   /* h4{
        font-size: 40px;
        color: darkred;
    }

    button {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    textarea {
        width: 100%;
        height: 150px;
        padding: 12px 20px;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        font-size: 16px;
        resize: none;
    }*/

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

  /* .col-25 {
       float: left;
       width: 29%;
        text-align: center;
       margin-top: 6px;
   }

   .col-75 {
       text-align: center;
       float: left;
       width: 75%;
       padding-left: 50px;
       margin-top: 6px;
   }*/

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

   /* Clear floats after the columns*/
   .row:after {
       content: "";
       display: table;
       clear: both;
   }

   /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other*/
   @media screen and (max-width: 600px) {
       .col-25, .col-75, input[type=submit] {
           width: 100%;
           margin-top: 0;
       }
   }


 /*  h4 {
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
       width: 50%;
       padding: 12px 20px;
       margin: 8px 0;
       font-size: 16px;
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
   }*/



</style>


