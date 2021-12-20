@extends('layouts.master')

@section('content')
<section class="lg:ml-24 lg:mr-16 md:mx-8 mx-5 mt-6">
    <div class="flex flex-col items-center justify-center" style="min-height: 60vh">
        <h3 class="text-h1 font-semibold text-black mb-3">Where work happens</h3>
        <p>Whatever work you do, you can use Fummedicare for your business.</p>
        <div class="flex flex-wrap mt-5">
            <button class="bg-blue text-white py-3 text-medium px-8 my-5">Discover</button>
            <a href="login" class="border border-blue text-blue py-3 text-medium px-8 my-5 ml-3">Try for Free</a>
        </div>
    </div>
    <div class="flex flex-wrap mb-5">
        <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
            <div class="bg-white shadow border border-gray-100 p-4 mx-auto" style="width:85%">
                <div class="mb-3">
                    <i class="ri-psychotherapy-line text-h3"></i>
                </div>  
                <h3 class="font-semibold">Medical consultation</h3>
                <p class="text-medium mt-3 text-gray-3000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti maxime, temporibus ratione repudiandae placeat assumenda sint optio, ad impedit u</p>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
            <div class="bg-white shadow border border-gray-100 p-4 mx-auto" style="width:85%">
                <div class="mb-3">
                    <i class="ri-shopping-cart-line text-h3"></i>
                </div>
                <h3 class="font-semibold">Ecommerce</h3>
                <p class="text-medium mt-3 text-gray-3000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti maxime, temporibus ratione repudiandae placeat assumenda sint optio, ad impedit u</p>
            </div>
        </div>
        <div class="lg:w-1/3 md:w-1/3 sm:w-1/2 w-full mb-4">
            <div class="bg-white shadow border border-gray-100 p-4 mx-auto" style="width:85%">
                <div class="mb-3">
                    <i class="ri-git-repository-line text-h3"></i>
                </div>
                <h3 class="font-semibold">Blog</h3>
                <p class="text-medium mt-3 text-gray-3000">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corrupti maxime, temporibus ratione repudiandae placeat assumenda sint optio, ad impedit u</p>
            </div>
        </div>
    </div>
</section>
@endsection
