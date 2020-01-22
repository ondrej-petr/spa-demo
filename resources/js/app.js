require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue';
import vuetify from './plugins/vuetify';
import router from './router';

import AppHome from './components/AppHome.vue';

Vue.component('app-home', AppHome);

new Vue({
    vuetify,
    router
}).$mount('#app');
