require('./bootstrap');

window.Vue = require('vue');
window.Vuetify = require('vuetify');

Vue.component('appnav', require('./components/Navbar.vue').default);
Vue.component('appfooter', require('./components/Footer.vue').default);

import Home from './components/Home'
import router from './router'
import 'vuetify/dist/vuetify.min.css'
import store from './store'
import i18n from "./src/i18n";

const app = new Vue({
    el: '#app',
    router,
    vuetify: new Vuetify({
            theme:
                {
                    primary: '#000',
                    secondary: '#29B6F6',
                    anyColor: '#0000',
                }
        }
    ),
    store,
    i18n,

    components: {
        Home,
    },
    created() {
        // this.$vuetify.theme.dark = true

    }
});
