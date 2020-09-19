import Index from "./Index.vue";
import Dashboard from "../layouts/Dashboard.vue";

const protectedRoutes = [
    {
        path:'',
        name:'Dashboard',
        component: Dashboard,
        children:[
            {
                path:'dashboard',
                component:Index
            }
        ]
    }
];

export default protectedRoutes;