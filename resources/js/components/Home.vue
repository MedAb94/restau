<template>
    <div class="bg-primary">
        <div class="bg-primary">
            <div class="container">
                <div>
                    <v-text-field
                        :label="$t('home.search')"
                        class="w-50 mx-auto"
                        outlined
                        color="white"
                        filled
                        background-color="white"
                    />
                </div>
            </div>
        </div>
        <slider></slider>
        <div class="text-center container red--text">
            <h1>{{$t('home.name')}}</h1>
            <div class="waiter-area">
                <div class="waiter-inner">
                    <v-row align="center">
                        <v-col cols="12" sm="12" md="4">
                            <v-img
                                :src="require('../assets/waiter.png')"
                                class="my-3"
                                contain
                                height="350"
                            />
                        </v-col>
                        <v-col cols="12" sm="12" md="8">
                            <h1>{{$t('home.title')}}</h1>
                        </v-col>
                    </v-row>
                </div>
            </div>
        </div>
        <section>
            <v-container v-for="categ in allCategories" :key="categ.id">
                <div>
                    <h1 class="red--text">{{categ.name}}</h1>
                </div>

                <div class="container0 py-3">
                    <v-row class="w-75 mr-5 double-border" align="center" v-for="(product, index) in categ.products"
                           :key="product.id">
                        <v-col cols="12">
                            <v-row>
                                <v-col md="8" sm="12">
                                    <h3 class="red--text">
                                        {{product.name}}
                                    </h3>
                                    <p style="overflow: hidden">
                                        {{product.description}}
                                    </p>
                                    <div class="font-weight-bold">${{product.price}}</div>
                                </v-col>
                                <v-col md="4" sm="12" class="pa-0">
                                    <v-img
                                        :src="product.image"
                                        class="m-0 mr-md-2"
                                        contain
                                        max-height="150"
                                    />
                                </v-col>
                            </v-row>
                        </v-col>
                    </v-row>
                </div>
            </v-container>
            <mailbox></mailbox>
        </section>

    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex'
    import Mailbox from "./Mailbox";
    import Slider from "./Slider";

    export default {
        name: "Home",
        components: {Mailbox, Slider},

        methods: {
            ...mapActions(["fetchProducts", "fetchCategories"])
        },
        computed: {
            ...mapGetters(["allProducts", "allCategories"]),
        },
        created() {
            // this.fetchProducts()
            // this.fetchCategories()
        }
    }
</script>

<style scoped lang="scss">
    .jumbotron {
        height: 30vh;
    }


    .waiter-area {
        border: 3px solid #64DD17;
        border-radius: 20px;
        padding: 2px;
    }

    .waiter-inner {
        border: 3px solid #CDDC39;
        border-radius: 20px
    }


    .container0 {
        display: flex;
        overflow-x: scroll;
        overflow-y: hidden;
        white-space: nowrap;

        img {
            margin-right: 15px;

        }
    }

    .container0::-webkit-scrollbar {
        display: none;
    }

    .double-border {
        border: 3px solid #CDDC39;
        border-radius: 10px;
        position: relative;
        margin: 0 auto;
    }

    .double-border:before {
        background: none;
        border-radius: 10px;
        border: 3px solid #64DD17;
        content: "";
        display: block;
        position: absolute;
        top: 4px;
        left: 4px;
        right: 4px;
        bottom: 4px;
        pointer-events: none;
    }

</style>
