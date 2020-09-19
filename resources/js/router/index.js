import Vue from "vue";
import VueRouter from "vue-router";
import protectedRoutes from "../views/protected/router";
import NotFound from "../views/NotFound.vue";

Vue.use(VueRouter);

const routes = [
    ...protectedRoutes,
    {
        path:'*',
        component:NotFound
    }
];

const router = new VueRouter({
    mode:'history',
    routes,
});

export default router;