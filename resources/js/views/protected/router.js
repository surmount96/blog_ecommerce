import Index from "./Index.vue";
import Dashboard from "../layouts/Dashboard.vue";
import Settings from "./Settings.vue";
import Profile from "./Profile.vue";
import Product from "./Product.vue";
import Consultancy from "./Consultancy.vue"

// Admin section
import Admin from "../layouts/Admin.vue";
import AdminIndex from "./admin/Index.vue";
import Blog from "./admin/Blog.vue";
import LiveChat from "./admin/Consultancy.vue";
import Order from "./admin/Order.vue";
import UserSetting from "./admin/Setting.vue";

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
    },

    // Admin routes
    {
        path:'/admin',
        component:Admin,
        children:[
            {
                path:'dashboard',
                component: AdminIndex
            },
            {
                path:'products',
                component: Order
            },
            {
                path:'consultancy',
                component: LiveChat
            },
            {
                path:'blog',
                component: Blog
            },
            {
                path:'settings',
                component: UserSetting
            }
        ]
    }
];

export default protectedRoutes;