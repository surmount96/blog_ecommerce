<template>
    <div class="">
        <checkout />
    </div>
</template>

<script>
import Checkout from './Checkout';
import Chakra, { CThemeProvider, CReset } from '@chakra-ui/vue'
import Vue from "vue"

Vue.use(Chakra)

export default {
    components:{
        Checkout,
       
    },
    render: (h) => h(CThemeProvider, [h(CReset), h(Checkout)]),
}
</script>