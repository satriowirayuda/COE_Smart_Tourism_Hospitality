<nav id="navbar" class="fixed top-0 left-0 right-0 z-20 w-full bg-transparent px-28 py-2 transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="h-[3.5rem] lg:h-[4rem] py-1">
                <img src="{{ asset('assets/logo_sth.svg') }}" alt="" class="h-full">
            </div>
            <div class="flex flex-col justify-center font-lota1">
                <span class="text-base font-semibold">Center of Excellence</span>
                <span class="text-base font-semibold">Smart Tourism & Hotpitality</span>
            </div>
        </div>

        <!-- Menu Links (hidden on mobile) -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="/" class="pr-6 text-sm hover:text-[#F6A11F] {{ request()->is('/') ? 'text-[#F6A11F] font-semibold' : '' }}">
                Beranda
            </a>

            <!-- Dropdown Tentang Kami -->
            <div class="relative dropdown">
                <button class="dropdownButton flex items-center pr-6 text-sm font-semibold hover:text-[#F6A11F] active:text-[#F6A11F] focus:text-[#F6A11F] {{ request()->is('sejarah', 'anggota') ? 'text-[#F6A11F]' : '' }}">
                    Tentang Kami
                    <svg class="w-3 h-3 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="dropdownMenu absolute hidden bg-white text-black right-0 mt-2 rounded shadow-lg">
                    <a href="/sejarah" class="block px-6 py-2 hover:bg-gray-200">Sejarah CoE STH</a>
                    <a href="/anggota" class="block px-6 py-2 hover:bg-gray-200">Anggota Tim</a>
                </div>
            </div>

            <!-- Dropdown Aktivitas -->
            <div class="relative dropdown">
                <button class="dropdownButton flex items-center pr-6 text-sm font-semibold hover:text-[#F6A11F] active:text-[#F6A11F] focus:text-[#F6A11F]">
                    Aktivitas
                    <svg class="w-3 h-3 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="dropdownMenu absolute hidden bg-white text-black right-0 mt-2 rounded shadow-lg">
                    <a href="/berita/semua" class="block px-6 py-2 hover:bg-gray-200">Berita</a>
                    <a href="/risetdash" class="block px-6 py-2 hover:bg-gray-200">Riset dan Publikasi</a>
                    <a href="/innovillage/dashboard" class="block px-6 py-2 hover:bg-gray-200">Innovasi</a>
                    <a href="#" class="block px-6 py-2 hover:bg-gray-200">Bisnis</a>
                </div>
            </div>

            <!-- Dropdown Program -->
            <div class="relative dropdown">
                <button class="dropdownButton flex items-center text-sm font-semibold hover:text-[#F6A11F] focus:outline-none">
                    Program
                    <svg class="w-3 h-3 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="dropdownMenu absolute hidden bg-white text-black right-0 mt-2 rounded shadow-lg">
                    <a href="/magangdash" class="block px-6 py-2 hover:bg-gray-200">MBKM dan Magang</a>
                    <a href="/kerjasamadash" class="block px-6 py-2 hover:bg-gray-200">kerja Sama</a>
                </div>
            </div>

        </div>

        <!-- Hamburger Icon (visible on mobile) -->
        <button id="menuButton" class="text-white md:hidden focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
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
