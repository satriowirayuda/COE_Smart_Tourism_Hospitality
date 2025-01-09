<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="mx-auto max-w-[1050px] w-full mt-40 mb-14 px-8 sm:px-16 md:px-16 lg:px-4 font-arial">
    <x-white-navigation />

        <b class="text-base mx-auto sm:text-2xl lg:text-3xl">Lorong Waktu Sejarah (IHMS)</b>

        <div class="col-span-2 mt-6">
            <div class="w-[366px] h-[250px] md:w-[675px] sm:h-[296px] lg:w-[1018px] lg:h-[420px] overflow-hidden">
                <img id="mainImage" src="{{ asset('assets/pictinno.png') }}" alt="innovillage" class="w-full h-full object-cover"> 
            </div>

            <div class="grid grid-cols-5 gap-2 mt-5">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/binno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/subinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/binovasi.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
            </div>
        </div>

        <div class="flex gap-20 sm:gap-40 lg:gap-60 mt-5">
            <div>
                <p class="text-sm md:text-lg lg:text-xl font-bold text-[#FF8A00]">Kategori:</p>
                <p class="text-sm md:text-lg lg:text-base">Pariwisata</p>
            </div>
            <div>
                <p class="text-sm md:text-lg lg:text-xl font-bold text-[#FF8A00]">Klien:</p>
                <p class="text-sm md:text-lg lg:text-base">Keraton Kasepuhan Cirebon</p> 
            </div>
        </div>

        <div class="pt-6">
            <p class="font-semibold text-lg sm:text-xl lg:text-2xl">Pengenalan</p>
            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">LOTUS (Lorong Waktu Sejarah) merupakan museum CAVE yang 100% isi konten memanfaatkan AI (Artificial Intelligence), LOTUS ini sebuah mini bioskop yang di dalamnya terdapat konten sejarah yang visualisasinya di bantu oleh AI, yang menjadikan konten ini menjadi nyata saat kita memasuki kotak tersebut.</p>

            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">Saat ini yang kita buat, mengangkat konten sejarah Kasepuhan Cirebon yang sudah hampir punah. Kota yang terjajah oleh belanda, perbudakan, penindasan terus terjadi setiap sudut kehidupan di kota itu. Dengan projek yang kami buat ini, semoga dapat mengangkat kembali sejarah Kasepuhan Cirebon bahkan kembali melestarikan sejarah-sejarah yang ada di Indonesia dengan memanfaatkan teknologi yang ada saat ini salah satunya AI (Artificial Intelligence).</p>

            <p class="font-semibold text-lg sm:text-xl lg:text-2xl mt-6">Apa saja yang kami kerjakan :</p>
            <ul class="list-decimal pl-4 font-light text-lg sm:text-xl lg:text-xl mt-5">
                <li>Pembuatan Konten AI</li>
                <li>Melakukan pembelajaran</li>
                <li>Strategi pemasaran konten</li>
                <li>Melakukan serangkaian riset</li>
            </ul>
        </div>

        <div>
            <p class="font-semibold text-lg sm:text-xl lg:text-2xl mt-16 text-center">Mitra dan Dukungan :</p>
            <div class="grid grid-cols-5 gap-4 sm:gap-8 lg:gap-10 justify-center mt-5">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo Lotus">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">

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

    <!-- NAVIGATION -->
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
                navbar.classList.add('bg-white', 'shadow-md', 'px-28');
                navbar.classList.remove('shadow-md' );
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

