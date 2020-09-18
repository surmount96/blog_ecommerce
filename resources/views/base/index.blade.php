@extends('layouts.master')

@section('title','Welcome to Doctor on call')

@section('content')
    <header class="flex flex-wrap bg-blue-base lg:px-20 md:px-16 px-10 height">
        <div class="lg:w-1/2 md:w-1/2 w-full lg:py-24 md:py-10 py-10">
            <h3 class="lg:text-h3 md:text-h3 text-h4 text-blue font-bold" style="width:80%">Virtual Health care for your family’s health</h3>
            <div class="mt-10">
                <button class="bg-blue text-white rounded-full py-4 text-medium px-8" @click="show = true">Book an appointment</button>
            </div>
        </div>
        <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex lg:py-20 hidden">
            <img src="{{ asset('images/front.svg') }}" alt="header-bg">
        </div>
    </header>
    <section class="lg:mx-32 md:mx-16 mx-3 lg:-mt-16 md:-mt-16  mb-10">
        <div class="flex flex-wrap">
            <div class="lg:w-1/2 md:w-1/2 w-full bg-white rounded-lg p-16 shadow mb-4">
                <p class="pl-2 py-1 bg-blue-base text-blue text-medium">Meet our awesome community</p>
                <div class="ml-2">
                    <h3 class="my-3 text-blue uppercase tracking-wide text-h4">Who we are</h3>
                    <p class="text-medium">Opened in 2006 as Vietam's first chiropactic clinic, we effectively treat pain without drugs or surgery</p>
                    <div class="my-2">
                        <button class="text-blue uppercase tracking-widest focus:outline-none text-medium font-semibold">read more</button>
                    </div>
                </div>
            </div>
            <div class="lg:w-1/2 md:w-1/2 w-full bg-blue rounded-lg p-16 mb-4">
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
    <section class="lg:mx-32 md:mx-16 mx-3 -mt-20 mb-10 ">
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
                    <p class="text-blue">29/09/2020</p>
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
                    <button class="bg-blue py-2 px-6 rounded text-white bg-gradient-to-r from-orange-400 via-red-500 to-pink-500">Book now</button>
                </div>
            </div>
        </div>
    </section>
    <section class="my-8">
        <h3 class="text-center text-blue text-h4 font-semibold">Our blog</h3>
        <div class="flex flex-wrap mt-3 lg:mx-32 md:mx-16 mx-3">
            <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                <div class="bg-gray h-32 lg:mx-0 md:mx-0 mx-auto" style="width:90%" ></div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                <div class="bg-gray h-32 lg:mx-auto md:mx-auto mx-auto" style="width:90%"></div>
            </div>
            <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
                <div class="bg-gray h-32 lg:ml-auto md:ml-auto mx-auto" style="width:90%"></div>
            </div>
        </div>
    </section>
    <vodal :show="show" animation="rotate" :width="600" :height="550" @hide="show = false">
        <div class="p-5">
            <h3 class="font-bold text-blue text-large">Please provide your details below</h3>
            <p class="my-2 text-medium"><span class="font-bold">NOTE</span>: This information will be used to create an account for you inorder to have a section with the Doctor.</p>
        </div>
    </vodal>
@endsection
