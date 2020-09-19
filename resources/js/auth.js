import Vue from "vue";

import 'remixicon/fonts/remixicon.css';
import router from "./router";

Vue.component('dashboard',require('./views/layouts/Dashboard.vue').default);

const user = new Vue({
    el: '#Admin',
    router
});