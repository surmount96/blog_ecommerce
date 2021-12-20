@extends('layouts.master')

@section('title','Welcome to Fummedicare')

@section('content')
    <header class="flex flex-wrap lg:px-20 md:px-16 px-10 height">
        <div class="lg:w-1/2 md:w-1/2 w-full lg:py-32 md:py-10 py-10">
            {{-- <h3 class="lg:text-h3 md:text-h3 text-h4 text-blue font-bold" style="width:80%">Virtual Health care for your family’s health</h3> --}}
            <div class="" style="width:85%">
                <h3 class="lg:text-h3 md:text-h3 text-h4 text-blue font-bold" style="width:80%">We Must Create Better Lives</h3>
                <p class="text-medium leading-28 mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum exercitationem sit libero accusamus natus at error iste commodi tempore nesciunt voluptatem neque repudiandae velit quaerat omnis sed fugit, suscipit eaque?</p>
                <div class="mt-10">
                    <a href="/about" class="bg-orange text-white rounded-md py-3 text-medium px-8">Discover</a>
                </div>
                </div>
            </div>
        <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex lg:py-20 hidden">
            <img src="{{ asset('images/front.svg') }}" alt="header-bg">
        </div>
    </header>

    <section class="lg:mx-32 md:mx-16 mx-3  mt-5 mb-20 flex flex-wrap" data-aos="fade-up">
        <div class="lg:w-1/3 md:w-1/2 w-full mb-4 px-6">
            <div class="mx-auto flex items-center justify-center border border-blue w-16 h-16 rounded-full p-3">
                <i class="ri-chat-4-line text-blue"></i>
            </div>
            <div class="text-center">
                <h3 class="my-3 text-body-2 text-blue uppercase tracking-wide">Interactive environment</h3>
                <p class="text-medium ">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, consectetur possimus? Facilis distinctio est</p>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/2 w-full mb-4 px-6">
            <div class="mx-auto flex items-center justify-center border border-blue w-16 h-16 rounded-full p-3">
                <i class="ri-building-4-line text-blue"></i>
            </div>
            <div class="text-center">
                <h3 class="my-3 text-body-2 text-blue uppercase tracking-wide">One on One pattern</h3>
                <p class="text-medium ">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, consectetur possimus? Facilis distinctio est</p>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/2 w-full mb-4 px-6">
            <div class="mx-auto flex items-center justify-center border border-blue w-16 h-16 rounded-full p-3">
                <i class="ri-building-4-line text-blue"></i>
            </div>
            <div class="text-center">
                <h3 class="my-3 text-body-2 text-blue uppercase tracking-wide">Who we are</h3>
                <p class="text-medium ">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, consectetur possimus? Facilis distinctio est</p>
            </div>
        </div>
        
    </section>
    
    <section class="lg:mx-32 md:mx-16 mx-3  mb-10">
        <div class="flex flex-wrap">
            <div class="lg:w-1/2 md:w-1/2 w-full " >
                <div class="bg-white border border-gray rounded-lg p-16 shadow mb-4 mr-3">
                    <p class="pl-2 py-1 bg-blue-base text-blue text-medium">Meet our awesome community</p>
                    <div class="ml-2">
                        <h3 class="my-3 text-blue uppercase tracking-wide text-h4">Who we are</h3>
                        <p class="text-medium">Opened in 2006 as Vietam's first chiropactic clinic, we effectively treat pain without drugs or surgery</p>
                        <div class="my-2">
                            <a href="/about" class="text-blue uppercase tracking-widest focus:outline-none text-medium font-semibold">
                                read more
                                <span class="ml-1 text-medium">&#187;</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 md:w-1/2 w-full ">
                <div class="bg-blue rounded-lg p-16 mb-4 ml-3">
                    <p class="pl-2 py-1 text-white text-medium">Meet our awesome community</p>
                    <div class="ml-2">
                        <h3 class="my-3 text-white uppercase tracking-wide text-h4">Who we are</h3>
                        <p class="text-medium text-white">Opened in 2006 as Vietam's first chiropactic clinic, we effectively treat pain without drugs or surgery</p>
                        <div class="my-2">
                            <button class="text-white uppercase tracking-widest focus:outline-none text-medium font-semibold">read more</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="lg:my-32 md:my-24 my-20"></div>
    <section class="lg:mx-32 md:mx-16 mx-3 -mt-20 mb-10 " data-aos="fade-up">
        <div class="flex flex-wrap bg-white shadow rounded-lg p-6">
            <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 w-full mb-4 p-4">
                <div class="lg:border-r md:border-r lg:border-blue md:border-blue h-32 flex flex-col items-center justify-center">
                    <p class="text-medium">Choose Service</p>
                    <p class="text-blue">Health Cancer</p>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 w-full mb-4 p-4">
                <div class="lg:border-r md:border-r lg:border-blue md:border-blue h-32 flex flex-col items-center justify-center">
                    <p class="text-medium">Date</p>
                    <p class="text-blue">{{ date('D/M/Y') }}</p>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 w-full mb-4 p-4">
                <div class="lg:border-r md:border-r lg:border-blue md:border-blue h-32 flex flex-col items-center justify-center">
                    <p class="text-medium">Home Number</p>
                    <p class="text-blue">+2348063138322</p>
                </div>
            </div>
            <div class="lg:w-1/4 md:w-1/4 sm:w-1/2 w-full mb-4 p-4">
                <div class="h-32 flex items-center justify-center">
                    <a href="/dashboard/consultant" class="bg-blue py-2 px-6 rounded text-white bg-gradient-to-r from-orange-400 via-red-500 to-pink-500" >Book now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="">

    </section>

    
    {{-- <modal :show="show"/> --}}
    {{-- <button @click="handleLogin">test</button> --}}
@endsection
