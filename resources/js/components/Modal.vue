<template>
    <div>
        <vodal :show="show" animation="rotate" :width="450" :height="500" @hide="show = false">
        <div class="p-5">
            <h3 class="font-bold text-blue text-large">Please provide your details below</h3>
            <p class="my-2 text-medium"><span class="font-bold">NOTE</span>: This information will be used to create an account for you inorder to have a section with the Doctor.</p>
        </div>
        <form action="">
            <div class=" my-3 lg:mx-5 md:mx-5 mx-4 relative">
                <input id="name" type="name" placeholder="Full name" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm" name="name" required autocomplete="name" autofocus>
                <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                    <i class="ri-user-line ri-fw text-gray-100"></i>
                </div>
            </div>
            <div class=" my-3 lg:mx-5 md:mx-5 mx-4 relative">
                <input id="email" type="email" placeholder="Email address" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm " email="email" required autocomplete="email" autofocus>
                <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                    <i class="ri-mail-line ri-fw text-gray-100"></i>
                </div>
            </div>
            <div class="flex flex-wrap my-3 lg:mx-5 md:mx-5 mx-4">
                <div class="lg:w-1/2 md:w-1/2 w-full mb-4 relative">
                    <div class="mr-2">
                        <input type="text" placeholder="phone number" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm" name="phone_number" required autofocus>
                        <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                            <i class="ri-phone-line ri-fw text-gray-100"></i>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full mb-4 relative">
                    <div class="">
                        <input type="text" placeholder="Blood group" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm" required autocomplete="blood_group" autofocus>
                        <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                            <i class="ri-user-line ri-fw text-gray-100"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" my-3 lg:mx-5 md:mx-5 mx-4 relative">
                <input id="date" type="date" placeholder="Date" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm" name="date" required autocomplete="date" autofocus>
                <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                    <i class="ri-calendar-line ri-fw text-gray-100"></i>
                </div>
            </div>
            <div class="mx-5">
                <button type="submit" class="bg-orange text-white py-3 px-4 w-full text-medium">submit</button>
            </div>
            
        </form>
    </vodal>
    </div>
</template>

<script>
export default {
    props:['show']
}
</script>