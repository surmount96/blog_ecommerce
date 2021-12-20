import Vue from "vue";

import 'remixicon/fonts/remixicon.css';
import router from "./router/protected/";
import ToggleButton from 'vue-js-toggle-button'
import Chakra from '@chakra-ui/vue'
import chakraConfig from "./chakra-config"
import VCalendar from 'v-calendar';
import moment from "moment";
import DatePicker from 'v-calendar/lib/components/date-picker.umd';
import Flutterwave from 'vue-flutterwave';
 
Vue.use(Flutterwave, { publicKey: process.env.MIX_FLUTTERWAVE })

Vue.use(VCalendar);
Vue.component('date-picker', DatePicker)
Vue.filter('date', function(value){
    if(!value) return '';
    return moment(value).subtract(10, 'days').calendar();;
});
require('./bootstrap');

Vue.use(ToggleButton)
Vue.use(Chakra,chakraConfig);


Vue.component('dashboard',require('./views/layouts/Dashboard.vue').default);
Vue.component('app-navbar',require('./views/protected/Navbar.vue').default);
Vue.component('admin',require('./views/layouts/Admin.vue').default);

const user = new Vue({
    el: '#Admin',
    router,
    data(){
        return {
            hideText:false,
            mobile:false,
        };
    },
    mounted(){
        
    }
});