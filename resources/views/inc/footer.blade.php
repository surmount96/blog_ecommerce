@if(request()->path() != 'shop')
    <footer class="bg-blue lg:h-64 md:h-64 pt-5 lg:pb-0 md:pb-1 pb-3">
        <div class="mt-4 w-11/12 mx-auto text-medium text-white">
            <div class="flex flex-wrap">
                <div class="lg:w-2/6 md:w-1/4 sm:w-1/2 w-full mb-4">
                    <div class="mb-3">
    {{--                    <img src="elearning/image.svg" alt="">--}}
                        <p class="font-bold text-yellow">{{ config('website.appName') }}</p>
                    </div>
                    <p>No2 Awodele crescent GRA, Oke Oniti ,Osogbo, Osun State.</p>
                    <p>hello@edubridgeacademy.com</p>
                    <p>08034137833</p>
                </div>
                <div class="lg:w-1/6 md:w-1/4 sm:w-1/2 w-full mb-4">
                    <h4 class=" font-bold mb-6">Employers</h4>
                    <p>Ambassadors</p>
                    <p>Hire a grad</p>
                </div>
                <div class="lg:w-1/6 md:w-1/4 sm:w-1/2 w-full mb-4">
                    <h4 class=" font-bold mb-6">Courses</h4>
                    <p>Experienced hire</p>
                    <p>Graduate program</p>
                    <p>Undergraduate program</p>
                    <p>Power BI</p>
                </div>
                <div class="lg:w-1/6 md:w-1/4 sm:w-1/2 w-full mb-4">
                    <h4 class=" font-bold mb-6">Universities</h4>
                    <p>Ambassadors</p>
                    <p>Blog</p>
                </div>
                <div class="lg:w-1/6 md:w-1/4 sm:w-1/2 w-full mb-4">
                    <h4 class=" font-bold mb-6">About us</h4>
                    <p>FAQs</p>
                    <p>Blog</p>
                    <p>Contact us</p>
                </div>
            </div>
            <p class="text-center border-t border-gray py-3 mt-8">
                Copyright 2020 <span class="text-yellow">{{ config('website.appName') }}.</span> All right reserved.
            </p>
        </div>    
    </footer>

@endif