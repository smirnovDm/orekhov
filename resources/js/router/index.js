import Vue from 'vue';
import Router from 'vue-router';
import Main from '../pages/Main';
import About from '../pages/About';
import Contact from '../pages/Contact';
import BookTrip from '../pages/BookTrip';
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
    {
        path: '/about',
        component: Default,
        children: [{
            path: '',
            name: 'about',
            component: About,
        }],
    },
    {
        path: '/contact',
        component: Default,
        children: [{
            path: '',
            name: 'contact',
            component: Contact,
        }],
    },
    {
        path: '/book-trip',
        component: Default,
        children: [{
            path: '',
            name: 'BookTrip',
            component: BookTrip,
        }],
    },
];

export const router = new Router({
    scrollBehavior() {
        return {x: 0, y: 0};
    },
    mode: 'history',
    base: '/',
    hashbang: false,
    routes: routes,
});
