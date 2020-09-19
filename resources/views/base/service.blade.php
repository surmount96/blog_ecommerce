@extends('layouts.master')

@section('content')
    <header class="bg-blue-deeper h-64 opacity-2 flex flex-col justify-center">
        <div class="">
            <h3 class="text-white text-center text-h3" style="letter-spacing: 6px">Services</h3>
        </div>
    </header>
    <div class="w-full my-3">
        {{-- <h2 class="text-center font-semibold text-h4 text-green">
            Our services
        </h2> --}}
    </div>
    <div class="flex flex-wrap my-4">
        <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
            <div class="mx-auto shadow-md h-64 rounded-lg p-2" style="width:80%">
                <div class="h-40 bg-blue">
                </div>
                <h6 class="text-medium m-2">Hello world, come right here.</h6>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mt-40">
            <div class="mx-auto shadow-md h-64 rounded-lg p-2" style="width:80%">
                <div class="h-40 bg-warning">
                </div>
                <h6 class="text-medium m-2">Hello world, come right here.</h6>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mt-64">
            <div class="mx-auto shadow-md h-64 rounded-lg p-2" style="width:80%">
                <div class="h-40 bg-green">
                </div>
                <h6 class="text-medium m-2">Hello world, come right here.</h6>
                <div class="">
                    button.bg-blue.
                </div>
            </div>
        </div>
    </div>
@endsection
