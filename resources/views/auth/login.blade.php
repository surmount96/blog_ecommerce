@extends('layouts.app')

@section('content')
<div class="flex flex-wrap">
    <div class="lg:w-1/2 md:w-1/2 w-full lg:py-48 md:py-24 py-32 lg:px-24 md:px-20 px-10 " style="height:100vh">
        <div class="text-blue text-h4 font-bold mb-5 text-center">{{ __('Welcome, User') }}</div>
        <form method="POST" action="{{ route('login') }}" class="">
            @csrf
            <div>
                <div class="w-full mb-5 relative">
                    <input id="email" type="email" placeholder="Email Address" class="text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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

            <div class="w-full mb-5 relative">
                <input type="password" placeholder="*********" class="placeholder:text-medium placeholder:pt-6 text-medium bg-gray py-4 w-full pl-10 border-none focus:outline-none rounded-lg @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                <div class="absolute top-0 left-0 ml-4" style="margin-top: .65rem">
                    <i class="ri-lock-line ri-fw text-gray-100"></i>
                </div>
                <div class="absolute top-0 right-0 mr-4" style="margin-top: .65rem">
                    <i class="ri-eye-line ri-fw text-gray-100"></i>
                </div>
                @if($errors->has('password'))
                    <span class="text-red" role="alert">
                        {{ $errors->first('password') }}
                    </span>
                @endif
            </div>
            <p class="text-gray-dark mb-3 text-medium">
                Don't have an account?
                <a href="/register" class="text-blue underline">signup</a>
            </p>

            <button class="bg-orange text-white py-3 px-4 w-full text-medium" type="submit">login</button>
        </form>
    </div>

    <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex hidden" style="height:100vh">
        <img src="{{ asset('images/auth-doc.svg') }}" alt="" class="mt-5">
    </div>
</div>
@endsection
