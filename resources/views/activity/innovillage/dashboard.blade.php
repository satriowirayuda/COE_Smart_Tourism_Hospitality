<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="mx-5 md:mx-10 lg:mx-28 py-7 lg:py-20">
        <div class="grid grid-cols-2 gap-3 md:gap-4 lg:gap-5 items-center md:hidden lg:hidden">
            <img class="w-[200px] md:w-[200px] lg:w-[600px]" src="{{asset('assets/img.png')}}" alt="">
            <div class="font-lota2">
                <p class="font-bold text-sm md:text-lg lg:text-xl">Innovillage</p>
                <p class="mt-2 text-[8px] md:text-base lg:text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
            </div>
            
        </div>
        <div class="relative hidden md:block lg:block">
            <img src="{{ asset('assets/img.png')}}" alt="" class="w-[200px] md:w-[500px] lg:w-[600px]">
            <div class="w-[300px] lg:w-[500px] lg:h-[300px] bg-orange bg-opacity-70 font-lota2 text-white py-3 md:py-5 lg:py-10 px-2 md:px-4 lg:px-5 absolute z-0 top-10 right-0">
                <p class="font-bold text-sm md:text-lg lg:text-xl">Innovillage</p>
                <p class="text-[8px] md:text-base lg:text-lg pt-5 line-clamp-6">Innovillage adalah program yang bertujuan mendorong inovasi dalam pengembangan desa wisata dengan memanfaatkan teknologi dan solusi kreatif. Program ini melibatkan kolaborasi antara pemerintah, akademisi, dan masyarakat lokal untuk meningkatkan daya tarik, keberlanjutan, dan pengelolaan desa wisata. Innovillage mendorong pengembangan infrastruktur, pemberdayaan masyarakat, dan penggunaan teknologi untuk meningkatkan pengalaman wisata dan akses informasi, sehingga dapat memperkuat sektor pariwisata di daerah tersebut
                </p>
            </div>
        </div>
    </section>

    <section class="mb-20 relative">

        <!-- RESPONSIVE -->
        <div class="mt-7">
            <!-- Elemen latar belakang oranye -->
            <div class="md:hidden lg:hidden w-[200px] bg-orange bg-opacity-70 absolute inset-0 -top-8 -bottom-8 z-0"></div>

            <!-- Elemen snap container -->
            <div id="snapContainer" class="md:hidden lg:hidden px-20 flex gap-4 snap-proximity snap-x overflow-x-auto relative z-10">
                <a class="snap-center" href="#" target="_blank">
                    <div class="snap-item relative bg-white shadow-2xl overflow-hidden w-[170px] max-w-full transform transition-transform duration-300">
                        <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full max-w-full">
                        <div class="absolute right-0 top-20 translate-y py-1 bg-[#FF8A00] text-center rounded-l-full w-[50px]">
                            <p class="text-[8px] font-bold text-white">2022</p>
                        </div>
                        <div class="px-3 py-2">
                            <p class="font-bold text-[10px]">Judul Ide Innovillage</p>
                            <p class="font-light text-[8px] mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                        </div>
                        <div class="px-3 pb-1 text-[#FF8A00] flex gap-2 text-[10px]">
                            <span>Baca Selengkapnya</span>
                            <img src="{{ asset('assets/arrow-o.svg') }}" class="h-4">
                        </div>
                    </div>
                </a>
                <a class="snap-center" href="#" target="_blank">
                    <div class="snap-item relative bg-white shadow-2xl overflow-hidden w-[170px] max-w-full transform transition-transform duration-300">
                        <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full max-w-full">
                        <div class="absolute right-0 top-20 translate-y py-1 bg-[#FF8A00] text-center rounded-l-full w-[50px]">
                            <p class="text-[8px] font-bold text-white">2022</p>
                        </div>
                        <div class="px-3 py-2">
                            <p class="font-bold text-[10px]">Judul Ide Innovillage</p>
                            <p class="font-light text-[8px] mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                        </div>
                        <div class="px-3 pb-1 text-[#FF8A00] flex gap-2 text-[10px]">
                            <span>Baca Selengkapnya</span>
                            <img src="{{ asset('assets/arrow-o.svg') }}" class="h-4">
                        </div>
                    </div>
                </a>
                <a class="snap-center" href="#" target="_blank">
                    <div class="snap-item relative bg-white shadow-2xl overflow-hidden w-[170px] max-w-full transform transition-transform duration-300">
                        <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full max-w-full">
                        <div class="absolute right-0 top-20 translate-y py-1 bg-[#FF8A00] text-center rounded-l-full w-[50px]">
                            <p class="text-[8px] font-bold text-white">2022</p>
                        </div>
                        <div class="px-3 py-2">
                            <p class="font-bold text-[10px]">Judul Ide Innovillage</p>
                            <p class="font-light text-[8px] mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                        </div>
                        <div class="px-3 pb-1 text-[#FF8A00] flex gap-2 text-[10px]">
                            <span>Baca Selengkapnya</span>
                            <img src="{{ asset('assets/arrow-o.svg') }}" class="h-4">
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <!-- TABLET, PC -->
        <div class="hidden lg:grid md:grid grid-cols-3 gap-7 md:px-10 lg:px-28 justify-center ">
        
            <a href="#" target="_blank">
                <div class="relative bg-white shadow-2xl overflow-hidden w-[330px] max-w-full">
                    <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full max-w-full">

                    <div class="absolute right-0 top-28 translate-y py-1 bg-[#FF8A00] text-center rounded-l-full w-[70px]">
                        <p class="text-sm font-bold text-white">2022</p>
                    </div>

                    <div class="px-3 py-4">
                        <p class="text-sm font-bold">Judul Ide Innovillage</p>
                        <p class="text-sm font-light mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                    </div>

                    <div class="px-3 pb-4 text-[#FF8A00] flex gap-2 text-base">
                        <span>Baca Selengkapnya</span>
                        <img src="{{ asset('assets/arrow-o.svg') }}" class="h-7">
                    </div>
                </div>
            </a>

            <a href="#" target="_blank">
                <div class="relative bg-white shadow-2xl overflow-hidden w-[330px] max-w-full">
                    <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full max-w-full">

                    <div class="absolute right-0 top-28 translate-y py-1 bg-[#FF8A00] text-center rounded-l-full w-[70px]">
                        <p class="text-sm font-bold text-white">2022</p>
                    </div>

                    <div class="px-3 py-4">
                        <p class="text-sm font-bold">Judul Ide Innovillage</p>
                        <p class="text-sm font-light mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                    </div>

                    <div class="px-3 pb-4 text-[#FF8A00] flex gap-2 text-base">
                        <span>Baca Selengkapnya</span>
                        <img src="{{ asset('assets/arrow-o.svg') }}" class="h-7">
                    </div>
                </div>
            </a>

        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
        const snapContainer = document.getElementById('snapContainer');
        const snapItems = document.querySelectorAll('.snap-item');

        snapContainer.addEventListener('scroll', () => {
            snapItems.forEach(item => {
                const rect = item.getBoundingClientRect();
                const containerRect = snapContainer.getBoundingClientRect();

                // Cek apakah elemen berada di tengah viewport container
                if (
                    rect.left >= containerRect.left + containerRect.width / 4 &&
                    rect.right <= containerRect.right - containerRect.width / 4
                ) {
                    item.classList.add('scale-110'); // Membesar
                } else {
                    item.classList.remove('scale-110'); // Kembali normal
                }
            });
        });
    });
    </script>

</body>
</html>