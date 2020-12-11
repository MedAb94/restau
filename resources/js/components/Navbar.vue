<template>
    <div class="bg-primary">

        <div class="text-right pr-5 font-weight-bolder text-white ">
            <v-btn elevation="0"
                   class="bg-primary white--text lang"
                   v-if="lang==='en'"
                   @click="switchLang('fr')"
            >
                FR
            </v-btn>
            <v-btn elevation="0"
                   class="bg-primary white--text lang"
                   v-if="lang==='fr'"
                   @click="switchLang('en')"
            >
                EN
            </v-btn>
        </div>
        <div class="text-center mt-5 mb-0">

            <v-img
                :src="require('../assets/logo.png')"
                class="mx-auto mb-0"
                max-width="200px"
            />
        </div>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container p-0">

                <!--                <a class="navbar-brand" href="/">-->
                <!--                    Restau-->
                <!--                </a>-->
                <button class="navbar-toggler m-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-auto d-flex align-items-center">
                        <li class="nav-item">
                            <router-link :to="{name:'About'}" tag="a" class="nav-link">{{$t('nav.about')}}</router-link>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link spacer d-none d-md-flex">|</a>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name:'Home'}" tag="a" class="nav-link">
                                <v-select
                                    :items="categories"
                                    :label="$t('nav.menu')"
                                    class="mt-5"
                                    outlined
                                    filled
                                    color="white"
                                    background-color="white"

                                />
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link spacer d-none d-md-flex">|</a>
                        </li>
                        <li class="nav-item">
                            <router-link :to="{name:'Contact'}" tag="a" class="nav-link">{{$t('nav.contact')}}
                            </router-link>
                        </li>
                    </ul>


                </div>
            </div>
        </nav>
    </div>
</template>

<script>
    import {mapActions, mapGetters} from "vuex";
    import i18n from '../src/i18n'

    export default {
        name: "Navbar",
        methods: {
            ...mapActions(["fetchCategories"]),
            switchLang(lang) {
                i18n.locale = lang;

            }
        },
        computed: {
            ...mapGetters(["allCategories", "lang"]),
            categories() {
                let array = [];
                for (const o in this.allCategories) {
                    array.push(this.allCategories[o]['name']);
                }
                return array
            }
        },
        created() {
            this.fetchCategories()
        }
    }
</script>
<style scoped>
    .nav-link {
        font-size: large;
        font-weight: bold;
        color: white !important;
        border-radius: 10px;
    }

    .spacer {
        cursor: text;
    }

    .router-link-exact-active {
        color: red !important;
        /*background: white;*/

    }
    .lang:hover{
        background: #3019d2 !important;
    }

</style>
