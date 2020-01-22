import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Detail from './components/Detail';
import List from './components/List';

const routes = [{
        path: '/',
        component: List
    }, {
        path: '/article/:id',
        component: Detail
}]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
});

export default router;
