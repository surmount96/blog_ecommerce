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
                    <button class="bg-blue text-white rounded-lg py-4 text-medium px-8">Discover</button>
                </div>
                </div>
            </div>
        <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex lg:py-20 hidden">
            <img src="{{ asset('images/front.svg') }}" alt="header-bg">
        </div>
    </header>
    
    <section class="lg:mx-32 md:mx-16 mx-3 lg:-mt-16 md:-mt-16  mb-10">
        <div class="flex flex-wrap">
            <div class="lg:w-1/2 md:w-1/2 w-full bg-white rounded-lg p-16 shadow mb-4 " data-aos="fade-up" data-aos-delay="500">
                <p class="pl-2 py-1 bg-blue-base text-blue text-medium">Meet our awesome community</p>
                <div class="ml-2">
                    <h3 class="my-3 text-blue uppercase tracking-wide text-h4">Who we are</h3>
                    <p class="text-medium">Opened in 2006 as Vietam's first chiropactic clinic, we effectively treat pain without drugs or surgery</p>
                    <div class="my-2">
                        <button class="text-blue uppercase tracking-widest focus:outline-none text-medium font-semibold">read more</button>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 md:w-1/2 w-full bg-blue rounded-lg p-16 mb-4" data-aos="fade-up" data-aos-delay="600">
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
                    <button class="bg-blue py-2 px-6 rounded text-white bg-gradient-to-r from-orange-400 via-red-500 to-pink-500" @click="show = true">Book now</button>
                </div>
            </div>
        </div>
    </section>
    <section class="my-8" data-aos="fade-up">
        <h3 class="text-center text-blue text-h4 font-semibold">Our blog</h3>
        <div class="flex flex-wrap mt-3 lg:mx-32 md:mx-16 mx-3">
            <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                <div class="bg-white h-64 lg:mx-0 md:mx-0 mx-auto" style="width:90%"></div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                <div class="bg-white h-64 lg:mx-auto md:mx-auto mx-auto" style="width:90%"></div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                <div class="bg-white h-64 lg:ml-auto md:ml-auto mx-auto" style="width:90%"></div>
            </div>
        </div>
    </section>
    <modal :show="show"/>
    <button @click="handleLogin">test</button>
@endsection
