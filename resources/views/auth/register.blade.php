@extends('layouts.app')

@section('content')
<div class="flex flex-wrap">
    <div class="lg:w-1/2 md:w-1/2 w-full bg-blue" style="height:100vh">
        <img src="{{ asset('images/auth-doc.svg') }}" alt="">
    </div>
    <div class="lg:w-1/2 md:w-1/2 w-full lg:py-20 md:py-24 px-20" style="height:100vh">
        <div class="text-blue text-h4 mb-5">{{ __('Welcome to registration') }}</div>
        <form method="POST" action="{{ route('login') }}" class="">
            @csrf
            <div class="shadow bg-white h-32 w-32 mb-4 cursor-pointer">

            </div>

            <div class="shadow bg-white h-32 w-32 mb-4 cursor-pointer">

            </div>
            {{-- <div>
                <div class="w-full mb-5">
                    <input id="email" type="email" placeholder="Email Address" class="text-medium bg-gray py-4 w-full px-3 border-none focus:outline-none rounded-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                    @if($errors->has('email'))
                        <span class="text-red" role="alert">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
            </div>

            <div>
                <div class="w-full mb-5">
                    <input id="email" type="email" placeholder="Email Address" class="text-medium bg-gray py-4 w-full px-3 border-none focus:outline-none rounded-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                    @if($errors->has('email'))
                        <span class="text-red" role="alert">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
            </div>

            <div>
                <div class="w-full mb-5">
                    <input id="email" type="email" placeholder="Email Address" class="text-medium bg-gray py-4 w-full px-3 border-none focus:outline-none rounded-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        
                    @if($errors->has('email'))
                        <span class="text-red" role="alert">
                            {{ $errors->first('email') }}
                        </span>
                    @endif
                </div>
            </div>

            <div class="w-full mb-5">
                <input type="password" placeholder="*********" class="text-medium bg-gray py-4 w-full px-3 border-none focus:outline-none rounded-lg @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
    
                @if($errors->has('password'))
                    <span class="text-red" role="alert">
                        {{ $errors->first('password') }}
                    </span>
                @endif
            </div> --}}

            <button class="bg-orange text-white py-3 px-4 w-full">Submit</button>
        </form>
    </div>
</div>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
