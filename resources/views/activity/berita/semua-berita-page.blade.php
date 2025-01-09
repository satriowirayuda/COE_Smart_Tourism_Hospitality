<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#EEEEEE]">
    @include('activity.berita.banner')
    @include('activity.berita.semua')

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
    <x-footer></x-footer>

    
</body>
</html>