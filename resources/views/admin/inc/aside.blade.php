<aside class="bg-blue text-white flex flex-col justify-between" style="height: 100%">
    <div class="">
        <div class="ml-3">
            <img src="{{ asset('images/logo/logo3.png') }}" alt="logo" class="object-fit w-46 h-32" style="object-fit: cover">
        </div>
        <div class=" mt-6 ml-10">
            <a href="/admin/dashboard" class="flex items-center text-body-2 {{ Request::is('admin/dashboard') ? 'text-orange' : '' }}">
                <i class="ri-dashboard-fill mr-2 ri-fw"></i>
                Analytics
            </a>
        </div>
        <div class=" mt-8 ml-10">
            <a href="/admin/products" class="flex items-center text-body-2 {{ Request::is('admin/products') ? 'text-orange' : '' }}">
                <i class="ri-order-play-line mr-2 ri-fw"></i>
                Manage Order
            </a>
        </div>
        <div class=" mt-8 ml-10">
            <a href="/admin/consultancy" class="flex items-center text-body-2 {{ Request::is('admin/consultancy') ? 'text-orange' : '' }}">
                <i class="ri-chat-1-line mr-2 ri-fw"></i>
                Consultancy
            </a>
        </div>
     
        <div class=" mt-8 ml-10">
            <a href="/admin/blog" class="flex items-center text-body-2 {{ Request::is('admin/blog') ? 'text-orange' : '' }}">
                <i class="ri-chat-poll-line mr-2 ri-fw"></i>
                Blog
            </a>
        </div>

        <div class=" mt-8 ml-10">
            <a href="/admin/settings" class="flex items-center text-body-2 {{ Request::is('admin/settings') ? 'text-orange' : '' }}">
                <i class="ri-settings-3-line mr-2 ri-fw"></i>
                Users Setting
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
