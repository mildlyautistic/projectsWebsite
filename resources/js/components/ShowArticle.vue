<template>
    <div class="container">
        <div class="notification">
            <div class="text-center font-weight-bold">
                <h1>{{article.title}}</h1>
            </div>
            <h3><b>ID:</b> {{article.id}} </h3>
            <h3><b>User ID:</b> {{article.user_id}}</h3>
            <h3><b>Excerpt:</b> {{article.excerpt}}</h3>
            <h3><b>Body:</b> {{article.body}}</h3>

            <p style="margin-top: 1em">
                <a href="/articles"> <h4>{{article.tags}}</h4></a>
            </p>


        </div>
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
