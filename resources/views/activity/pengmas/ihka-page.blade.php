<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="mx-auto max-w-[1050px] w-full mt-32 mb-16 px-8 sm:px-16 md:px-16 lg:px-4 font-arial">
    <x-white-navigation />

        <b class="text-base mx-auto sm:text-2xl lg:text-3xl">Indonesian Housekeeper Association (IHKA) </b>

        <div class="col-span-2 mt-6">
            <div class="w-[366px] h-[250px] md:w-[675px] sm:h-[296px] lg:w-[1018px] lg:h-[420px] overflow-hidden">
                <img id="mainImage" src="{{ asset('assets/pictinno.png') }}" alt="innovillage" class="w-full h-full object-cover"> 
            </div>

            <div class="grid grid-cols-5 gap-2 mt-5">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
                <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[200px] lg:h-[100px] object-cover cursor-pointer" src="{{ asset('assets/pictinno.png') }}" alt="innovillage">
            </div>
        </div>

        <div class="pt-5 sm:pt-10 lg:pt-14">
            <p class="font-semibold text-base sm:text-xl lg:text-2xl">Deskripsi Kegiatan</p>
            <p class="text-justify font-light mt-3 lg:mt-4 text-xs sm:text-xl lg:text-xl">Indonesian Housekeepers Association (IHKA) adalah organisasi profesional yang menjadi wadah utama bagi para praktisi housekeeping di sektor perhotelan, pariwisata, dan industri terkait di Indonesia. Didirikan dengan semangat meningkatkan kualitas dan kompetensi di bidang housekeeping, IHKA memegang peranan penting dalam membantu para profesional menghadapi tantangan industri yang dinamis dan terus berkembang. Dengan fokus pada pengembangan keahlian, IHKA menghadirkan program-program inovatif yang dirancang untuk memastikan para anggotanya mampu memenuhi standar kerja yang tinggi dan menghasilkan layanan terbaik.</p>

            <p class="text-justify font-light mt-3 lg:mt-4 text-xs sm:text-xl lg:text-xl">Sebagai bagian dari ekosistem pariwisata yang semakin berorientasi pada teknologi dan keberlanjutan, IHKA secara aktif menyelenggarakan berbagai kegiatan, termasuk pelatihan, seminar, dan program kolaborasi dengan mitra strategis. Kegiatan-kegiatan ini tidak hanya bertujuan meningkatkan profesionalisme individu, tetapi juga memperluas jaringan kerja yang produktif di antara para pelaku industri. Melalui pendekatan yang berbasis solusi dan inovasi, IHKA membekali anggotanya dengan pengetahuan terkini, kemampuan adaptasi teknologi modern, serta keterampilan praktis yang relevan dengan kebutuhan pasar pariwisata global.</p>

            <p class="text-justify font-light mt-3 lg:mt-4 text-xs sm:text-xl lg:text-xl">Sebagai mitra strategis dalam pengembangan sektor pariwisata dan perhotelan, IHKA memiliki komitmen kuat untuk mendukung terciptanya layanan berkualitas tinggi yang berstandar internasional. Komitmen ini diwujudkan melalui kerja sama erat dengan berbagai pihak, termasuk pemerintah, pelaku industri, dan lembaga pendidikan, guna menciptakan sinergi yang membawa dampak positif bagi seluruh ekosistem pariwisata. IHKA juga menjadi bagian penting dalam upaya transformasi digital di sektor perhotelan, sejalan dengan visi CoE Smart Tourism and Hospitality untuk mendukung daya saing pariwisata Indonesia di tingkat global.</p>

            <p class="text-justify font-light mt-3 lg:mt-4 text-xs sm:text-xl lg:text-xl">Dengan perannya yang strategis, IHKA terus berkontribusi dalam menciptakan praktik housekeeping yang inovatif dan berkelanjutan. Melalui pendekatan holistik yang melibatkan peningkatan kompetensi individu, penguatan kolaborasi, dan penerapan teknologi, IHKA menjadi motor penggerak transformasi sektor perhotelan di Indonesia. Organisasi ini tidak hanya mendukung pertumbuhan profesional para anggotanya, tetapi juga turut membangun citra positif pariwisata Indonesia di mata dunia.</p>

            <p class="font-semibold text-base sm:text-xl lg:text-2xl mt-4 sm:mt-8 lg:mt-11">Apa saja yang kami kerjakan :</p>
            <ul class="list-decimal pl-4 mt-3 lg:mt-4 font-light text-xs sm:text-xl lg:text-xl ">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet</li>
            </ul>
        </div>

        <div>
            <p class="font-semibold text-base sm:text-xl lg:text-2xl mt-6 sm:mt-14 lg:mt-16 text-center">Mitra dan Dukungan :</p>
            <div class="grid grid-cols-5 gap-4 sm:gap-8 lg:gap-2 justify-center mt-5">
                <!-- <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo Lotus">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo ">
                <img class="w-16 sm:w-20 lg:w-20" src="{{asset('assets/logo_lotus.svg')}}" alt="Logo "> -->

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

