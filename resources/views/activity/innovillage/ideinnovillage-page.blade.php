<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <section class="mx-auto max-w-[1050px] w-full pt-28 mb-14 px-8 sm:px-16 md:px-16 lg:px-4 font-arial">
    <x-white-navigation/>

        <p class="text-xl md:text-2xl lg:text-3xl font-bold">Inovasi Promosi Desa Melalui Penggunaan AR Guna Meningkatkan Kunjungan Wisatawan Di Desa Margamulya</p>
        <p class="text-lg md:text-xl lg:text-2xl mt-1 md:mt-2 lg:mt-3">Innovillage 2023</p>

        <div class="grid grid-cols-3 gap-20 items-start pt-6">
            <div class="col-span-2">
                <div class="w-[366px] h-[250px] md:w-[675px] sm:h-[296px] lg:w-[649px] lg:h-[390px] overflow-hidden">
                    <img id="mainImage" src="{{ asset('assets/innovillage2023.png') }}" alt="innovillage" class="w-full h-full object-cover"> 
                </div>

                <div class="grid grid-cols-5 gap-2 mt-5">
                    <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[121px] lg:h-[81px] object-cover cursor-pointer" src="{{ asset('assets/innovillage2023.png') }}" alt="innovillage">
                    <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[121px] lg:h-[81px] object-cover cursor-pointer" src="{{ asset('assets/ide2.png') }}" alt="innovillage">
                    <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[121px] lg:h-[81px] object-cover cursor-pointer" src="{{ asset('assets/ide3.png') }}" alt="innovillage">
                    <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[121px] lg:h-[81px] object-cover cursor-pointer" src="{{ asset('assets/ide4.png') }}" alt="innovillage">
                    <img class="thumbnail w-[200px] h-[60px] md:w-[200px] md:h-[100px] lg:w-[121px] lg:h-[81px] object-cover cursor-pointer" src="{{ asset('assets/ide5.jpg') }}" alt="innovillage">
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
            <p class="font-semibold text-lg sm:text-xl lg:text-2xl">Tentang Judul Innovillage</p>
            <p class="text-justify font-light text-lg sm:text-xl lg:text-xl mt-5">Desa Margamulya merupakan desa wisata yang tengah dirintis oleh pengembang desa wisata dan masyarakat setempat oleh karena itu kami dari tim Tridumaya melakukan inovasi promosi wisata menggunakan teknologi Augmented Reality (AR) untuk meningkatkan jumlah kunjungan ke desa Margamulya, hal ini akan menunjang keunikan wisata yang ada di desa Margamulya tanpa mengubah ketradisionalan budaya yang ada di sana, Selain itu Marketing Planning untuk desa melalui pembuatan konten Sosial Media Marketing, Website dan juga Publikasi akan dijalankan beriringan dengan pengolahan konten AR. Pada kunjungan pertama setelah dinyatakan lolos TOP 160 proposal yang disetujui, Kami melakukan presentasi desain website dan AR bersama kepala desa wisata setempat, melalui diskusi ini kami telah menyepakati desain website yang nantinya akan terhubung dengan QR qode Informatif mengenai desa wisata. Selanjutnya kami menggali informasi  alur trip wisata untuk pembuatan Paket wisata  yang akan ada nantinya di dalam website desa wisata.</p>
            <p class="text-justify font-light text-lg sm:text-xl lg:text-xl mt-5">Selain itu kami berencana untuk membuat video konten alur perjalanan desa wisata pada kesempatan berkunjung berikutnya ke desa. Pada implementasi tahap ke 2 kami telah Menyusun Kembali rencana untuk datang dan memulai pengumpulan data gathering untuk website, pembuatan video profile, video alur trip wisata desa, dan video edukasi untuk kebutuhan Augmented Reality nantinya, kami telah menyiapkan rancangan seperti storyboard dan storyline, sekaligus menyiapkan atribut shooting untuk di bawa ke desa Margamulya. Setelah semuanya siap kami menghubungi kepala desa wisata Margamulya untuk izin melakukan dokumentasi kegiatan masyarakat desa Margamulya dan meminta izin kepada masyarakat untuk menyiapkan diri dalam proses shoot video. Dari pihak desa menyetujui akan hal itu, pada hari sabtu, 13 january 2024 kami melakukan proses implementasi pada desa sesuai flow yang telah kami sepakati sebelumnya.</p>
            <p class="text-justify font-light text-lg sm:text-xl lg:text-xl mt-5">Pada implementasi tahap ke 3 atau tahap akhir, kami telah melakukan proses penyempurnaan konten yang kami olah seperti melengkapi adegan yang dibutuhkan untuk menunjang kualitas konten, semua konten ini di salurkan untuk kebutuhan augmented reality dan juga website desa wisata margamulya, luaran konten yang kami buat berupa 2 edukasi wisata, trip wisata desa margamulya dan profil desa. pada tahap kedua AR sudah dimulai uji coba dan pada tahap ini penyempurnaan AR agar lebih nyaman untuk di lihat wisatawan nantinya begitupun website desa margamulya yang sudah kami rampungkan berdasarkan data gathering yang kami peroleh. tidak lupa dengan pengembangan marketing plan melalui sosial media seperti instagram, tiktok dan youtube untuk menunjang exposure desa margamulya.</p>
            <p class="text-justify font-light text-lg sm:text-xl lg:text-xl mt-5">Kami juga menggunakan pemasaran online berupa penyebaran brosure informatif menggunakan QR qode. Selanjutnya pemasangan board informatif permanen pada desa untuk sebuah kenang-kenangan dari program innovillage ini dan juga menjadi objek baru yang berbasis digitalisasi  dan inovatif.  Project tim kami sangat berguna bagi keberlanjutan dan modal awal sebuah desa wisata untuk terus berkembang. Website sebagai wadah desa untuk menyalurkan informasi dan penjualan paket wisata, AR sebagai inovasi wisata berbasis teknologi terbaru yang menarik dan edukatif. Dan marketing melalui 
            media sosial agar tingkat exposure desa wisata menjadi semakin luas dikenal wisatawan. Hal ini berguna selamanya dan bahkan dapat di kembangkan oleh pokdarwis setempat sesuai dengan situasi dan kondisi di desa saat itu. </p>
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

