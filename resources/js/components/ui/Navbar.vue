<template>
    <div class="bg-white text-blue shadow rounded-md z-30 absolute right-0 top-0 w-64 mx-auto flex flex-col mt-20 pt-5" style="height: 55vh" :class="{'hidden': !data}">
        <p class="hover:opacity-40"><a class="cursor-pointer py-3 block pl-16" href="/">Home</a></p>
        <p class="hover:opacity-40"><a class="cursor-pointer py-3 block pl-16"  href="/services">Services</a></p>
        <p class="hover:opacity-40"><a class="cursor-pointer py-3 block pl-16"  href="/shop">Shop</a></p>
        <p class="hover:opacity-40"><a class="cursor-pointer py-3 block pl-16"  href="/contact">Contact</a></p>
        <p class="hover:opacity-40 ml-16 my-3">
            <a href="/login" class="bg-warning rounded text-white py-2 px-10">Login</a>
        </p>

    </div>
</template>

<script>
    export default {
        name: "Navbar",
        data(){
            return {

            }
        },
        props:{
            data:{ type: Boolean}
        },
        methods: {

        }
    }
</script>

<style scoped>

</style>
