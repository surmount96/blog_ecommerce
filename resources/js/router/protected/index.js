import Vue from "vue";
import VueRouter from "vue-router";
import protectedRoutes from "../../views/protected/router";
import publicRoutes from "../../views/public/router";
import NotFound from "../../views/NotFound.vue";

Vue.use(VueRouter);

const routes = [
    ...protectedRoutes,
    ...publicRoutes,
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