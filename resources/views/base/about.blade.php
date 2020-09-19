@extends('layouts.master')

@section('content')
    <header class="flex flex-wrap">
        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full bg-blue p-10">
            <h3 class="font-bold text-h3 text-white mb-3">About Fummedicare</h3>
            <p class="text-medium text-white">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur porro minima, commodi mollitia, animi adipisci veritatis laboriosam.
                Lorem ipsum dolor sit amet consectetur 
            </p>
            <div class="my-4">
                <img src="{{ asset('images/cancer.jpg') }} " alt="team" class="w-64 h-48">
            </div>
            <div class="mt-4">
                <button class="bg-orange py-3 px-3 text-medium text-white flex items-center">
                    Check out or mechandise
                    <i class="ri-arrow-right-line ri-fw text-white ml-3"></i>
                </button>
            </div>
        </div>
        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full" style="background-image: url('{{ asset('images/lady.jpg') }}'); background-size:cover; background-position:center;background-repeat:no-repeat;height: 75vh;filter:grayscale(2)">
        </div>
    </header>
@endsection