import Vue from 'vue';
import Vuex from 'vuex';
import products from "./modules/products";
import i18n from "../src/i18n";
Vue.use(Vuex);

export default new Vuex.Store({
    state: {},
    getters: {
        lang : ()=>i18n.locale

    },
    mutations: {},
    actions: {},
    modules: {
        products
    }
})
