import Vue from 'vue';
import VueRouter from "vue-router";


import Home from './components/Home.vue';
import About from './components/About.vue';
import NotFound from './components/NotFound.vue';

Vue.use(VueRouter);

const routes = [
  {
    path: "*",
    component: NotFound
  },
  {
    path: "/",
    component: Home
  },
  {
    path: "/about",
    component: About
  }
];


export default new VueRouter({
  mode: 'history',
  routes: routes,
});
