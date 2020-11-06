import Product from "./Product.vue";
import ProductLayout from "./layout/ProductLayout.vue"

const publicRoutes = [
    {
        path:'/product/:id',
        component:ProductLayout,
        children:[
            {
                path:'',
                component: Product
            }
        ]
    },
];

export default publicRoutes;