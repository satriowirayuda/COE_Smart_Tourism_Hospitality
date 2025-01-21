<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>

    <section class="mx-4 sm:mx-6 lg:mx-10 pt-28 font-arial">
        <x-white-navigation/>

        <img class="w-40 sm:w-52 lg:w-60 mx-auto" src="{{asset('assets/logo_rumahjurnal.svg')}}" alt="">
        
        <div class="border-[1.5px] border-[#D9D9D9] rounded-md p-3 sm:p-4 lg:p-5 mt-5 my-5 ">
            <div class="flex flex-wrap gap-2 sm:gap-3 lg:gap-4">

                <div class="w-[160px] h-[140px] sm:w-[300px] sm:h-[265px] lg:w-[400px] lg:h-[350px] flex-shrink-0 mb-5">
                    <img class="w-full h-full rounded-xl" src="{{asset('assets/coverjurnal.png')}}" alt="">
                </div>

                <div class="flex-1">
                    <p class="font-bold text-[10px] sm:text-xl lg:text-2xl mb-2 sm:mb-3 lg:mb-5 line-clamp-1">Pelatihan Menulis Artikel Ilmiah</p>
                    
                    <div class="flex gap-1 sm:gap-2 lg:gap-3">
                        <img class="w-[16px] h-[14px] sm:w-[24px] sm:h-[22px] lg:w-[28px] lg:h-[26px] my-auto" src="{{asset('assets/calender.png')}}" alt="calender">
                        <div class="border-[1.5px] lg:border-2 border-[#D9D9D9] px-1 rounded-[4px] lg:rounded-md"><p class="text-[8px] sm:text-base lg:text-lg text-center content-center font-light">20 Agust-2024</p></div>
                    </div>
                    
                    <div class="flex gap-2 sm:gap-[14px] lg:gap-3 my-[6px] sm:my-3 lg:my-4">
                        <img class="w-[14px] h-[18px] sm:w-[24px] sm:h-[26px] lg:w-[28px] lg:h-[30px] my-auto" src="{{asset('assets/location.svg')}}" alt="">
                        <p class="text-[8px] sm:text-base lg:text-lg font-light line-clamp-2">Hotel LPP Garden, Jl. Perumnas No. 1, Caturtunggal, Depok, Yogyakarta</p>
                    </div>
                    
                    <div class="flex gap-[6px] sm:gap-2 lg:gap-3">
                        <img class="w-[16px] h-[12px] sm:w-[24px] sm:h-[20px] lg:w-[28px] lg:h-[24px] my-auto" src="{{asset('assets/key.svg')}}" alt="id">
                        <p class="text-[8px] sm:text-base lg:text-lg font-light">Pelatihan Menulis Artikel Ilmiah</p>
                    </div>

                    <p class="font-light text-[8px] sm:text-base lg:text-lg text-justify mt-[6px] sm:mt-3 lg:mt-4 line-clamp-4 sm:line-clamp-4 lg:line-clamp-6">
                    Pelatihan ini dirancang untuk membantu para peserta meningkatkan keterampilan menulis artikel ilmiah secara profesional. Dihadiri oleh para ahli, pelatihan ini akan memberikan wawasan penting dalam penulisan ilmiah yang efektif dan berdampak. Jangan lewatkan kesempatan untuk memperdalam kemampuan menulis dan berkontribusi dalam dunia akademik!
                    Pelatihan ini dirancang untuk membantu para peserta meningkatkan keterampilan menulis artikel ilmiah secara profesional. Dihadiri oleh para ahli, pelatihan ini akan memberikan wawasan penting dalam penulisan ilmiah yang efektif dan berdampak. Jangan lewatkan kesempatan untuk memperdalam kemampuan menulis dan berkontribusi dalam dunia akademik!
                    </p>
                </div>
            </div>
            <div class="bg-[#CCE2FF] w-20 h-5 sm:w-28 sm:h-7 lg:w-28 lg:h-8 ml-auto text-center justify-center rounded-lg text-[10px] sm:text-sm lg:text-base text-black font-light border-2 border-[#D9D9D9] underline underline-offset-2">
                <a href="#" target="_blank">Selengkapnya</a>
            </div>
            
        </div>

        <div class="border-[1.5px] border-[#D9D9D9] rounded-md p-3 sm:p-4 lg:p-5 my-5 ">
            <div class="flex flex-wrap gap-2 sm:gap-3 lg:gap-4">

                <div class="w-[160px] h-[140px] sm:w-[300px] sm:h-[265px] lg:w-[400px] lg:h-[350px] flex-shrink-0 mb-5">
                    <img class="w-full h-full rounded-xl" src="{{asset('assets/coverjurnal.png')}}" alt="">
                </div>

                <div class="flex-1">
                    <p class="font-bold text-[10px] sm:text-xl lg:text-2xl mb-2 sm:mb-3 lg:mb-5 line-clamp-1">Pelatihan Menulis Artikel Ilmiah</p>
                    
                    <div class="flex gap-1 sm:gap-2 lg:gap-3">
                        <img class="w-[16px] h-[14px] sm:w-[24px] sm:h-[22px] lg:w-[28px] lg:h-[26px] my-auto" src="{{asset('assets/calender.png')}}" alt="calender">
                        <div class="border-[1.5px] lg:border-2 border-[#D9D9D9] px-1 rounded-[4px] lg:rounded-md"><p class="text-[8px] sm:text-base lg:text-lg text-center content-center font-light">20 Agust-2024</p></div>
                    </div>
                    
                    <div class="flex gap-2 sm:gap-[14px] lg:gap-3 my-[6px] sm:my-3 lg:my-4">
                        <img class="w-[14px] h-[18px] sm:w-[24px] sm:h-[26px] lg:w-[28px] lg:h-[30px] my-auto" src="{{asset('assets/location.svg')}}" alt="">
                        <p class="text-[8px] sm:text-base lg:text-lg font-light line-clamp-2">Hotel LPP Garden, Jl. Perumnas No. 1, Caturtunggal, Depok, Yogyakarta</p>
                    </div>
                    
                    <div class="flex gap-[6px] sm:gap-2 lg:gap-3">
                        <img class="w-[16px] h-[12px] sm:w-[24px] sm:h-[20px] lg:w-[28px] lg:h-[24px] my-auto" src="{{asset('assets/key.svg')}}" alt="id">
                        <p class="text-[8px] sm:text-base lg:text-lg font-light">Pelatihan Menulis Artikel Ilmiah</p>
                    </div>

                    <p class="font-light text-[8px] sm:text-base lg:text-lg text-justify mt-[6px] sm:mt-3 lg:mt-4 line-clamp-4 sm:line-clamp-4 lg:line-clamp-6">
                    Pelatihan ini dirancang untuk membantu para peserta meningkatkan keterampilan menulis artikel ilmiah secara profesional. Dihadiri oleh para ahli, pelatihan ini akan memberikan wawasan penting dalam penulisan ilmiah yang efektif dan berdampak. Jangan lewatkan kesempatan untuk memperdalam kemampuan menulis dan berkontribusi dalam dunia akademik!
                    Pelatihan ini dirancang untuk membantu para peserta meningkatkan keterampilan menulis artikel ilmiah secara profesional. Dihadiri oleh para ahli, pelatihan ini akan memberikan wawasan penting dalam penulisan ilmiah yang efektif dan berdampak. Jangan lewatkan kesempatan untuk memperdalam kemampuan menulis dan berkontribusi dalam dunia akademik!
                    </p>
                </div>
            </div>
            <div class="bg-[#CCE2FF] w-20 h-5 sm:w-28 sm:h-7 lg:w-28 lg:h-8 ml-auto text-center justify-center rounded-lg text-[10px] sm:text-sm lg:text-base text-black font-light border-2 border-[#D9D9D9] underline underline-offset-2">
                <a href="#" target="_blank">Selengkapnya</a>
            </div>
            
        </div>

        <div class="border-[1.5px] border-[#D9D9D9] rounded-md p-3 sm:p-4 lg:p-5 mb-5 mt-5 ">
            <div class="flex flex-wrap gap-2 sm:gap-3 lg:gap-4">

                <div class="w-[160px] h-[140px] sm:w-[300px] sm:h-[265px] lg:w-[400px] lg:h-[350px] flex-shrink-0 mb-5">
                    <img class="w-full h-full rounded-xl" src="{{asset('assets/coverjurnal.png')}}" alt="">
                </div>

                <div class="flex-1">
                    <p class="font-bold text-[10px] sm:text-xl lg:text-2xl mb-2 sm:mb-3 lg:mb-5 line-clamp-1">Pelatihan Menulis Artikel Ilmiah</p>
                    
                    <div class="flex gap-1 sm:gap-2 lg:gap-3">
                        <img class="w-[16px] h-[14px] sm:w-[24px] sm:h-[22px] lg:w-[28px] lg:h-[26px] my-auto" src="{{asset('assets/calender.png')}}" alt="calender">
                        <div class="border-[1.5px] lg:border-2 border-[#D9D9D9] px-1 rounded-[4px] lg:rounded-md"><p class="text-[8px] sm:text-base lg:text-lg text-center content-center font-light">20 Agust-2024</p></div>
                    </div>
                    
                    <div class="flex gap-2 sm:gap-[14px] lg:gap-3 my-[6px] sm:my-3 lg:my-4">
                        <img class="w-[14px] h-[18px] sm:w-[24px] sm:h-[26px] lg:w-[28px] lg:h-[30px] my-auto" src="{{asset('assets/location.svg')}}" alt="">
                        <p class="text-[8px] sm:text-base lg:text-lg font-light line-clamp-2">Hotel LPP Garden, Jl. Perumnas No. 1, Caturtunggal, Depok, Yogyakarta</p>
                    </div>
                    
                    <div class="flex gap-[6px] sm:gap-2 lg:gap-3">
                        <img class="w-[16px] h-[12px] sm:w-[24px] sm:h-[20px] lg:w-[28px] lg:h-[24px] my-auto" src="{{asset('assets/key.svg')}}" alt="id">
                        <p class="text-[8px] sm:text-base lg:text-lg font-light">Pelatihan Menulis Artikel Ilmiah</p>
                    </div>

                    <p class="font-light text-[8px] sm:text-base lg:text-lg text-justify mt-[6px] sm:mt-3 lg:mt-4 line-clamp-4 sm:line-clamp-4 lg:line-clamp-6">
                    Pelatihan ini dirancang untuk membantu para peserta meningkatkan keterampilan menulis artikel ilmiah secara profesional. Dihadiri oleh para ahli, pelatihan ini akan memberikan wawasan penting dalam penulisan ilmiah yang efektif dan berdampak. Jangan lewatkan kesempatan untuk memperdalam kemampuan menulis dan berkontribusi dalam dunia akademik!
                    Pelatihan ini dirancang untuk membantu para peserta meningkatkan keterampilan menulis artikel ilmiah secara profesional. Dihadiri oleh para ahli, pelatihan ini akan memberikan wawasan penting dalam penulisan ilmiah yang efektif dan berdampak. Jangan lewatkan kesempatan untuk memperdalam kemampuan menulis dan berkontribusi dalam dunia akademik!
                    </p>
                </div>
            </div>
            <div class="bg-[#CCE2FF] w-20 h-5 sm:w-28 sm:h-7 lg:w-28 lg:h-8 ml-auto text-center justify-center rounded-lg text-[10px] sm:text-sm lg:text-base text-black font-light border-2 border-[#D9D9D9] underline underline-offset-2">
                <a href="#" target="_blank">Selengkapnya</a>
            </div>
            
        </div>
        
    </section>
    
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