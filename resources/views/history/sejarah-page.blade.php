<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

@include('history.banner')
@include('history.sejarah')
@include('history.visi-misi')
<x-footer></x-footer>

    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            // const bannerHeight = document.querySelector('section').offsetHeight;

            if (window.scrollY > 0) {
            // Jika posisi scroll lebih dari 0, ubah gaya navbar
                navbar.classList.add('bg-white', 'shadow-md', 'text-black', 'px-28', 'mx-0', 'rounded-none');
                navbar.classList.remove('text-white', 'rounded-b-2xl', 'mx-16', 'px-12');
            } else {
            // Jika posisi scroll di atas (0), kembalikan gaya asli
                navbar.classList.add('bg-white', 'text-black', 'rounded-b-2xl', 'mx-16', 'px-12');
                navbar.classList.remove('shadow-md', 'px-0', 'mx-0', 'rounded-none');
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