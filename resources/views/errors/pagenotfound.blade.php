@extends('layouts.master')

@section('content')
    <div class="flex flex-wrap" style="height:80vh">
        <div class="lg:w-1/2 md:w-1/2 w-full mb-4 lg:py-16 lg:px-12 md:px-12 px-5 md:py-20 py-6">
            <h3 class="font-bold text-h4 ">Page Not found...</h3>
            <p class="text-body-2 my-4">We're unable to find the pagee you are looking for</p>
            <a href="/dashboard" class="flex items-center w-40 rounded text-medium bg-blue text-white py-2 px-4">
                <i class="ri-arrow-left-fill mr-2 ri-fw"></i>
                Back to Home
            </a>
        </div>
        <div class="lg:w-1/2 md:w-1/2 w-full lg:flex md:flex hidden mb-4">
            <div class=" shadow-lg rounded-full flex items-center justify-center bg-gray" style="width:25rem; height:25rem">
                <img src="/images/404.svg" alt="" style="width:80%;">
            </div>
        </div>
    </div>
@endsection