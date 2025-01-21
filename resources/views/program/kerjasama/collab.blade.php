<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="font-arial">

    <!-- BANNER -->
    <section class="relative pt-20 lg:pt-28">
    <x-white-navigation />
        <div class="absolute w-full bg-biru-sth h-40 lg:h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-[181px] md:[300px] lg:h-[350px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[30px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/bcollab.png') }}" alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center">
                    <p class="text-xl sm:text-xl md:text-4xl lg:text-6xl font-bold">Kerja Sama</p>
                    <p class="text-sm sm:text-lg md:text-2xl lg:text-4xl font-thin">Center of Excellence Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-5 md:mx-10 lg:mx-28 py-6 sm:py-8 lg:py-10 space-y-5 font-arial text-justify">

        <p class="pt-4 lg:pt-16 font-semibold text-base sm:text-2xl lg:text-3xl text-center">Mitra CoE Smart Tourism  & Hospitality</p>

        <div class="pt-0 lg:pt-14 grid grid-cols-3 sm:grid-cols-3 lg:grid-cols-5 gap-y-12 place-items-center">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/kedaireka.png') }}" alt="">
                <p class="font-bold text-sm sm:text-base lg:text-lg">Kedaireka</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">LOTUS dan EMB</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/mlotus/8.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">Bank BJB</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">LOTUS</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 lg:h-28 w-auto" src="{{ asset('assets/mlotus/5.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">Curaweda</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">LOTUS</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 lg:h-28 w-auto" src="{{ asset('assets/mlotus/4.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">GNCE</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">LOTUS</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/mlotus/10.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">CoESmart City</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">Project Name</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/logo.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">LOTUS</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">LOTUS</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/cube.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">Cube</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">Think Tank Tussle</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/mlotus/7.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">Nukaji</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">EMB</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/mlotus/6.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">Metalabs</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">LOTUS</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-2 sm:pb-3 lg:pb-4 h-20 sm:h-24 lg:h-28 w-auto" src="{{ asset('assets/mlotus/3.png') }}" alt="">
                <p class=" font-bold text-sm sm:text-base lg:text-lg">Keraton Kasepuhan Cirebon</p>
                <p class="font-bold text-[#5D5D5D] text-sm sm:text-base lg:text-lg">LOTUS dan EMB</p>
            </div>
        </div>

    </section>
    
    <section class="mx-5 md:mx-10 lg:mx-28 py-6 sm:py-8 lg:py-10 space-y-5 font-arial text-justify">
        <div class="border-t-[1px] border-[#A9A9A9]"></div>

        <div class="py-6 sm:py-8 lg:py-10 font-semibold lg:text-3xl text-center">
            <p>Scope Object</p>
            <p>COE Smart Tourism  & Hospitality</p>
        </div>

        <img src="{{ asset('assets/scop.png') }}" alt="">
        
    </section>

    <x-footer></x-footer>

    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            // const bannerHeight = document.querySelector('section').offsetHeight;

            if (window.scrollY > 0) {
                // Saat user melewati banner section
                navbar.classList.add('bg-white', 'shadow-md', 'px-28');
                navbar.classList.remove('text-white', 'mx-16', 'rounded-b-2xl');
            } else {
                // Saat user berada di dalam banner section
                navbar.classList.add('bg-white', 'mx-16', 'rounded-b-2xl');
                navbar.classList.remove('shadow-md', 'px-28');
            }
        });

        // Toggle mobile menu visibility
        const menuButton = document.getElementById('menuButton');
        const mobileMenu = document.getElementById('mobileMenu');

        document.addEventListener("DOMContentLoaded", function () {
            // Select all dropdown buttons and menus
            const dropdownButtons = document.querySelectorAll('.dropdownButton');
            const dropdownMenus = document.querySelectorAll('.dropdownMenu');

            // Toggle the visibility of the clicked dropdown menu
            dropdownButtons.forEach((button, index) => {
                button.addEventListener('click', (e) => {
                    e.stopPropagation();

                    // Close other dropdowns
                    dropdownMenus.forEach((menu, i) => {
                        if (i !== index) {
                            menu.classList.add('hidden');
                        }
                    });

                    // Toggle current dropdown
                    dropdownMenus[index].classList.toggle('hidden');
                });
            });
            
            // Close any open dropdown if clicked outside
            window.addEventListener('click', () => {
                dropdownMenus.forEach(menu => menu.classList.add('hidden'));
            });

            // Highlight active menu
            const currentPath = window.location.pathname; // Get the current URL path
            const links = document.querySelectorAll('.dropdown a, .md\\:flex > a'); // Select all links

            links.forEach(link => {
                if (link.href.includes(currentPath)) {
                    link.classList.add('text-[#F6A11F]', 'font-semibold'); // Add active styling
                } else {
                    link.classList.remove('text-[#F6A11F]', 'font-semibold'); // Remove active styling
                }
            });
        });

    </script>

</body>


</html>