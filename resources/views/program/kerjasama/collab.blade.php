<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="relative pt-28">
    <x-white-navigation />
        <div class="absolute w-full bg-biru-sth h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full max-w-[1280px] h-72 lg:h-[446px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[40px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/bhomepage-o.png') }}" alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extralight">
                    <p class="text-base sm:text-xl md:text-4xl lg:text-6xl font-bold">Kerja Sama</p>
                    <p class="text-3xl sm:text-3xl md:text-3xl lg:text-3xl italic">Center of Excellent Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mx-28 py-10 space-y-5 text-justify">
        <div class="grid grid-cols-4 gap-y-12 place-items-center">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-4 h-28 w-auto" src="{{ asset('assets/logo.png') }}" alt="">
                <p class="font-lota2 font-bold">Name Logo</p>
                <p class="font-lota2">Project Name</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-4 h-28 w-auto" src="{{ asset('assets/logo.png') }}" alt="">
                <p class="font-lota2 font-bold">Name Logo</p>
                <p class="font-lota2">Project Name</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-4 h-28 w-auto" src="{{ asset('assets/logo.png') }}" alt="">
                <p class="font-lota2 font-bold">Name Logo</p>
                <p class="font-lota2">Project Name</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-4 h-28 w-auto" src="{{ asset('assets/logo.png') }}" alt="">
                <p class="font-lota2 font-bold">Name Logo</p>
                <p class="font-lota2">Project Name</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-4 h-28 w-auto" src="{{ asset('assets/logo.png') }}" alt="">
                <p class="font-lota2 font-bold">Name Logo</p>
                <p class="font-lota2">Project Name</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="pb-4 h-28 w-auto" src="{{ asset('assets/logo.png') }}" alt="">
                <p class="font-lota2 font-bold">Name Logo</p>
                <p class="font-lota2">Project Name</p>
            </div>
        </div>

    </section>
    <x-footer></x-footer>

    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            // const bannerHeight = document.querySelector('section').offsetHeight;

            if (window.scrollY > 0) {
                // Saat user melewati banner section
                navbar.classList.add('bg-white', 'shadow-md', 'text-black');
                navbar.classList.remove('bg-transparent', 'text-white');
            } else {
                // Saat user berada di dalam banner section
                navbar.classList.add('bg-transparent', 'text-white');
                navbar.classList.remove('bg-white', 'shadow-md', 'text-black');
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