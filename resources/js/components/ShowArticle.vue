<template>
    <div>
        <h4 class="text-center font-weight-bold">{{article.title}}</h4>
        <h3>ID: {{article.id}} </h3>
        <h3>User_ID: {{article.user_id}} </h3>
        <h3>Excerpt: {{article.excerpt}} </h3>
        <h3>Featured Image URL: {{article.featured_image_url}} </h3>
        <h3>Body: {{article.body}} </h3>
        <h3>Tags: {{article.tags}} </h3>


    </div>
</template>

<script>
    import {art} from "./Articles";
    export default {
        name: "ShowArticle",
        data() {
            return {
                article: {
                    id:art.id,
                    user_id: art.user_id,
                    title: art.title,
                    excerpt: art.excerpt,
                    featured_image_url: art.featured_image_url,
                    body: art.body,
                    tags: art.tags
                }
            }
        },
        methods: {

            showArticle(article) {
               // console.log(article)
                this.$store.dispatch('showArticle', article);
               // this.$router.push({path: '/articles'});
            }
        },
    }
</script>

<style scoped>

</style>
