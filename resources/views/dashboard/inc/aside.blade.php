<aside class="bg-blue text-white flex flex-col justify-between" style="height: 100%">
    <div class="">
        <div class="ml-3">
            <img src="{{ asset('images/logo/logo3.png') }}" alt="logo" class="w-48 h-32">
        </div>
        <div class=" mt-6 ml-10">
            <a href="/dashboard" class="flex items-center text-body-2 {{ Request::is('dashboard') ? 'text-orange' : '' }}">
                <i class="ri-dashboard-fill mr-2 ri-fw"></i>
                Analytics
            </a>
        </div>
        <div class=" mt-8 ml-10">
            <a href="/dashboard/products" class="flex items-center text-body-2 {{ Request::is('dashboard/products') ? 'text-orange' : '' }}">
                <i class="ri-shopping-cart-2-line mr-2 ri-fw"></i>
                Cart
            </a>
        </div>
        <div class=" mt-8 ml-10">
            <a href="/dashboard/consultancy" class="flex items-center text-body-2 {{ Request::is('dashboard/consultancy') ? 'text-orange' : '' }}">
                <i class="ri-chat-1-line mr-2 ri-fw"></i>
                Consultancy
            </a>
        </div>
        {{-- <div class=" mt-8 ml-10">
            <a href="/dashboard/profile" class="flex items-center text-body-2 {{ Request::is('dashboard/profile') ? 'text-orange' : '' }}">
                <i class="ri-profile-line mr-2 ri-fw"></i>
                Your Profile
            </a>
        </div> --}}
        <div class=" mt-8 ml-10">
            <a href="/dashboard/settings" class="flex items-center text-body-2 {{ Request::is('dashboard/settings') ? 'text-orange' : '' }}">
                <i class="ri-settings-3-line mr-2 ri-fw"></i>
                Settings
            </a>
        </div>
        <div class=" mt-8 ml-10">
            <a href="#" class="flex items-center text-body-2" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                <i class="ri-logout-box-line mr-2 ri-fw"></i>
                Logout
            </a>
            <form action="{{ route('logout') }}" method="POST" id="logout" style="display: none">
                @csrf
            </form>
        </div>
    </div>
    {{-- <div class=" mb-5">
        <div class=" mt-3 ml-8">
            <a href="#" class="flex items-center text-body-2">
                <i class="ri-user-line mr-2 ri-fw"></i>
                {{ Auth::user()->name }}
            </a>
        </div>
    </div> --}}
</aside>
