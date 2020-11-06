@if(request()->path() != 'shop')
    <nav class="flex relative py-5 items-center bg-blue justify-end text-white lg:px-20 md:px-16 px-10">
        <div class="absolute left-0 ml-8">
            <a href="/" class="">
                <img src="{{ asset('images/logo/logo3.png') }}" alt="logo" class="object-cover w-32 h-16">
            </a>
        </div>
        <ul class="lg:flex md:flex hidden text-medium">
            <li class="px-6"><a href="/shop">Shop</a></li>
            <li class="px-6"><a href="/blog">Blog</a></li>
            <li class="px-6"><a href="services">Service</a></li>
            <li class="px-6"><a href="/about">About</a></li>
            <li class="pl-6"><a href="/contact">Contact</a></li>
            @guest
            <li class="pl-6"><a href="/register" class="text-orange border border-orange hover:bg-orange hover:text-white text-medium py-2 px-6">Register</a></li>
            @endguest
        </ul>
        <ul class="lg:hidden md:hidden flex">
            <li class="cursor-pointer" @click="">
                <i class="ri-menu-line ri-2x"></i>
    {{--            <svg class=" w-10" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>--}}
            </li>
        </ul>
    </nav>

@endif
