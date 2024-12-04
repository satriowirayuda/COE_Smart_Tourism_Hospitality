<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <section class="mx-5 md:mx-10 lg:mx-28 max-w-[1050px] py-20">
    <x-navigation/>

        <p class="text-xl md:text-2xl lg:text-3xl font-bold">JUDUL INNOVILLAGE</p>
        <p class="text-lg md:text-xl lg:text-2xl mt-1 md:mt-2 lg:mt-3">Innovillage 2022</p>

        <div class="grid grid-cols-3 gap-20 items-start mt-6">
            <div class="col-span-2">
                <div class="w-[390px] h-[300px] lg:w-[652px] lg:h-[384px] overflow-hidden">
                    <img id="mainImage" src="{{ asset('assets/pictinno.png') }}" alt="innovillage" class="w-full h-full object-cover cursor-pointer"> 
                </div>
                <div class="w-[90px] h-[44.9px] lg:w-[128px] lg:h-20 flex gap-2 mt-5">
                    <img class="thumbnail cursor-pointer w-full h-full object-cover" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                    <img class="thumbnail cursor-pointer w-full h-full object-cover" src="{{ asset('assets/subinno.png') }}" alt="innovillage">
                    <img class="thumbnail cursor-pointer w-full h-full object-cover" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                    <img class="thumbnail cursor-pointer w-full h-full object-cover" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                    <img class="thumbnail cursor-pointer w-full h-full object-cover" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                </div>
            </div>

            <div class="col-span-1 border border-[#BABABA] rounded-2xl shadow-xl hidden md:hidden lg:block">
                <div class="p-5 hidden md:hidden lg:block">
                    <p class="mb-2 text-2xl font-semibold">Our Team</p>
                    <div class="grid grid-cols-2 gap-3">

                        <div class="relative col-span-1">
                            <div class="relative w-full h-full">
                                <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                
                            </div>
                            <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                        </div>

                        <div class="relative col-span-1">
                            <div class="relative w-full h-full">
                                <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                
                            </div>
                            <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                        </div>

                        <div class="relative col-span-1">
                            <div class="relative w-full h-full">
                                <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                
                            </div>
                            <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                        </div>

                        <div class="relative col-span-1">
                            <div class="relative w-full h-full">
                                <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                
                            </div>
                            <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                        </div>

                        <div class="relative col-span-1">
                            <div class="relative w-full h-full">
                                <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                
                            </div>
                            <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                        </div>

                        <div class="relative col-span-1">
                            <div class="relative w-full h-full">
                                <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                                
                            </div>
                            <p class="absolute bottom-0 w-full text-xs pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>    

        <div class="pt-6">
            <p class="font-semibold text-2xl">Tentang Judul Innovillage</p>
            <p class="text-xs md:text-base lg:text-xl text-justify font-light mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
        </div>

        <div class="mt-6 mx-14 border border-[#BABABA] rounded-2xl shadow-xl block md:block lg:hidden">
            <div class="p-5">
                <p class="mb-2 text-lg font-semibold">Our Team</p>
                <div class="grid grid-cols-2 gap-3">

                    <div class="relative col-span-1">
                        <div class="relative w-full h-full">
                            <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                            
                        </div>
                        <p class="absolute bottom-0 w-full text-[10px] pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                    </div>

                    <div class="relative col-span-1">
                        <div class="relative w-full h-full">
                            <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                            
                        </div>
                        <p class="absolute bottom-0 w-full text-[10px] pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                    </div>

                    <div class="relative col-span-1">
                        <div class="relative w-full h-full">
                            <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                            
                        </div>
                        <p class="absolute bottom-0 w-full text-[10px] pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                    </div>

                    <div class="relative col-span-1">
                        <div class="relative w-full h-full">
                            <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                            
                        </div>
                        <p class="absolute bottom-0 w-full text-[10px] pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                    </div>

                    <div class="relative col-span-1">
                        <div class="relative w-full h-full">
                            <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                            
                        </div>
                        <p class="absolute bottom-0 w-full text-[10px] pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                    </div>

                    <div class="relative col-span-1">
                        <div class="relative w-full h-full">
                            <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="w-full h-auto">
                            
                        </div>
                        <p class="absolute bottom-0 w-full text-[10px] pl-1 py-3 z-20 font-semibold text-white">Nama Alumni</p>
                    </div>

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

<x-footer></x-footer>

</body>
</html>

