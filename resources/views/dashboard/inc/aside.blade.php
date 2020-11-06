<aside class="bg-blue text-white flex flex-col justify-between" style="height: 100%">
    <div class="">
        <div class="ml-3 flex items-center justify-between">
            <img src="{{ asset('images/logo/logo3.png') }}" alt="logo" class="w-32 h-32 object-cover transition" :class="{ 'opacity-0': hideText, 'opacity-100':!hideText }">
            <div class="cursor-pointer" @click="hideText = !hideText" :class="{ '-ml-10 z-50 mt-4': hideText }">
                <i class="ri-menu-line mr-4 text-h4 mt-6 ri-fw" :class="{ 'opacity-0': hideText, 'opacity-100 block':!hideText }"></i>
                <i class="ri-close-line mr-8 text-h4 mt-6 ri-fw" :class="{ 'opacity-100': hideText, 'opacity-0':!hideText }"></i>
            </div>
        </div>
        <div class=" mt-6 transition" :class="{ 'ml-5 mt-4': hideText, 'ml-10': !hideText }">
            <a href="/dashboard" class="flex items-center text-body-2 {{ Request::is('dashboard') ? 'text-orange' : '' }}">
                <i class="ri-dashboard-fill mr-2 ri-fw"></i>
                <span :class="{ 'opacity-0': hideText }" class="transition">
                    Analytics
                </span> 
            </a>
        </div>
        <div class=" mt-8 transition " :class="{ 'ml-5 mt-4': hideText, 'ml-10': !hideText }">
            <a href="/dashboard/products" class="flex items-center text-body-2 {{ Request::is('dashboard/products') ? 'text-orange' : '' }}">
                <i class="ri-order-play-line mr-2 ri-fw"></i>
                
                <span :class="{ 'opacity-0': hideText,'opacity-100':!hideText }" class="transition">
                    Order
                </span> 
            </a>
        </div>
        <div class=" mt-8 transition " :class="{ 'ml-5 mt-4': hideText, 'ml-10': !hideText }">
            <a href="/dashboard/consultancy" class="flex items-center text-body-2 {{ Request::is('dashboard/consultancy') ? 'text-orange' : '' }}">
                <i class="ri-chat-1-line mr-2 ri-fw"></i>
                
                <span :class="{ 'opacity-0': hideText, 'opacity-100':!hideText}" class="transition">
                    Consultancy
                </span> 
            </a>
        </div>
        {{-- <div class=" mt-8 transition " :class="{ 'ml-5 mt-4': hideText, 'ml-10': !hideText }">
            <a href="/dashboard/profile" class="flex items-center text-body-2 {{ Request::is('dashboard/profile') ? 'text-orange' : '' }}">
                <i class="ri-profile-line mr-2 ri-fw"></i>
                Your Profile
            </a>
        </div> --}}
        <div class=" mt-8 transition " :class="{ 'ml-5 mt-4': hideText, 'ml-10': !hideText }">
            <a href="/dashboard/settings" class="flex items-center text-body-2 {{ Request::is('dashboard/settings') ? 'text-orange' : '' }}">
                <i class="ri-settings-3-line mr-2 ri-fw"></i>
                
                <span :class="{ 'opacity-0': hideText, 'opacity-100':!hideText}" class="transition">
                    Settings
                </span> 
            </a>
        </div>
        <div class=" mt-8 transition " :class="{ 'ml-5 mt-4': hideText, 'ml-10': !hideText }">
            <a href="#" class="flex items-center text-body-2" onclick="event.preventDefault(); document.getElementById('logout').submit();">
                <i class="ri-logout-box-line mr-2 ri-fw"></i>
                
                <span :class="{ 'opacity-0': hideText, 'opacity-100':!hideText}" class="transition">
                    Logout
                </span> 
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
