<template>
    <div class="bg-primary white--text">
        <v-carousel height="40vh">
            <v-carousel-item>
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
                            :src="require('../assets/home.jpg')"
                            cover
                        />
                    </v-row>
                </v-sheet>
            </v-carousel-item>
            <v-carousel-item>
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
                            :src="require('../assets/about.jpg')"
                            cover
                        />
                    </v-row>
                </v-sheet>
            </v-carousel-item>
        </v-carousel>
        <v-container>
            <h2 class="text-center red--text"> {{$t('about.title')}}</h2>
            <v-row align="center">
                <v-col cols="12" md="6" sm="12" order="2" order-md="1">
                    <p>
                        {{$t('about.1')}}
                    </p>

                </v-col>
                <v-col cols="12" md="6" sm="12" order="1" order-md="2">
                    <v-img
                        :src="require('../assets/about.jpg')"
                        class="my-3"
                        cover
                    />
                </v-col>
                <v-col cols="12" order="3" order-md="4" md="6" sm="12">
                    <v-img
                        :src="require('../assets/about.jpg')"
                        class="my-3"
                        cover
                    />
                </v-col>
                <v-col cols="12" order="12" order-md="6" md="6" sm="12">
                    <p>
                        {{$t('about.2')}}
                    </p>

                </v-col>
            </v-row>
        </v-container>
        <mailbox/>
    </div>
</template>

<script>
    import Mailbox from "./Mailbox";
    import Slider from "./Slider";

    export default {
        name: "About",
        components: {Mailbox, Slider},

        data() {
            return {}
        }
    }
</script>

<style scoped>

</style>
