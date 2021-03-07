require('./bootstrap');

import Vue from "vue";
import router from "./router";

import Navbar from "./components/Navbar.vue";

import Container from "./components/Container.vue";
import Login from "./components/Login.vue";
import Register from "./components/Register.vue";
import EmailSubscription from './components/EmailSubscription.vue';
import JobListings from './components/JobListings.vue';

Vue.component("app-navbar", Navbar);
Vue.component("app-container", Container);
Vue.component("app-login", Login);
Vue.component("app-register", Register);
Vue.component("email-subscription", EmailSubscription);
Vue.component("job-listings", JobListings);

const app = new Vue({
  el: "#app",
  router
});