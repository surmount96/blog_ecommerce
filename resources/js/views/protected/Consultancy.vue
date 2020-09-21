<template>
    <div class="">
        <div class="flex flex-wrap" style="height:85vh">
            <div class="lg:w-3/12 md:w-3/12 w-full">
                <div class="bg-white rounded-md py-4" style="width:95%">
                    <div class="mx-4 my-3 relative">
                        <input type="search" placeholder="search messages" class="py-2 focus:outline-none px-8 border border-gray rounded-full text-medium w-56">
                        <div class="absolute top-0 left-0 mt-2 ml-3">
                            <i class="ri-search-2-line text-gray-400 text-medium ri-fw"></i>
                        </div>
                    </div>
                    <div class="flex items-center bg-gray px-4 mb-4 py-2 cursor-pointer" @click="show = !show">
                        <div class="">
                            <div class="h-12 w-12 rounded-full bg-orange"></div>
                        </div>
                        <div class="text-medium ml-2" style="width:100%">
                            <div class="flex justify-between">
                                <p class=" ">Jane Doe</p>
                                <p class="">1:30pm</p>
                            </div>
                            <p class=" ">Managing director</p>
                        </div>
                    </div>
                    <div class="flex items-center bg-white px-4 mb-4 py-2 cursor-pointer" @click="show = !show">
                        <div class="">
                            <div class="h-12 w-12 rounded-full bg-orange"></div>
                        </div>
                        <div class="text-medium ml-2" style="width:100%">
                            <div class="flex justify-between">
                                <p class=" ">Johnson</p>
                                <p class="">8:30pm</p>
                            </div>
                            <p class=" ">Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-9/12 md:w-9/12 w-full">
                <div class="bg-white p-4 h-64 flex items-center flex-col justify-center rounded-md" v-show="!show">
                    <h3 class="font-bold flex items-center text-h4 mb-4">Hi, 👋 </h3>
                    <div class="text-medium text-center">
                        <p>Please choose a user to chat with</p>
                        <p>You can also create a group and add your friends to the group in settings</p>
                    </div>
                </div>
                <div class="bg-white pb-6 pt-3 rounded-md" v-show="show">
                    <div class="flex items-center mb-4 px-4 py-2 border-b border-gray">
                        <div class="w-128 flex items-center">
                            <div class="">
                                <div class="h-12 w-12 rounded-full bg-orange"></div>
                            </div>
                            <div class="text-medium ml-4">
                                <p class="font-bold ">Jane Doe</p>
                                <p class=" " style="font-size: 13px;">online</p>
                            </div>
                        </div>
                        <div class="w-64 text-right">
                            <i class="ri-lock-line text-gray-darker text-h3 ri-fw"></i>
                        </div>
                    </div>
                    <div class="">
                        <div class="bg-gray p-3 text-medium lg:ml-4 rounded-lg" style="width:90%">
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dicta dolores eligendi facilis id maiores pariatur quos voluptates! At consequatur dolorum esse fugit harum illum nisi porro quidem totam vero?</span></p>
                            <div class="text-right">
                                <span>8:23 AM</span>
                            </div>
                        </div>
                        <div class="bg-warning text-white  mt-4 ml-auto p-3 text-medium rounded-lg mr-4" style="width:90%">
                            <p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dicta dolores eligendi facilis id maiores pariatur quos voluptates! At consequatur dolorum esse fugit harum illum nisi porro quidem totam vero?</span></p>
                            <div class="text-right">
                                <span>8:23 AM</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative mt-10 mb-5 mx-auto flex " style="width: 90%;">
                        <input type="search" placeholder="type a message" class="py-3 focus:outline-none pl-10 pr-16 border border-gray rounded-full w-full text-medium" style="margin-right:-40px">
                        <div class="absolute top-0 left-0 mt-3 ml-3">
                            <i class="ri-emotion-normal-line text-gray-400 text-large ri-fw"></i>
                        </div>
                        <div class="">
                            <button class="bg-warning text-white py-3 px-12 flex items-center rounded-full">
                                send
                                <i class="ri-send-plane-line text-white text-large ml-4 transform rotate-45 ri-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            show:false
        };
    },
}
</script>