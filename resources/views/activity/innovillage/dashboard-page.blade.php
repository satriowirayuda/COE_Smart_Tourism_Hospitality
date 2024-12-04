<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body class="bg-[#FFFFFF]">
    @include('activity.innovillage.banner')
    @include('activity.innovillage.dashboard')
    <x-footer></x-footer>

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