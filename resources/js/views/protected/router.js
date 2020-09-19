import Index from "./Index.vue";
import Dashboard from "../layouts/Dashboard.vue";
import Settings from "./Settings.vue";
import Profile from "./Profile.vue";
import Product from "./Product.vue";
import Consultancy from "./Consultancy.vue"

const protectedRoutes = [
    {
        path:'/dashboard',
        name:'Dashboard',
        component: Dashboard,
        children:[
            {
                path:'/dashboard',
                component:Index
            },
            {
                path:'settings',
                component:Settings
            },
            {
                path:'profile',
                component:Profile
            },
            {
                path:'consultancy',
                component:Consultancy
            },
            {
                path:'products',
                component:Product
            },

        ]
    }
];

export default protectedRoutes;