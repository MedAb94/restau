import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from "../components/Home";
import About from "../components/About";
import Contact from "../components/Contact";
Vue.use(VueRouter);
const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/about',
        name: 'About',
        component: About,
    },
    {
        path: '/contact',
        name: 'Contact',
        component: Contact,
    },


];

const router = new VueRouter({
    mode: 'history',
    routes
});


export default router
