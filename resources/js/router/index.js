import Vue from "vue";
import VueRouter from "vue-router";
import protectedRoutes from "../views/protected/router";

Vue.use(VueRouter);

const routes = [
    ...protectedRoutes,
];

const router = new VueRouter({
    mode:'history',
    routes,
});

export default router;