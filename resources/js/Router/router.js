import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Tabmenue from '../components/Tabmenue.vue'

const routes=[
    { path:'/men', component:Tabmenue},
    { path:'/women', component:Tabmenue},
    { path:'/electricity', component:Tabmenue},
    { path:'/sports', component:Tabmenue}

]

const router = new VueRouter({
    routes,
    hashbang:false,
    mode: 'history'
})
export  default router
