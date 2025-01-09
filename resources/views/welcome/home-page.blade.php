<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Website</title>
    @vite('resources/css/app.css')
</head>

<body>
    @include('welcome.bannervid')
    @include('welcome.profil-ketua')
    @include('welcome.project')
    @include('welcome.news')

    <x-footer />

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
                navbar.classList.remove('bg-white', 'shadow-md');
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
