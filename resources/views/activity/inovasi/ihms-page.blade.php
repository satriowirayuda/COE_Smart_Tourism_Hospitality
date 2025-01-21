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

        <b class="text-base mx-auto sm:text-2xl lg:text-3xl">Intelligent Hotel Management System (IHMS)</b>

        <div class="col-span-2 mt-6">
            <div class="w-[366px] h-[250px] md:w-[675px] sm:h-[296px] lg:w-[1018px] lg:h-[420px] overflow-hidden">
                <img id="mainImage" src="{{ asset('assets/ihms/ihms1.jpg') }}" alt="innovillage" class="w-full h-full object-cover"> 
            </div>

            <div class="grid grid-cols-5 gap-2 mt-5">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/ihms/ihms1.jpg') }}" alt="ihms">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/ihms/ihms2.jpg') }}" alt="ihms">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/ihms/ihms3.jpg') }}" alt="ihms">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/ihms/ihms4.jpg') }}" alt="ihms">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/ihms/ihms5.jpg') }}" alt="ihms">
            </div>
        </div>

        <div class="flex gap-20 sm:gap-40 lg:gap-60 mt-5">
            <div>
                <p class="text-sm md:text-lg lg:text-xl font-bold text-[#FF8A00]">Kategori:</p>
                <p class="text-sm md:text-lg lg:text-base">Hospitality</p>
            </div>
            <div>
                <p class="text-sm md:text-lg lg:text-xl font-bold text-[#FF8A00]">Klien:</p>
                <p class="text-sm md:text-lg lg:text-base">Lingian</p> 
            </div>
        </div>
        

        <div class="pt-6 space-y-5">
            <p class="font-semibold text-lg sm:text-xl lg:text-2xl">Pengenalan</p>
            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">Intelligent Hotel Management System (IHMS) adalah aplikasi inovatif yang dikembangkan untuk mendukung pengelolaan operasional hotel secara efisien dan terintegrasi. Didesain khusus untuk menjawab kebutuhan industri perhotelan modern, IHMS menggabungkan teknologi terkini dengan standar layanan profesional, memberikan solusi komprehensif untuk manajemen hotel.<br></br> Aplikasi ini mencakup berbagai fitur unggulan, seperti:</p>

            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">Front Office Management</br>
            IHMS mempermudah proses check-in, check-out, dan manajemen reservasi melalui sistem yang terintegrasi. Fitur ini tidak hanya meningkatkan pengalaman tamu dengan proses yang lebih cepat dan efisien, tetapi juga membantu staf hotel dalam mengelola data tamu secara lebih akurat.</p>

            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">Housekeeping Management</br>
            Dengan dukungan pelaporan status kamar secara real-time, IHMS mempermudah tim housekeeping dalam mengatur tugas kebersihan kamar. Sistem ini juga mendukung pengelolaan permintaan layanan dari tamu, memastikan bahwa setiap kebutuhan dapat dipenuhi secara cepat dan tepat.</p>

            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">In-Room Services</br>
            IHMS menghadirkan layanan kamar berbasis aplikasi yang memungkinkan tamu untuk memesan makanan, minuman, atau kebutuhan lainnya secara langsung melalui perangkat digital. Hal ini memberikan pengalaman layanan yang lebih personal dan modern.</p>

            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">IHMS dikembangkan sebagai hasil penelitian terapan oleh Pusat Penelitian Smart Tourism & Hospitality di Telkom University. Sistem ini dirancang untuk mendukung transformasi digital dalam industri perhotelan, menghadirkan efisiensi operasional sekaligus layanan yang lebih terstandarisasi.</p>

            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">Sebagai langkah nyata dalam penerapan teknologi berbasis penelitian ke dunia kerja, IHMS diimplementasikan pertama kali di Hotel Lingan, yang terletak dalam lingkungan Telkom University, pada tahun 2023. Implementasi ini menjadi bagian dari upaya strategis untuk menghubungkan hasil riset dengan kebutuhan nyata industri perhotelan, menciptakan nilai tambah bagi akademisi dan praktisi.</p>

            <p class="text-justify font-light mt-5 text-lg sm:text-xl lg:text-xl">IHMS tidak hanya mempermudah pengelolaan operasional hotel, tetapi juga berkontribusi dalam menciptakan ekosistem perhotelan yang lebih modern, efisien, dan berorientasi pada pelanggan. Sistem ini menjadi solusi andal bagi hotel yang ingin meningkatkan daya saing mereka di era teknologi digital.</p>

            <p class="font-semibold text-lg sm:text-xl lg:text-2xl mt-6">Apa saja yang kami kerjakan :</p>
            <ul class="list-decimal pl-4 font-light text-lg sm:text-xl lg:text-xl mt-5">
                <li>Manajemen Front Office</li>
                <li>Manajemen Housekeeping</li>
                <li>Layanan In-Room</li>
            </ul>
        
        </div>

        <p class="font-semibold text-lg sm:text-xl lg:text-2xl mt-16 text-center">Mitra dan Dukungan :</p>
        <img class="pt-5 w-16 sm:w-20 lg:w-20 cenetr mx-auto" src="{{asset('assets/ihms/curaweda-logo.png')}}" alt="">

        <div class="grid grid-cols-5 gap-4 sm:gap-8 lg:gap-10 items-center mt-5">

            <!-- <div class="flex justify-center items-center">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/mlotus/5.png')}}" alt="">
            </div> -->
            
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
                navbar.classList.add('bg-white', 'mx-16', 'rounded-b-2xl');
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

