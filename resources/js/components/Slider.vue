<template>
    <v-carousel>
        <v-carousel-item
            v-for="n in 3"
            :key="n"
        >
            <v-sheet
                height="100%"
                tile
            >
                <v-row
                    class="fill-height"
                    align="center"
                    justify="center"
                >
                    <v-img
                        :src="require('../assets/slide/1.jpg')"
                        cover
                    />
                </v-row>
            </v-sheet>
        </v-carousel-item>
    </v-carousel>

</template>

<script>
    export default {
        name: "Slider",
    }
</script>

<style scoped>

</style>
