<nav class="bg-white py-3 border-b border-gray px-2 flex justify-between items-center">
    <ul>
        <li class="ml-4 relative">
            <input type="search" placeholder="search" class="py-2 focus:outline-none px-6 border border-gray rounded-full text-medium w-64">
            <div class="absolute top-0 right-0 mt-2 mr-5">
                <i class="ri-mic-2-line text-gray-darker text-medium ri-fw"></i>
            </div>
        </li>
    </ul>
    <ul class="flex items-center">
        
        <li class="mr-5">
            <div class="bg-gray h-10 w-10 rounded-full flex items-center justify-center">
                <i class="ri-user-line text-h4  ri-fw"></i>
            </div>
        </li>
        <li class="mr-4 text-gray-darker flex items-center justify-center">
            <span class="text-medium" style="letter-spacing: 1px">{{ Auth::user()->name }}</span>
            <i class="ri-arrow-drop-down-line text-h4  ri-fw"></i>
        </li>
    </ul>
</nav>
