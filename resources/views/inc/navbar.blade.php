@if(request()->path() != 'shop')
    <nav class="flex relative py-5 items-center bg-blue justify-end text-white lg:px-20 md:px-16 px-10">
        <div class="absolute left-0 ml-8">
            <a href="/" class="">
                <img src="{{ asset('images/logo/logo3.png') }}" alt="logo" class="object-cover w-32 h-16">
            </a>
        </div>
        <div class="lg:flex md:flex hidden w-8/12 justify-between">
            <ul class="flex  text-medium">
                <li class="px-6"><a href="/shop">Shop</a></li>
                <li class="px-6"><a href="/blog">Blog</a></li>
                <li class="px-6"><a href="services">Services</a></li>
                {{-- <li class="px-6"><a href="/about">About</a></li> --}}
                <li class="pl-6"><a href="/contact">Contact</a></li>
               
            </ul>
            <ul class="lg:flex md:flex hidden text-medium">
                @guest
                    <li class="pl-6"><a href="/register" class="text-orange border border-orange hover:bg-orange hover:text-white text-medium py-2 px-6">Register</a></li>
                    <li class="pl-6"><a href="/login" class="text-white  text-medium py-2 px-6">Login</a></li>
                    @else
                    <li class="pl-6"><a href="/dashboard" class="text-orange border border-orange hover:bg-orange hover:text-white text-medium py-2 px-6">Back to dashboard</a></li>
                @endguest
            </ul>
        </div>
        <ul class="lg:hidden md:hidden flex">
            <li class="cursor-pointer" @click="mobileNav = !mobileNav">
                <i class="ri-menu-line ri-2x"></i>
    {{--            <svg class=" w-10" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>--}}
            </li>
        </ul>
        <app-navbar :data="mobileNav"/>
        
    </nav>

   
@endif
