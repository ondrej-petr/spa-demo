<template>
    <div>
        <h1>SPA demo aplikace</h1>
        <router-view></router-view>
    </div>
</template>

<script>
import articleItem from './Article';
export default {
    data() {
        return {
            articles: {}
        }
    },
    components: {articleItem},
    created() {
        axios.get('/api/article')
            .then((res) => this.articles = res.data.data)
            .catch((err) => console.log(error.response.data))
    }
}
</script>

<style>

</style>
