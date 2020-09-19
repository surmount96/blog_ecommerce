@extends('layouts.master')

@section('content')
    <div class="flex flew-wrap lg:mx-12 md:mx-10 mx-2 my-3">
        <div class="lg:w-3/5 md:w-3/5 sm:w-1/2 w-full mb-4">
            <div class="mb-3">
                <iframe src="https://www.youtube.com/embed/eyIEQYR79w4?autoplay=1&mute=1" class="w-full h-64 rounded-lg" title="Iframe Example"></iframe>
            </div>
            <div class="">
                <h3 class="font-bold text-body-2">Coronavirus cases passes over 300,000 around the world</h3>
                <p class="text-medium font-light">
                    ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur 
                </p>
                <p class="text-small font-normal mt-3">
                    By Ayanwoye Ayodeji
                </p>
                <p class="text-small font-light">
                    March 23, 9:30pm
                </p>
            </div>
        </div>
        <div class="lg:w-2/5 md:w-2/5 sm:w-1/2 w-full mb-4">
            <div class="flex flex-wrap p-6">
                <div class="lg:w-2/3 md:w-2/3 w-full">
                    <h3 class="font-bold text-body-2">Google lauches covid-19 page</h3>
                    <p class="text-small font-normal">
                        By Ayanwoye Ayodeji
                    </p>
                    <p class="text-small font-light">
                        March 23, 9:30pm
                    </p>
                </div>
                <div class="lg:w-1/3 md:w-1/3 w-full">
                    <img src="{{ asset('images/model.png') }}" alt="img" class="w-20">
                </div>
            </div>
            <div class="flex flex-wrap p-6 mb-4">
                <div class="lg:w-2/3 md:w-2/3 w-full">
                    <h3 class="font-bold text-body-2">Google lauches covid-19 page</h3>
                    <p class="text-small font-normal">
                        By Jane Doe
                    </p>
                    <p class="text-small font-light">
                        March 23, 9:30pm
                    </p>
                </div>
                <div class="lg:w-1/3 md:w-1/3 w-full">
                    <img src="{{ asset('images/doctor.svg') }}" alt="img" class="w-20">
                </div>
            </div>
            <div class="flex flex-wrap p-6">
                <div class="lg:w-2/3 md:w-2/3 w-full">
                    <h3 class="font-bold text-body-2">Google lauches covid-19 page</h3>
                    <p class="text-small font-normal">
                        By Ayanwoye Ayodeji
                    </p>
                    <p class="text-small font-light">
                        March 23, 9:30pm
                    </p>
                </div>
                <div class="lg:w-1/3 md:w-1/3 w-full">
                    <img src="{{ asset('images/model.png') }}" alt="img" class="w-20">
                </div>
            </div>
        </div>
    </div>

    <div class="flex flew-wrap lg:mx-12 md:mx-10 mx-2 mt-5">
        <div class="lg:w-3/5 md:w-3/5 sm:w-1/2 w-full mb-4">
            <div class="flex flex-wrap mb-4">
                <div class="lg:w-2/3 md:w-2/3 w-full">
                    <h3 class="font-bold text-body-2">Google lauches covid-19 page</h3>
                    <p class="text-medium font-light">
                        ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur 
                    </p>
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="my-4 lg:w-2/3 md:w-2/3 w-full">
                            <p class="text-small font-normal">
                                By Jane Doe
                            </p>
                            <p class="text-small font-light">
                                March 23, 9:30pm
                            </p>
                        </div>
                        <div class="lg:w-1/3 md:w-1/3 w-full">
                            <i class="ri-more-line ri-fw text-gray-100 font-bold"></i>
                            <i class="ri-share-line ri-fw text-gray-100"></i>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 w-full">
                    <img src="{{ asset('images/model.png') }}" alt="img" class="w-32">
                </div>
            </div>
            <div class="flex flex-wrap mb-4">
                <div class="lg:w-2/3 md:w-2/3 w-full">
                    <h3 class="font-bold text-body-2">Google lauches covid-19 page</h3>
                    <p class="text-medium font-light">
                        ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur 
                    </p>
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="my-4 lg:w-2/3 md:w-2/3 w-full">
                            <p class="text-small font-normal">
                                By Jane Doe
                            </p>
                            <p class="text-small font-light">
                                March 23, 9:30pm
                            </p>
                        </div>
                        <div class="lg:w-1/3 md:w-1/3 w-full">
                            <i class="ri-more-line ri-fw text-gray-100 font-bold"></i>
                            <i class="ri-share-line ri-fw text-gray-100"></i>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 w-full">
                    <img src="{{ asset('images/model.png') }}" alt="img" class="w-32">
                </div>
            </div>
            <div class="flex flex-wrap mb-4">
                <div class="lg:w-2/3 md:w-2/3 w-full">
                    <h3 class="font-bold text-body-2">Google lauches covid-19 page</h3>
                    <p class="text-medium font-light">
                        ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur 
                    </p>
                    <div class="flex flex-wrap items-center justify-between">
                        <div class="my-4 lg:w-2/3 md:w-2/3 w-full">
                            <p class="text-small font-normal">
                                By Jane Doe
                            </p>
                            <p class="text-small font-light">
                                March 23, 9:30pm
                            </p>
                        </div>
                        <div class="lg:w-1/3 md:w-1/3 w-full">
                            <i class="ri-more-line ri-fw text-gray-100 font-bold"></i>
                            <i class="ri-share-line ri-fw text-gray-100"></i>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/3 md:w-1/3 w-full">
                    <img src="{{ asset('images/model.png') }}" alt="img" class="w-32">
                </div>
            </div>
        </div>
        <div class="lg:w-2/5 md:w-2/5 sm:w-1/2 w-full mb-4">
            <div class="bg-gray h-32 p-5" style="width:70%">
                <h3 class="font-bold text-h4">Stay informed</h3>
            </div>
            
        </div>
    </div>
@endsection