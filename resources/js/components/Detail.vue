<template>
    <div>
        <v-card>
            <v-container fluid>
                <v-card-title>
                    <div>
                        <div class="headline">
                            {{data.title}}
                        </div>
                        <span class="grey--text">autor: {{data.user}}</span>
                    </div>
                </v-card-title>
                <v-card-text v-html="data.content"></v-card-text>

                <v-card-actions>
                    <v-btn text @click="destroy">smazat</v-btn>
                </v-card-actions>
            </v-container>
        </v-card>

        <a @click="$router.go(-1)">Zpět</a>
    </div>
</template>

<script>
export default {
    data() {
        return {
            data: {}
        }
    },
    created() {
        axios.get(`/api/article/${this.$route.params.id}`)
            .then((res) => this.data = res.data.data);
    },
    methods: {
        destroy() {
            axios.delete(`/api/article/${this.data.id}`)
                .then((res) => this.$router.push('/'))
                .catch((err) => console.log(err.response.data))
        }
    }
}
</script>

<style>

</style>
