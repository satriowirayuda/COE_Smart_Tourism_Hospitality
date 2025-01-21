<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <section class="max-w-[1050px] w-full mx-auto py-20 my-5">
    <x-white-navigation/>

        <div class="flex gap-5 items-center justify-center mb-12">
            <img class="w-14" src="{{asset('assets/logo_kedai.svg')}}" alt="">
            <p class="font-bold text-4xl text-center">Kedai CoE</p>
        </div>
        
        <div class="border-[1.5px] border-[#D9D9D9] rounded-md py-3 px-8 mb-5 ">
            
            <div class="flex flex-wrap mt-7 gap-9">

                <div class="col-span-2">
                    <div class="w-[400px] h-[200px] overflow-hidden">
                        <img id="mainImage" src="{{ asset('assets/kedai.png') }}" alt="innovillage" class="w-full h-full object-cover cursor-pointer"> 
                    </div>
                    <div class="w-[73px] flex gap-2 mt-5">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/kedai.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/kedai.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/kedai.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/kedai.png') }}" alt="innovillage">
                        <img class="thumbnail cursor-pointer" src="{{ asset('assets/kedai.png') }}" alt="innovillage">
                    </div>
                </div>

                <div class="flex-1">
                    <p class="font-bold text-xl">Cumi</p>
                    <p class="font-light text-lg">Produk cumi dan teri asin berkualitas tinggi ini berasal dari perairan Lampung yang kaya akan hasil laut, diolah secara higienis tanpa menggunakan bahan pengawet, sehingga kesegarannya tetap terjaga. Dengan cita rasa yang khas, cumi dan teri asin ini sangat cocok sebagai bahan tambahan dalam berbagai masakan.</p>
                </div>

            </div>

            <div class="mt-5 flex gap-8 text-base font-bold">
                <div class="flex gap-2 items-center justify-center">
                    <img class="w-4" src="{{asset('assets/logo_ig.svg')}}" alt="">
                    <p>kedaicoe</p>
                </div>

                <div class="flex gap-2 items-center justify-center">
                    <img class="w-4" src="{{asset('assets/logo_phone.svg')}}" alt="">
                    <p>+62 858-8956-5860</p>
                </div>
            </div>

        </div>
        
        
    </section>
    
    <script>
        const mainImage = document.getElementById('mainImage');
        const thumbnails = document.querySelectorAll('.thumbnail');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                mainImage.src = thumbnail.src;
                thumbnails.forEach(t => t.classList.remove('border-[#1ABC9C]', 'border-[4px]'));
                thumbnail.classList.add('border-[#1ABC9C]', 'border-[4px]');
            });
        });

    </script>

    <script>
        // Change navbar background on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            // const bannerHeight = document.querySelector('section').offsetHeight;

            if (window.scrollY > 0) {
                // Saat user melewati banner section
                navbar.classList.add('shadow-md', 'px-28');
                navbar.classList.remove('text-white', 'mx-16', 'rounded-b-2xl');
            } else {
                // Saat user berada di dalam banner section
                navbar.classList.add('mx-16', 'rounded-b-2xl');
                navbar.classList.remove('px-28');
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