@extends('layouts.master')

@section('content')
    <div class="">
        
        @if(session('message'))
            <div class="text-black flex items-center bg-green-100 py-3 px-10">
                <div class="h-8 w-8 rounded-full flex items-center justify-center bg-green-500">
                    <i class="ri-check-line text-white"></i>
                </div>
                <span class="ml-4">{{ session('message')}}</span>
            </div>
            
        @endif
        <div class="flex flex-wrap">
            <div class="lg:w-2/4 md:w-2/4 sm:w-1/2 w-full lg:px-20 px-6  py-20 ">
                <h3 class="text-h3 font-bold text-black">Thank you for your interest in Fummedicare!</h3>
                <p class="text-medium  leading-26 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur porro minima, commodi mollitia, animi adipisci veritatis laboriosam.</p>

                <img src="{{ asset('images/hand.svg') }}" alt="" class="h-64 mx-auto mt-4">
            </div>
            <div class="lg:w-2/4 md:w-2/4 sm:w-1/2 w-full">
                <div class="bg-white ml-16 p-6 rounded-lg mt-16 shadow-lg " style="width:65%; height:65vh;">
                    <h4 class="mb-4">Send us a Message</h4>
                    <form action="/contact" method="post">
                        @csrf
                        <div class=" my-5 relative mx-3">
                            <input id="name" type="name" placeholder="Full name" class="text-medium  pt-4 pb-2 w-full pl-10 border-b border-gray focus:outline-none rounded-sm @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <div class="absolute top-0 left-0 ml-2" style="margin-top: .86rem">
                                <i class="ri-user-line ri-fw text-gray-100"></i>
                            </div>
                            @if($errors->has('name'))
                                <span class="text-red" role="alert">
                                    {{ $errors->first('name') }}
                                </span>
                            @endif
                        </div>
                        <div class=" my-5 relative mx-3">
                            <input id="email" type="email" placeholder="Email address" class="text-medium  pt-4 pb-2 w-full pl-10 border-b border-gray focus:outline-none rounded-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="absolute top-0 left-0 ml-2" style="margin-top: .86rem">
                                <i class="ri-mail-line ri-fw text-gray-100"></i>
                            </div>
                            @if($errors->has('email'))
                                <span class="text-red" role="alert">
                                    {{ $errors->first('email') }}
                                </span>
                            @endif
                        </div>

                        <div class=" my-5 relative mx-3">
                            <input type="text" placeholder="phone number" class="text-medium pt-4 pb-2 w-full pl-10 border-b border-gray focus:outline-none rounded-sm" name="phone_number" required autofocus>
                            <div class="absolute top-0 left-0 ml-2" style="margin-top: .86rem">
                                <i class="ri-phone-line ri-fw text-gray-100"></i>
                            </div>
                            @if($errors->has('phone_number'))
                                <span class="text-red" role="alert">
                                    {{ $errors->first('phone_number') }}
                                </span>
                            @endif
                        </div>
                        <div class=" my-5 relative mx-3">
                            <input type="text" placeholder="message" class="text-medium border-b border-gray pt-4 pb-2 w-full pl-10 focus:outline-none rounded-sm" name="message" autofocus>
                            <div class="absolute top-0 left-0 ml-2" style="margin-top: .86rem">
                                <i class="ri-message-line ri-fw text-gray-100"></i>
                            </div>
                            @if($errors->has('date'))
                                <span class="text-red" role="alert">
                                    {{ $errors->first('date') }}
                                </span>
                            @endif
                        </div>
                        <div class="mx-3 mt-6">
                            <button type="submit" class="bg-orange text-white py-3 px-4 w-full text-medium">submit</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="my-16"></div>
@endsection