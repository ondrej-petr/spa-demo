<template>
    <div>
        <v-container fluid>
            <v-layout>
                <v-flex xs7>
                    <v-list dense>
                        <v-subheader>Seznam článků</v-subheader>
                        <v-list-item-group color="primary">
                            <article-item
                                v-for="article in articles"
                                :key="article.id"
                                :data="article"
                            >
                            </article-item>
                        </v-list-item-group>
                    </v-list>
                    </article-item>
                </v-flex>
                <v-flex xs4 offset-xs1>
                    <v-list dense>
                        <v-subheader>Kategorie</v-subheader>
                        <v-list-item-group color="primary">
                            <v-list-item
                                v-for="category in categories"
                                :key="category.id"
                                @click="filter(category)"
                            >
                                <v-list-item-content>
                                    <v-list-item-title v-text="category.name"></v-list-item-title>
                                </v-list-item-content>
                            </v-list-item>
                        </v-list-item-group>
                    </v-list>
                </v-flex>
            </v-layout>

        </v-container>
    </div>
</template>

<script>
import articleItem from './Article';
export default {
    data() {
        return {
            articles: {},
            categories: {}
        }
    },
    components: {articleItem},
    created() {
        axios.get('/api/article')
            .then((res) => this.articles = res.data.data)
            .catch((err) => console.log(err.response.data));
        axios.get('/api/category')
            .then((res) => this.categories = res.data.data)
            .catch((err) => console.log(err.response.data));
    },
    methods: {
        filter: function(category) {
            axios.get(`/api/category/${category.id}/article`)
                .then((res) => this.articles = res.data.data)
                .catch((err) => console.log(err.response.data));
        }
    }
}
</script>

<style>

</style>
