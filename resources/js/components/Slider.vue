<template>
    <v-carousel >
        <v-carousel-item>
            <v-sheet
                :height="height"
                tile
            >
                <v-row
                    class="fill-height"
                    align="center"
                    justify="center"
                >
                    <v-img
                        :src="require('../assets/home.jpg')"
                        cover
                    />
                </v-row>
            </v-sheet>
        </v-carousel-item>
        <v-carousel-item>
            <v-sheet
                :height="height"
                tile
            >
                <v-row
                    class="fill-height"
                    align="center"
                    justify="center"
                >
                    <v-img
                        :src="require('../assets/about.jpg')"
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
    props: {
        height: {
            type: String,
            default: '100%'
        }
    }


}
</script>

<style scoped>

</style>
