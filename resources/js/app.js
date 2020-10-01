/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vodal from 'vodal';
import ToggleButton from 'vue-js-toggle-button'
 
Vue.use(ToggleButton)

Vue.component(Vodal.name, Vodal);

import "vodal/common.css";
import "vodal/rotate.css";
import 'remixicon/fonts/remixicon.css';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);
Vue.component('products', require('./views/public/Products.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#front',
    data() {
        return {
            show:false,
            test:false,
            age:true,
            formData:{
                email:'ayanwoye74@gmail.com',
                password:'dimeji22'
            }
        };
    },
    methods:{
        handleLogin(){

            axios.get('/sanctum/csrf-cookie')
                .then(response => {
                    axios.post('/login',this.formData).then((res) => {
                        console.log(res);
                    })
                    .catch();
                    console.log(response);
                });
        }
    }
});
