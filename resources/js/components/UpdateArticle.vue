<template>
    <form action="" @submit="updateArticle(article)">
        <h4 class="text-center font-weight-bold">Article editing form</h4>
        <div class="form-group">
            <label for="id">id:</label>
            <input type="number" name="id" id="id" placeholder="Enter your article id">
        </div>

        <div class="form-group">
            <label for="user_id">User_id:</label>
            <input type="number" name="user_id" id="user_id" placeholder="Enter your user_id" v-model="article.user_id">
        </div>

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" placeholder="Enter your article title" v-model="article.title">
        </div>

        <div class="form-group">
            <label for="excerpt">Excerpt:</label>
            <input type="text" name="excerpt" id="excerpt" placeholder="Enter your excerpt" v-model="article.excerpt">
        </div>

        <div class="form-group">
            <label for="featured_image_url">Featured_image_url:</label>
            <input type="url" name="featured_image_url" id="featured_image_url" placeholder="Enter your article image_url if exists*" v-model="article.featured_image_url">
        </div>

        <div class="form-group">
            <label class="label" for="body">Body: </label>
            <textarea class="textarea" name="body" id="body" placeholder="Enter the body of your Article" v-model="article.body"></textarea>
        </div>

        <div class="form-group">
            <label for="tags">Tags:</label>
            <input type="text" name="tags" id="tags" placeholder="Enter relevant tags" v-model="article.tags">
        </div>

        <div class="form-group">
            <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="updateArticle(article)">
                Submit
            </button>
        </div>
    </form>
</template>

<script>
    export default {
        name: "UpdateArticle",
        data() {
            return {
                article: {
                    id: '',
                    user_id: '',
                    title: '',
                    excerpt: '',
                    featured_image_url: '',
                    body: '',
                    tags: ''
                }
            }
        },
        methods: {
            updateArticle(article) {
                //console.log(article.id)
                this.$store.dispatch('updateArticle', article);
                //this.$router.push({path: '/articles'});
            }
        },
        computed: {
            isValid() {
                return this.article.user_id !== '' && this.article.title !== '' && this.article.body !== ''
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
    input[type=text] {
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