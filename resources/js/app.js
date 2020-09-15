require('./bootstrap');
import { router } from './router';
import Vue from 'vue';
import App from "./components/App";
import store from "./store";

import SmoothPicker from 'vue-smooth-picker'
Vue.use(SmoothPicker)

const files = require.context('./', true, /\.vue$/i)

files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    router,
    store,
    render: h => h(App),
}).$mount('#app');
