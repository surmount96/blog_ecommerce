@extends('layouts.master')

@section('title','Welcome to Doctor on call')

@section('content')
    <vodal :show="show" animation="rotate" :width="450" :height="500" @hide="show = false">
        <div class="p-5">
            <h3 class="font-bold text-blue text-large">Please provide your details below</h3>
            <p class="my-2 text-medium"><span class="font-bold">NOTE</span>: This information will be used to create an account for you inorder to have a section with the Doctor.</p>
        </div>
        <form action="">
            <div class=" my-3 lg:mx-5 md:mx-5 mx-4 relative">
                <input id="name" type="name" placeholder="Full name" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                    <i class="ri-user-line ri-fw text-gray-100"></i>
                </div>
                @if($errors->has('name'))
                    <span class="text-red" role="alert">
                        {{ $errors->first('name') }}
                    </span>
                @endif
            </div>
            <div class=" my-3 lg:mx-5 md:mx-5 mx-4 relative">
                <input id="email" type="email" placeholder="Email address" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm @error('email') is-invalid @enderror" email="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                    <i class="ri-mail-line ri-fw text-gray-100"></i>
                </div>
                @if($errors->has('email'))
                    <span class="text-red" role="alert">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>
            <div class="flex flex-wrap my-3 lg:mx-5 md:mx-5 mx-4">
                <div class="lg:w-1/2 md:w-1/2 w-full mb-4 relative">
                    <div class="mr-2">
                        <input type="text" placeholder="phone number" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm" name="phone_number" required autofocus>
                        <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                            <i class="ri-phone-line ri-fw text-gray-100"></i>
                        </div>
                        @if($errors->has('phone_number'))
                            <span class="text-red" role="alert">
                                {{ $errors->first('phone_number') }}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full mb-4 relative">
                    <div class="">
                        <input type="text" placeholder="Blood group" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm @error('blood_group') is-invalid @enderror" blood_group="blood_group" value="{{ old('blood_group') }}" required autocomplete="blood_group" autofocus>
                        <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                            <i class="ri-user-line ri-fw text-gray-100"></i>
                        </div>
                        @if($errors->has('email'))
                            <span class="text-red" role="alert">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            <div class=" my-3 lg:mx-5 md:mx-5 mx-4 relative">
                <input id="date" type="date" placeholder="Date" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm" name="date" required autocomplete="date" autofocus>
                <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                    <i class="ri-calendar-line ri-fw text-gray-100"></i>
                </div>
                @if($errors->has('date'))
                    <span class="text-red" role="alert">
                        {{ $errors->first('date') }}
                    </span>
                @endif
            </div>
            <div class="mx-5">
                <button type="submit" class="bg-orange text-white py-3 px-4 w-full text-medium">submit</button>
            </div>
            
        </form>
    </vodal>
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
    
@endsection
