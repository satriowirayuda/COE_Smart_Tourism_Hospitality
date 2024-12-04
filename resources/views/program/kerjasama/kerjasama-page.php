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
    <x-navigation />
        <div class="absolute w-full bg-biru-sth h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full max-w-[1280px] h-72 lg:h-[446px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[40px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/bhomepage-o.png') }}" alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extralight">
                    <p class="text-base sm:text-xl md:text-4xl lg:text-6xl font-bold">Innovillage</p>
                    <p class="text-3xl sm:text-3xl md:text-3xl lg:text-3xl italic">Center of Excellent Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>

    </section>

    <section class="mx-[110px] pt-10 space-y-5 text-justify">
        <p class="font-semibold text-2xl">Title</p>
        <p class="font-light">Di dunia yang terus berubah, industri pariwisata dan perhotelan memerlukan inovasi yang cerdas dan progresif untuk memimpin jalan ke depan. Pusat Keunggulan (COE) Smart Tourism dan Hospitality hadir sebagai wahana bagi kolaborasi, eksperimen, dan pemikiran kreatif dalam menghadapi tantangan dan peluang di era digital ini.Di dunia yang terus berubah, industri pariwisata dan perhotelan memerlukan inovasi yang cerdas dan progresif untuk memimpin jalan ke depan. Pusat Keunggulan (COE) Smart Tourism dan Hospitality hadir sebagai wahana bagi kolaborasi, eksperimen, dan pemikiran kreatif dalam menghadapi tantangan dan peluang di era digital ini.</p>

        <p class="font-semibold text-2xl">Pengenalan</p>
        <p class="font-light">Di dunia yang terus berubah, industri pariwisata dan perhotelan memerlukan inovasi yang cerdas dan progresif untuk memimpin jalan ke depan. Pusat Keunggulan (COE) Smart Tourism dan Hospitality hadir sebagai wahana bagi kolaborasi, eksperimen, dan pemikiran kreatif dalam menghadapi tantangan dan peluang di era digital ini.Di dunia yang terus berubah, industri pariwisata dan perhotelan memerlukan inovasi yang cerdas dan progresif untuk memimpin jalan ke depan. Pusat Keunggulan (COE) Smart Tourism dan Hospitality hadir sebagai wahana bagi kolaborasi, eksperimen, dan pemikiran kreatif dalam menghadapi tantangan dan peluang di era digital ini.</p>
        <div class="border-t-[1px] border-black"></div>

    </section>

    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            const bannerHeight = document.querySelector('section').offsetHeight;

            if (window.scrollY > bannerHeight - 100) {
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

                    dropdownButtons.forEach(btn => btn.classList.remove('text-[#F6A11F]'))

                    dropdownMenus[index].classList.toggle('hidden');
                });
            });

            // Close any open dropdown if clicked outside
            window.addEventListener('click', () => {
                dropdownMenus.forEach(menu => menu.classList.add('hidden'));
            });
        });

    </script>
</body>


</html>