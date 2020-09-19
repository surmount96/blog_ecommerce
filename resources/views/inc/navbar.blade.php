<nav class="flex py-2 items-center justify-between bg-blue-base lg:px-20 md:px-16 px-10">
    <div class="">
        <a href="/">
            <img src="{{ asset('images/logo/logo2.jpeg') }}" alt="logo" class="w-16">
        </a>
    </div>
    <ul class="lg:flex md:flex hidden text-body-2">
        <li class="px-6"><a href="#">Shop</a></li>
        <li class="px-6"><a href="/blog">Blog</a></li>
        <li class="px-6"><a href="services">Service</a></li>
        <li class="px-6"><a href="/about">About</a></li>
        <li class="pl-6"><a href="/contact">Contact</a></li>
        <li class="pl-6"><a href="/register" class="bg-orange text-medium text-white py-3 px-10">Register</a></li>
    </ul>
    <ul class="lg:hidden md:hidden flex">
        <li class="cursor-pointer" @click="">
            <i class="ri-menu-line ri-2x"></i>
{{--            <svg class=" w-10" fill="none"  stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M4 6h16M4 12h16M4 18h16"></path></svg>--}}
        </li>
    </ul>
</nav>
