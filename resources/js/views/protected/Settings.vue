<template>
    <div class="flex flex-wrap lg:mx-20 md:mx-10 mx-6">
        <div class="lg:w-1/2 md:w-1/2 w-full mb-4">
            <div class="bg-white shadow mr-4 rounded-lg py-10 px-6">
                <h3 class="text-body-2">Personal Details</h3>
                <p class="my-1 text-medium text-gray-grayer mr-10">Feel free to edit your basic information such as name, email etc.</p>
                <div class="mb-6 mt-3">
                    <div class="relative">
                        <input type="text" placeholder="Full name" v-model="form.name" class="text-medium placeholder-blue text-blue pb-1 pl-6 w-full border-b border-blue focus:outline-none rounded-sm" autofocus>
                        <div class="absolute top-0 left-0 " style="margin-top: 0rem">
                            <i class="ri-user-line ri-fw text-blue"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="relative">
                        <input type="email" placeholder="Email Address" v-model="form.email" class="text-medium placeholder-blue text-blue pb-1 pl-6 w-full border-b border-blue focus:outline-none rounded-sm" autofocus>
                        <div class="absolute top-0 left-0 " style="margin-top: 0rem">
                            <i class="ri-mail-line ri-fw text-blue"></i>
                        </div>
                    </div>
                </div>
                <div class="mb-6">
                    <div class="relative">
                        <input type="password" placeholder="Password" v-model="form.password" class="text-medium placeholder-blue text-blue pb-1 pl-6 w-full border-b border-blue focus:outline-none rounded-sm" autofocus>
                        <div class="absolute top-0 left-0 " style="margin-top: 0rem">
                            <i class="ri-lock-line ri-fw text-blue"></i>
                        </div>
                    </div>
                </div>
                <div class="">
                    <button class="bg-blue py-2 px-4 text-white text-medium rounded" @click="updateProfile">submit</button>
                </div>
            </div>
        </div>
        <div class="lg:w-1/2 md:w-1/2 w-full mb-4 ">
            <div class="bg-white shadow ml-4 py-10 px-6 rounded-lg" style="height:30vh">
                <h3 class="text-body-2">Notification Preferences</h3>
                <p class="my-1 text-medium text-gray-grayer mr-10">Control all our newsletter and emails related notifications to your inbox</p>
                <div class="flex items-center mt-4">
                    <div class="">
                        <toggle-button v-model="month"
                            color="#2F4FA7"
                            :sync="true"
                            :labels="true"/>
                    </div>
                    <p class="ml-2 text-gray-grayer text-medium">Monthly newsletter</p>
                </div>
            </div>
             <div class="bg-white shadow ml-4 rounded-lg mt-6 p-3" style="height:40vh">
                <div class="bg-blue text-white p-5 h-48">
                    <h3 class="text-body-2 font-bold">Personal Details</h3>
                    <p class="my-1 text-medium">Feel free to edit your basic information such as name, email etc.</p>
                </div>
                <div class="bg-white h-16 pl-3 flex items-center -mt-10 mx-auto shadow rounded-lg" style="width:90%">
                    <h4 class="text-h4 text-gray-grayer">$400</h4>
                    <div class="ml-4">
                        <p class="bg-orange px-1 text-white text-center w-16 text-small">premium</p>
                        <p class="text-small text-gray-grayer">Feel free to edit your basic information such as name,</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { RepositoryFactory as Repo } from "../../repository/RepositoryFactory";
const CY = Repo.get('consultant');

export default {
    data(){
        return {
            month:false,
            authuser:{},
            form:{
                name:'',
                email:'',
                password:''
            }
        };
    },
    mounted(){
        this.user()
    },
    methods:{
        updateProfile(){
            CY.updateProfile(this.form, this.authuser.id)
                .then(res => {
                    this.$toast({
                        position:'top-right',
                        title: 'Profile updated',
                        description: "Your details has been successfully changed",
                        status: 'success',
                        duration: 10000
                    })
                })
        },
        user(){
            CY.authUser()
                .then(res => {
                    this.form = res;
                    // console.log(this.authuser)
                })
        }
    }
}
</script>