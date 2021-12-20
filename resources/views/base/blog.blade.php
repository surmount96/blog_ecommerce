@extends('layouts.master')

@section('content')
@if($latest || $oldest || $random)
    <div class="flex flex-wrap lg:mx-12 md:mx-10 mx-2 my-3">
        <div class="lg:w-3/5 md:w-3/5 w-full mb-4">
            <div class="mb-3">
                <iframe src="https://www.youtube.com/embed/eyIEQYR79w4?autoplay=1&mute=1" class="w-full rounded-sm" title="Iframe Example" style="min-height: 55vh"></iframe>
            </div>
            <div class="bg-gray p-3">
                <h3 class="font-bold text-body-2">{{ $latest->title }}</h3>
                <p class="text-medium font-light mb-3">
                    {{ $latest->body }}
                </p>
                <a href="blog/{{ $latest->slug }}" class="text-small flex items-center" style="letter-spacing:2px">
                    READ MORE
                    <span class="ml-1 text-medium">&#187;</span>
                </a>
            </div>

            <div class="mb-4 shadow-lg bg-white rounded-md border-t border-gray p-6 mt-10">
                <div class="bg-blue text-white px-6 py-2 mb-3">
                    <h4 class="uppercase">oldest post</h4>
                </div>

                <div class="flex flex-wrap ">
                    @foreach($oldest as $post)
                    <div class="lg:w-1/2 md:w-1/2 w-full mb-4" >
                        <div class="bg-gray flex p-4 mr-3">
                            <img src="{{ asset('storage/photo/'.$post->image) }}" alt="img" class="w-20">
                            <div class="ml-4">
                                <a href="blog/{{ $post->slug }}" class="font-bold text-body-2">{{ $post->title }}</a>
                                <div class="flex flex-wrap items-center justify-between">
                                    <p class="text-small">
                                        {{ $post->created_at->diffForHumans() }}
                                    </p>
                                    |
                                    <a href="" class="text-small">
                                        Leave a comment
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
            
        </div>
        <div class="lg:w-2/5 md:w-2/5 w-full mb-4">
            <div class="lg:w-9/12 md:w-7/12 w-full bg-white shadow-md mx-auto pt-4" >
                <div class="bg-blue text-white px-6 py-2 mx-5 ">
                    <h4>RECENT POST</h4>
                </div>
                @foreach($random as $post)
                <div class="flex flex-wrap px-6 py-2">
                    <div class="lg:w-1/3 md:w-1/3 w-full">
                        <img src="{{ asset('storage/photo/'.$post->image) }}" alt="img" class="w-20">
                    </div>
                    <div class="lg:w-2/3 md:w-2/3 w-full">
                        <a href="blog/{{ $post->slug }}" class=" text-body-2 text-red ">{{ $post->title }}</a>
                    </div>
                </div>
                @endforeach
                <div class="bg-gray p-5">
                    <h3 class="font-bold text-h4">Stay informed</h3>
                    <p class="text-medium font-light">
                        ipsum dolor sit amet consectetur adipisicing elit. Et culpa sint optio sit qui exercitationem repellat dignissimos? Voluptatem rerum quaerat suscipit consequatur 
                    </p>
                    <div class="mt-6">
                        <button type="submit" class="bg-orange text-white py-3 px-4 w-full text-medium">submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- new section --}}
    <div class="flex flew-wrap lg:mx-12 md:mx-10 mx-2 mt-5">
        <div class="lg:w-3/5 md:w-3/5 sm:w-1/2  w-full mb-4">
            
            
        </div>
        {{-- <div class="lg:w-2/5 md:w-2/5 sm:w-1/2 w-full mb-4">
            <div class="bg-white shadow-md mx-auto" style="width:65%">
                
            </div>    
        </div> --}}
    </div>
    @endif
@endsection