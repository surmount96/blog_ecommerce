import Vue from "vue";
import VueRouter from "vue-router";
import publicRoutes from "../../views/public/router";

Vue.use(VueRouter);

const routes = [
    ...publicRoutes
];

const router = new VueRouter({
    mode:'history',
    routes
});

export default router;