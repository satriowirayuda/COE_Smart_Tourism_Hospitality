<nav id="navbar" class="fixed top-0 left-0 right-0 z-20 mx-0 lg:mx-16 rounded-none lg:rounded-b-2xl bg-white px-8 lg:px-12 py-2 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo --> 
        <div class="flex items-center gap-2">
            <div class="h-10 lg:h-16 py-1">
                <img src="{{ asset('assets/logo_sth.svg') }}" alt="" class="h-full">
            </div>
            <div class="flex flex-col justify-center">
                <span class="text-[10px] sm:text-sm lg:text-base font-semibold">Center of Excellence</span>
                <span class="text-[10px] sm:text-sm lg:text-base font-semibold">Smart Tourism & Hospitality</span>
            </div>
        </div>

        <!-- Menu Links (hidden on mobile) -->
        <div class="hidden md:flex items-center space-x-6">
            <a href="/" class="pr-6 text-sm font-semibold hover:text-[#F6A11F] {{ request()->is('/') ? 'text-[#F6A11F]' : '' }}">
                Beranda
            </a>

            <!-- Dropdown Tentang Kami -->
            <div class="relative dropdown">
                <button class="dropdownButton flex items-center pr-6 text-sm font-semibold hover:text-[#F6A11F] 
                {{ request()->is('sejarah', 'anggota') ? 'text-[#F6A11F]' : '' }}">
                    Tentang Kami
                    <svg class="w-3 h-3 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="dropdownMenu absolute hidden w-36 bg-white text-black mt-2 rounded-xl shadow-lg text-xs">
                    <a href="/sejarah" class="block px-3 py-2 hover:bg-gray-200">Sejarah CoE STH</a>
                    <a href="/anggota" class="block px-3 py-2 hover:bg-gray-200">Anggota Tim</a>
                </div>
            </div>

            <!-- Dropdown Aktivitas -->
            <div class="relative dropdown">
                <button class="dropdownButton flex items-center pr-6 text-sm font-semibold hover:text-[#F6A11F] 
                {{ request()->is('berita/semua', 'risetdash', 'innovillagedash', 'jurnaldash', 'inovasidash', 'bisnisdash', 'pengmasdash') ? 'text-[#F6A11F]' : '' }}">
                    Aktivitas
                    <svg class="w-3 h-3 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="dropdownMenu absolute hidden w-44 bg-white text-black mt-2 rounded-xl shadow-lg text-xs">
                    <a href="/berita/semua" class="block px-3 py-2 hover:bg-gray-200">Berita</a>

                    <div class="relative group">
                        <button class="px-3 py-2 flex justify-between items-center hover:text-[#F6A11F] {{ request()->is('innovillagedash', 'jurnaldash') ? 'text-[#F6A11F]' : '' }}">
                            <a href="/risetdash">Riset dan Publikasi</a>
                        </button>
                        <div class="absolute left-full top-0 w-32 hidden group-hover:block bg-white text-black r mt-0 rounded-xl shadow-lg text-xs">
                        </div>
                    </div>

                    <a href="/inovasidash" class= "block px-3 py-2 hover:bg-gray-200">Inovasi</a>
                    <a href="/bisnisdash" class= "block px-3 py-2 hover:bg-gray-200">Bisnis</a>
                    <a href="/pengmasdash" class= "block px-3 py-2 hover:bg-gray-200">Pengabdian Masyarakat</a>
                </div>
            </div>

            <!-- Dropdown Program -->
            <div class="relative dropdown">
                <button class="dropdownButton flex items-center text-sm font-semibold hover:text-[#F6A11F] active:text-[#F6A11F] focus:text-[#F6A11F] {{ request()->is('magangdash', 'collabdash') ? 'text-[#F6A11F]' : '' }}">
                    Program
                    <svg class="w-3 h-3 inline ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div class="dropdownMenu absolute hidden w-36 bg-white text-black right-0 mt-2 rounded-xl shadow-lg text-xs">
                    <a href="/magangdash" class="block px-3 py-2 hover:bg-gray-200">MBKM dan Magang</a>
                    <a href="/collabdash" class="block px-3 py-2 hover:bg-gray-200">Kerja Sama</a>
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
