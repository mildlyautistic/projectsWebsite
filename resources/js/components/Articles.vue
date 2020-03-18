<template>
    <div>
        <h4 class="text-center font-weight-bold">Articles</h4>
        <h5><router-link to="/create-article" class="nav-link">Create</router-link></h5>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">User_id</th>
                <th scope="col">Title</th>
                <th scope="col">Excerpt</th>
                <th scope="col">Featured_image_url</th>
                <th scope="col">Body</th>
                <th scope="col">Tags</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="article in articles">
                <td>{{article.user_id}}</td>
                <td>{{article.title}}</td>
                <td>{{article.excerpt}}</td>
                <td>{{article.featured_image_url}}</td>
                <td>{{article.body}}</td>
                <td>{{article.tags}}</td>
                <td>
                    <button class="btn btn-info btn-xs" @click="updateArticle(article)">Edit</button>
                </td>
                <td>
                    <button class="btn btn-danger" @click="deleteArticle(article)">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import {mapState} from 'vuex'
    export let art
    export default {
        name: "Articles",


        mounted() {
            this.$store.dispatch('fetchArticles')
        },

        methods: {
            deleteArticle(article) {
                alert('Do you really want to delete this article? You might not be able to undo this action!')
                this.$store.dispatch('deleteArticle', article)
            },
            updateArticle(article) {
                //this.$store.dispatch('updateArticle', article)
                art= article
                this.$router.push({path: `/articles/${article.id}`});
            }
        },
        computed: {
            ...mapState([
                'articles'
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
