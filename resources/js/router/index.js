import Vue from 'vue';
import Router from 'vue-router';
import Main from './Main';
import Flowers from './flowers/router.js';
import Layout from './layout/Layout';

Vue.use(Router);

const routes = [
    { path: '', redirect: 'main' },
    {
        path: '/main',
        component: Layout,
        children: [{
            path: '',
            name: 'main',
            component: Main,
        }],
    },
    ...Flowers,
];

export const router = new Router({
    mode: 'history',
    base: '/',
    hashbang: false,
    routes: routes,
});
