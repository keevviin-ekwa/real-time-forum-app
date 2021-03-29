<template>
    <v-footer
        dark
        height="auto"
    >
        <v-card
            class="flex"
            flat
            tile
        >

            <v-card-actions class="grey darken-3 justify-center">
                &copy;{{new Date().getFullYear()}}— <strong>By Kevin Ekwa</strong>
            </v-card-actions>
        </v-card>
    </v-footer>
</template>

<script>
export default {
    name: "AppFooter"
}
</script>

<style scoped>

</style>
