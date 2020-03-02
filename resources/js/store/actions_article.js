let actions_article = {
    createArticle({commit}, article) {
        axios.post('/api/articles', article)
            .then(res => {
                commit('CREATE_ARTICLE', res.data)
            }).catch(err => {
            console.log(err)
        })

    },
    fetchArticles({commit}) {
        axios.get('/api/articles')
            .then(res => {
                commit('FETCH_ARTICLES', res.data)
            }).catch(err => {
            console.log(err)
        })
    },
    deleteArticle({commit}, article) {
        axios.delete(`/api/articles/${article.id}`)
            .then(res => {
                if (res.data === 'ok')
                    commit('DELETE_ARTICLE', article)
            }).catch(err => {
            console.log(err)
        })
    }
};

export default actions_article
