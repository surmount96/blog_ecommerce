@extends('layouts.master')

@section('content')
    <header class="flex flex-wrap lg:px-24 py-12 md:px-12 px-5" style="height: 70vh;">
        <div class="lg:w-1/2 md:w-1/2 sm:w-1/2 w-full ">
            <h3 class="font-bold text-h3 text-grayer mb-5">About the C.E.O</h3>
            <p class="text-medium text-grayer leading-33">
                My names Salako Oluwafunmilayo Grace.I graduated from Bowen university, Iwo with a bachelor of medicine and surgery in 2017
                I have been working proficiently as a medical doctor, i have also acquired a lot of skills and experience in the process. Currently working in the line of interest and will now want to serve as a source of help and adequately informing the general populace on issues bothering on the state of their health.
                In the same vein, i will also be  marketing important product of high quality at a very cheap price .Creating awareness about recent trends in health and human medicine will also be looked into.
                Thank You.
            </p>
            

            <div class="mt-6">
                <a href="/shop" class="bg-orange py-3 px-4 rounded text-medium text-white flex items-center justify-center">
                    Check out or mechandise
                    <i class="ri-arrow-right-line ri-fw text-white ml-3"></i>
                </a>
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