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

            <button class="bg-orange text-white py-3 px-4 w-full" type="submit">login</button>
        </form>
    </div>

    <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex hidden" style="height:100vh">
        <img src="{{ asset('images/auth-doc.svg') }}" alt="" class="mt-5">
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
