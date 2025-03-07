import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
import Home from './components/Home'
import Hello from './components/Hello'

export default new VueRouter({
    mode: 'history',
    base: '/es/',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello
        },
    ],
});
