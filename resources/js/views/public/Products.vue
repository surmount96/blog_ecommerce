<template>
    <CThemeProvider>
        <div class="flex flex-wrap relative bg-gray" style="h">
            <div class="lg:w-3/12 w-3/12 mb-4  relative">
                <div class=" bg-white mr-5 p-5 fixed left-" style="height:100vh;width:24%;">
                    <h3 class="font-bold text-h4 text-black text-center">Clothing</h3>
                    <div class="mt-16 ml-6">
                        <h3 class="font-bold text-black text-body-2 mb-8">Filter</h3>
                        <div class="text-medium flex w-56 mb-8">
                            <p>Category</p>
                            <p class="ml-auto">
                                <i class="ri-add-line"></i>
                            </p>
                        </div>
                        <div class="text-medium flex w-56 mb-8">
                            <p>Price</p>
                            <p class="ml-auto">
                                <i class="ri-add-line"></i>
                            </p>
                        </div>
                        <div class="text-medium text-black flex w-56">
                            <p>Woman</p>
                            <p class="ml-auto">
                                <i class="ri-add-line"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:w-9/12 w-9/12 mb-4" >
                <nav class="flex px-12 ">
                    <ul class="flex justify-end items-center w-1/2 ml-auto">
                        <li class="relative hidden">
                            <input type="search" placeholder="" class=" text-medium focus:outline-none border-b w-128 border-gray bg-gray py-2 pl-6">
                            <div class="absolute top-0  right-0">
                                <i class="ri-search-2-line"></i>
                            </div>
                        </li>
                        <li class="ml-4 py-3">
                            <i class="ri-search-2-line"></i>
                        </li>
                        <li class="ml-4 py-3">
                            <i class="ri-calendar-line"></i>
                        </li>
                    </ul>
                </nav>
                <div class="flex flex-wrap py-8 mb-4">
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                        
                    </div>
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap py-8 mb-4">
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap py-8 mb-4">
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                        <div class="mx-10">
                            <div class="bg-white h-64">
                                <c-flex justify-content="center" align-items="center" width="100%" height="100%">
                                    <c-image src="images/shirt.png" size="80%" my="auto" objectFit="cover" />
                                </c-flex>
                            </div>
                            <p class="mr-2 text-medium leading-26">Sport gear for racing</p>
                            <p class="mr-2 text-medium">$178</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </CThemeProvider>
</template>

<script>
import { CThemeProvider, CBox, CImage, CFlex, } from '@chakra-ui/vue'
export default {
    components:{
        CThemeProvider,
        CBox,
        CImage,
        CFlex
    },
    data(){
        return {

        };
    },
    methods:{

    }
}
</script>