import Vue from "vue";
import Router from 'vue-router';
import BootstrapVue from 'bootstrap-vue';

Vue.use(Router)
Vue.use(BootstrapVue)

export default new Router({
    routes: [{
            path: '/',
            name: 'home',
            component: require('./views/Home').default
        },
        {
            path: '/blog',
            name: 'blog',
            component: require('./views/Blog').default

        },
        {
            path: '/login',
            name: 'login',
            component: require('./views/Login').default

        },
        {
            path: '/post/:slug',
            name: 'post',
            component: require('./views/Post').default,
            props: true

        },
        {
            path: '*',
            component: require('./views/404').default

        }
    ],
    mode: 'history', //eliminamos el #/blog de las rutas
    scrollBehavior() {
        return { x: 0, y: 0 }
    }
})