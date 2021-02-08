<template>
    <v-card
        flat
        tile
        width="100%"
        class="text-center"
        color="lime"
    >
        <v-card-text class="text-danger font-weight-bold">
            <v-row align="center">
                <v-col cols="12" md="3" sm="12">
                    <v-img
                        :src="require('../assets/logo.png')"
                        class="mx-auto mb-0"
                        max-width="200px"
                    />
                    <br>
                    <strong>
                        <v-icon color="red">mdi-phone</v-icon>
                        613-590-8429
                    </strong> <br>
                    <strong>
                        <v-icon color="red">mdi-phone</v-icon>
                        613-276-6153
                    </strong>
                </v-col>
                <v-col cols="12" md="3" sm="12">
                    <strong>
                        Horaires
                    </strong>
                  <div >
                      {{lang==='fr'?"Tous les jours":"Everyday"}}
                  </div>
                    <div >
                     11H:00 - 21H:00
                  </div>
                </v-col>
                <v-col cols="12" md="3" sm="12">
                    {{$t('footer.links')}}
                    <div class="mt-2">
                        <router-link :to="{name: 'About'}" tag="a" class="mr-2 red--text">{{$t('nav.about')}}</router-link>
                        <router-link :to="{name: 'Home'}" tag="a" class="mr-2 red--text">Menu</router-link>
                        <router-link :to="{name: 'Contact'}" class="red--text" tag="a">{{$t('nav.contact')}}</router-link>
                    </div>

                </v-col>
                <v-col cols="12" md="3" sm="12">
                    <div>
                        {{$t('footer.address')}} : 928 Montreal Rd. Unit-1, Ottawa, ON K1K0S8
                    </div>
                    <v-icon color="red">mdi-facebook</v-icon>
                    <v-icon color="red">mdi-instagram</v-icon>
                </v-col>
            </v-row>


        </v-card-text>

        <v-divider/>

        <v-card-text class="red--text">
            @{{ new Date().getFullYear() }} — <strong>LAZARE'S CHICKEN BBQ HOUSE</strong>
        </v-card-text>
    </v-card>
</template>
<script>
    import {mapGetters} from "vuex";

    export default {
        name: "AppFooter",
        data() {
            return {
                hours: [
                    {
                        day: "Monday",
                        dayFr: "Lundi",
                        hour: "11am - 9am"
                    },
                    {
                        day: "Tuesday",
                        dayFr: "Mardi",
                        hour: "11am - 9am"
                    },
                    {
                        day: "Wednesday",
                        dayFr: "Mercredi",
                        hour: "11am - 9am"
                    },
                    {
                        day: "Thursday",
                        dayFr: "Jeudi",
                        hour: "11am - 9am"
                    },
                    {
                        day: "Friday",
                        dayFr: "Vendredi",
                        hour: "11am - 9am"
                    }, {
                        day: "Saturday",
                        dayFr: "Samedi",
                        hour: "11am - 9am"
                    }, {
                        day: "Sunday",
                        dayFr: "Dimanche",
                        hour: "11am - 9am"
                    },

                ]
            };
        },
        computed:mapGetters(["lang"]),

    };
</script>
<style lang="scss" scoped>
    .v-list-item .v-icon.v-icon {
        /*all: initial;*/
        font-size: .8125rem !important;
        color: red !important
    }
</style>
