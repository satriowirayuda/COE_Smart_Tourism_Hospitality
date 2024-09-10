<nav id="navbar" class="fixed top-0 left-0 right-0 z-20 w-full bg-transparent p-4 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            {{-- <div class="h-[3.5rem] lg:h-[4rem] py-1">
                <img src="/lingian-logo.png" alt="" class="h-full">
            </div> --}}
            <div class="flex flex-col justify-center">
                <span class="text-lg">Center of Excellence</span>
                <span class="text-xs font-bold">Smart Tourism & Hotpitality</span>
            </div>
        </div>

        <!-- Menu Links (hidden on mobile) -->
        <div class="hidden md:flex items-center space-x-10">
            <a href="#" class="text-gray-300 hover:text-orange-500 ">Beranda</a>

            <div class="relative">
                <button id="dropdownButton" class="text-gray-300 px-8 hover:text-orange-500 focus:outline-none">
                    Tentang Kami
                    <svg class="w-5 h-5 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <!-- Dropdown Content -->
                <div id="dropdownMenu" class="absolute hidden bg-white text-black right-0 mt-2 rounded shadow-lg">
                    <a href="/sejarah" class="block px-6 py-2 hover:bg-gray-200">Sejarah CoE STH</a>
                    <a href="/anggota" class="block px-6 py-2 hover:bg-gray-200">Anggota Tim</a>
                </div>
            </div>
        </div>

        <!-- Hamburger Icon (visible on mobile) -->
        <button id="menuButton" class="text-white md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>
    </div>

    <!-- Mobile Menu (hidden by default) -->
    <div id="mobileMenu" class="hidden md:hidden bg-gray-700 text-white space-y-2 px-4 py-2">
        <a href="#" class="block">Beranda</a>
        <a href="#" class="block">Tentang Kami</a>
        <a href="#" class="block">Aktivitas</a>
        <a href="#" class="block">Program</a>
    </div>
</nav>
