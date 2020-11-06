<template>
    <CThemeProvider>
    <nav class="bg-white py-3 border-b border-gray px-2 flex justify-between items-center">
        <ul>
            <li class="ml-4 relative ">
                <!-- <input type="search" placeholder="search" class="py-2 focus:outline-none px-6 border border-gray rounded-full text-medium w-64">
                <div class="absolute top-0 right-0 mt-2 mr-5">
                    <i class="ri-mic-2-line text-gray-darker text-medium ri-fw"></i>
                </div> -->
                <div class="cursor-pointer" v-show="mobile">
                    <i class="ri-menu-line text-h4 ri-fw" :class="{ 'opacity-0': hideText, 'opacity-100 block':!hideText }"></i>
                    <i class="ri-close-linetext-h4 ri-fw" :class="{ 'opacity-100': hideText, 'opacity-0':!hideText }"></i>
                </div>
            </li>
        </ul>
        <ul class="lg:flex md:flex hidden items-center">
            <li class="mr-5 relative cursor-pointer">
                <i class="ri-notification-3-line text-large text-gray-darker ri-fw"></i>
                <span class="bg-red h-3 w-3 rounded-full flex items-center justify-center text-white absolute top-0 right-0" style="font-size: 10px">1</span>
            </li>
            <li class="mr-5 cursor-pointer">
                <i class="ri-shopping-cart-2-line text-large text-gray-darker ri-fw"></i>
            </li>
            <!-- <li class="mr-5"></li> -->
            <li class="mr-4 text-gray-darker flex items-center justify-center">
                <span class="text-medium" style="letter-spacing: 1px"></span>
                <c-menu>
                    <c-menu-button fontSize="sm" bg="none" fontWeight="light" border="0" height="none" :_focus="{ outline: 'none' }" width="auto" mx="0" px="0" >
                        <div class="bg-gray h-10 w-10 rounded-full flex items-center justify-center">
                            <i class="ri-user-line text-h4  ri-fw"></i>
                        </div>
                        
                    </c-menu-button>
                    <c-menu-list width="20%">

                        <c-box>
                            <div class="text-medium text-center">
                                <div class="bg-gray h-20 w-20 mx-auto rounded-full flex items-center justify-center">
                                    <i class="ri-user-line text-h4  ri-fw"></i>
                                </div>
                                <p class="mt-2 font-bold text-body-2">Ayodeji Let's see, meh</p>
                                <p>{{ user.email }}</p>
                            </div>
                        </c-box>
                        <!-- <c-menu-item p="0" :_hover="{  background: 'none' }">
                            
                        </c-menu-item>
                        <c-menu-item as="a" href="#">ICT Hub</c-menu-item> -->
                        <c-menu-item as="a" href="/dashboard/settings" fontSize="sm" mt="4" mb="2" pl="8">
                           <i class="ri-edit-line mr-2 ri-fw"></i> Edit Profile
                        </c-menu-item>
                        <c-menu-item as="a" href="#" fontSize="sm" pl="8">
                            <i class="ri-repeat-2-line mr-2 ri-fw"></i> Documentation
                        </c-menu-item>
                        <c-menu-item as="a" href="#" fontSize="sm" pl="8">
                            <i class="ri-logout-box-line mr-2 ri-fw"></i> Logout
                        </c-menu-item>
                    </c-menu-list>
                </c-menu>    
            </li>
        </ul>
    </nav>
    </CThemeProvider>

</template>

<script>
import { CThemeProvider,
    CMenu,
    CMenuButton,
    CMenuList,
    CMenuItem,
    CMenuGroup,
    CMenuDivider,
    CMenuOptionGroup,
    CMenuItemOption,
    CBox,
   } from '@chakra-ui/vue';
export default {
    props:{
        user: { type: Object}
    },
    data(){
        return {
            hideText:false,
            mobile:false
        };
    },
    components:{
        CThemeProvider,
        CMenu,
        CMenuButton,
        CMenuList,
        CMenuItem,
        CMenuGroup,
        CMenuDivider,
        CMenuOptionGroup,
        CMenuItemOption,
        CBox,
      
    },
    mounted(){
        if(window.screen.width < 730) return this.mobile = true;
    }
}
</script>