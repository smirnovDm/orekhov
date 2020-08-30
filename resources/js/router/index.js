import Vue from 'vue';
import Router from 'vue-router';
import Main from '../pages/Main';
import Default from '../layout/Default';

Vue.use(Router);

const routes = [
    {
        path: '/',
        component: Default,
        children: [{
            path: '',
            name: 'main',
            component: Main,
        }],
    },
];

export const router = new Router({
    mode: 'history',
    base: '/',
    hashbang: false,
    routes: routes,
});
