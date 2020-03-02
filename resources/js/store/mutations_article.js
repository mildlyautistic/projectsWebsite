let mutations_article = {
    CREATE_ARTICLE(state_article, article) {
        state_article.articles.unshift(article)
    },
    FETCH_ARTICLES(state_article, articles) {
        return state_article.articles = articles
    },
    DELETE_ARTICLE(state_article, article) {
        let index = state_article.articles.findIndex(item => item.id === article.id)
        state_article.articles.splice(index, 1)
    }

};
export default mutations_article
