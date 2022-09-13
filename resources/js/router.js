import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import HomePage from './pages/HomePage.vue';
import AboutPage from './pages/AboutPage.vue';


// regole per il routing
const router = new VueRouter({
    mode: 'history',
    routes : [
            { 
                path: '/',
                name: 'home',
                component: HomePage
            },
            { 
                path: '/about',
                name: 'about',
                component: AboutPage
            }
      ]
});

export default router;