<template>
    <CThemeProvider class="">
        <router-view></router-view>
    </CThemeProvider>
</template>

<script>
import { CThemeProvider } from '@chakra-ui/vue'
export default {
    components:{
        CThemeProvider
    }
}
</script>