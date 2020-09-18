@extends('layouts.app')

@section('content')
<div class="flex flex-wrap">
    <div class="lg:w-1/2 md:w-1/2 w-full lg:py-40 md:py-24 px-20 py-32 lg:px-24 md:px-20 px-10 " style="height:100vh">
        <div class="text-blue text-h3 font-semibold text-center">{{ __('Create an account') }}</div>
        <p class="text-gray-dark mb-5 text-medium text-center">
            Already have an account?
            <a href="/login" class="text-blue underline">signin</a>
         </p>
        <form method="POST" action="{{ route('register') }}" class="">
            @csrf
            <div class="flex flex-wrap">
                <div class="lg:w-1/2 md:w-1/2 w-full mb-4 relative">
                    <div class="mr-2">
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
                    
                </div>
                <div class="lg:w-1/2 md:w-1/2 w-full mb-4 relative">
                    <div class="mr-2">
                        <input id="email" type="email" placeholder="Email Address" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="absolute top-0 left-0 ml-4" style="margin-top: .86rem">
                            <i class="ri-mail-line ri-fw text-gray-100"></i>
                        </div>
                        @if($errors->has('email'))
                            <span class="text-red" role="alert">
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                    
                </div>
            </div>

            <div class="w-full mb-5 relative">
                <div class="mr-2">
                    <input type="password" placeholder="*********" class="placeholder:text-medium placeholder:pt-6 text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-lg @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                    <div class="absolute top-0 left-0 ml-4" style="margin-top: .65rem">
                        <i class="ri-lock-line ri-fw text-gray-100"></i>
                    </div>
                    <div class="absolute top-0 right-0 mr-4" style="margin-top: .65rem">
                        <i class="ri-eye-off-line ri-fw text-gray-100"></i>
                    </div>
                    @if($errors->has('password'))
                        <span class="text-red" role="alert">
                            {{ $errors->first('password') }}
                        </span>
                    @endif
                </div>
            </div>
            <div class="w-full mb-5 flex ">
               
               <div class="">
                    <input type="checkbox" name="password" requiredautofocus>
               </div>
               <div class="text-medium ml-3">
                   <p>I've read and agree with Terms of Service and our Privacy policy</p>
               </div>
                    
                
            </div>

            <button type="submit" class="bg-orange text-white py-3 px-4 w-full">Register</button>
        </form>
    </div>
    <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex hidden" style="height:100vh">
        <img src="{{ asset('images/auth-doc.svg') }}" alt="">
    </div>
</div>

@endsection
