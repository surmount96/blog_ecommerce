@extends('layouts.master')

@section('content')
    <header class="flex flex-wrap lg:px-24 py-12 md:px-12 px-5" style="height: 70vh;">
        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full ">
            <h3 class="font-bold text-h3 text-grayer mb-5">About Fummedicare</h3>
            <p class="text-medium text-grayer leading-33">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur porro minima, commodi mollitia, animi adipisci veritatis laboriosam.
                Lorem ipsum dolor sit amet consectetur 
            </p>
            <div class="mt-6">
                <button class="bg-orange py-3 px-4 rounded text-medium text-white flex items-center">
                    Check out or mechandise
                    <i class="ri-arrow-right-line ri-fw text-white ml-3"></i>
                </button>
            </div>
        </div>
        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full" >
            <div class="my-4 ml-10">
                <img src="{{ asset('images/lady.jpg') }} " alt="team" class=" h-64" style="width:70%;object-fit:cover;">
            </div>
        </div>
    </header>
@endsection


{{-- style="background-image: url('{{ asset('images/lady.jpg') }}'); background-size:cover; background-position:center;background-repeat:no-repeat;height: 75vh;filter:grayscale(2)" --}}