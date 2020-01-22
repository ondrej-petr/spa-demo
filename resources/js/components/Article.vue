<template>
    <router-link :to="data.path">
        <v-list-item class="mt-2">
            <v-list-item-content>
                <v-list-item-title>
                        {{data.title}}
                </v-list-item-title>
            </v-list-item-content>
        </v-list-item>
    </router-link>
</template>

<script>
export default {
    props: ['data']
}
</script>

<style>

</style>
