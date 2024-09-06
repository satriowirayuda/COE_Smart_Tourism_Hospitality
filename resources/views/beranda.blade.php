<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="relative bg-cover bg-center h-screen" style="background-image: url('{{ asset('assets/bhomepage.png') }}')">
        <div class="absolute inset-0 bg-black bg-opacity-70"></div>
        <div class="relative text-center text-white flex flex-col justify-center items-center h-full">
            <div class="font-bold">
                <p class="text-6xl">Center of Excellence</p>
                <p class="text-7xl">Smart Tourism & Hospitality</p>
            </div>
            <div class="px-[300px] pt-5">
                <p class="text-xl text-[#BBBBBB]">Tingkatkan pengalaman Anda dengan Smart Tourism dan Hospitality! Hemat waktu, jelajahi lebih banyak, dan rasakan kenyamanan teknologi.</p>
            </div>
        </div>
    </section>

    <section class="w-full bg-background p-10 px-36 py-24">
        <div class="grid grid-cols-6 gap-16">
        <div class="col-span-4">
            <div class="pr-32 pb-3"><p class="text-4xl font-semibold ">Ketua RA Smart Tourism & Hospitality</p></div>
            <p class="font-paragraf-sth text-xl pb-3">Dr. Ersy Ervina, S.Sos., MM. Par</p>
            <p class="font-paragraf-sth text-xl text-justify font-light">Selamat datang di halaman resmi CoE Smart Tourism and Hospitality. Sebagai Ketua, saya bangga mempersembahkan kepada Anda sebuah platform yang menggabungkan kecerdasan, teknologi, dan keberlanjutan untuk mengubah lanskap pariwisata kita. Di sini, kami berkomitmen untuk memberikan layanan terbaik. Menjadikan pengalaman wisata yang tak terlupakan, sambil memajukan destinasi wisata ke tingkat baru.</p>
        </div>
        <div class="col-span-2 flex items-center justify-epy">
            <img src="{{ asset('assets/sementara_bu-ersy.png') }}" alt="" class="w-80">
        </div>
        </div>

        <div class="grid grid-cols-2 gap-14 pt-20">
            <!-- Inovasi -->
            <div class="relative group">
                <img src="{{ asset('assets/aktivitas.png') }}" alt="Inovasi" class="w-[512px] h-auto object-cover shadow-2xl">
                <div class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-[274.29px] h-[33.41px] rounded-md bg-[#2593CF] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                    Inovasi
                </div>
                <a href="#inovasi" class="absolute inset-0"></a>
            </div>
            <!-- Bisnis -->
            <div class="relative group">
                <img src="{{ asset('assets/aktivitas.png') }}" alt="Inovasi" class="w-[512px] h-auto object-cover shadow-2xl">
                <div class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-[274.29px] h-[33.41px] rounded-md bg-[#E20A91] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                Bisnis
                </div>
                <a href="#bisnis" class="absolute inset-0"></a>
            </div>

            <!-- Riset dan Publikasi -->
            <div class="relative group">
                <img src="{{ asset('assets/aktivitas.png') }}" alt="Inovasi" class="w-[512px] h-auto object-cover shadow-2xl">
                <div class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-[274.29px] h-[33.41px] rounded-md bg-[#F6A11F] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                    Riset dan Publikasi
                </div>
                <a href="#risetdanpublikasi" class="absolute inset-0"></a>
            </div>

            <!-- Pengabdian Masyarakat -->
            <div class="relative group">
                <img src="{{ asset('assets/aktivitas.png') }}" alt="Inovasi" class="w-[512px] h-auto object-cover shadow-2xl">
                <div class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-[274.29px] h-[33.41px] rounded-md bg-[#21A652] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                    Pengabdian Masyarakat
                </div>
                <a href="#PengabdianMasyarakat" class="absolute inset-0"></a>
            </div>
        </div>
    </section>

    <section class="px-36">
        <div class="pt-40">
        <p class="text-3xl font-bold pb-10">Project Terkini</p>
        <div class="bg-gray-200 py-10 px-10 rounded-[22px] w-full flex flex-col sm:flex-row gap-x-14 shadow-xl">
  
            <div class="flex-1 content-center">
                <iframe class="w-full aspect-video rounded-[22px] shadow-2xl"
                    src="https://www.youtube.com/embed/-AqiQlznVnc"
                    allow="autoplay"
                    title="Youtube Video Player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="flex-1">
                <p class="text-3xl font-bold">LOTUS</p>
                <p class="text-xl py-2 mt-3 font-light">
                Pusat unggulan yang memfasilitasi penelitian, pelatihan, konsultansi, solusi inovasi dan digitalisasi dalam ranah pariwisata dan hospitality. Pusat unggulan yang memfasilitasi penelitian, pelatihan, konsultansi, solusi inovasi dan digitalisasi dalam ranah.
                </p>
                <a href="https://youtu.be/-AqiQlznVnc?si=S2mWJIbaTCrZVyO1" target="_blank" class="underline">
                    <button class="bg-biru-sth rounded-[30px] underline text-putih-sth px-5 py-1 pb-2 mt-3">
                        Lihat di Youtube
                        <i class="fas fa-arrow-right ml-1"></i>
                    </button>
                </a>
            </div>
        </div>
        </div>
    </section>

    <section class="px-36 py-40">
        <div class="grid grid-cols-2 gap-x-24">
            <div class="grid-cols-1">
                <p class="text-4xl font-bold drop-shadow-5xl text-center pb-10">News</p>

                <!-- <div class="">
                    <img class="w-[500.95px] rounded-[15px]"  src="{{ asset('assets/artikel.png') }}" alt="Berita">
                </div> -->


                <div class="relative">
                    <div class="rounded-[15px] overflow-hidden">
                        
                        <img src="{{ asset('assets/artikel.png') }}" alt="Berita" class=" rounded-[15px] w-[500.95px] h-auto">
                        <div class="absolute inset-0 bg-black bg-opacity-30 rounded-[15px]"></div>

                        <div class="text-white absolute top-0 right-0 p-5 text-base">
                            <a href="#" target="_blank">
                                Selengkapnya
                                <i class="fas fa-arrow-right ml-1"></i>
                            </a>
                        </div>

                        <div class="absolute bottom-0 left-0 w-full text-white p-5">
                            <p class="text-4xl font-bold">Judul Berita</p>
                            <p class="text-base">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div  class="grid-cols-1">
                <p class="text-4xl font-bold text-center drop-shadow-5xl pb-10">Timeline</p>
                <div class="mr-0">
                <div>
                    <p class="text-[13px] italic font-bold mb-2">Event LKM</p>
                    <table class="w-full table-auto mb-3">

                        <thead>
                        <tr class="text-[13px] bg-[#626262] text-white">
                            <th class="text-left py-2 pl-6">ID</th>
                            <th class="text-left py-2 px-2 w-48 ">Event Name</th>
                            <th class="text-left py-2 px-2">Start Date</th>
                            <th class="text-left py-2 px-2">End Date</th>
                        </tr>
                        </thead>
                        
                        <tr class=" text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Sosialisasi Pengumpulan Berkas Magang Genap 23-24</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        <tr class="text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Webinar Career Hack & Sosialisasi Magang Seven Inc</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        <tr class="text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Sosialisasi Magang 1 & 2 Semester TA 2024/2025</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        <tr class="text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Sosialisasi Pengumpulan Berkas Magang Ganjil 23-24</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        </div>
                    </table>
                </div>
                <div>
                    <p class="text-[13px] italic font-bold mb-2">Event External</p>
                    <table class="w-full table-auto">

                        <thead>
                        <tr class="text-[13px] bg-[#626262] text-white">
                            <th class="text-left py-2 pl-6">ID</th>
                            <th class="text-left py-2 px-2 w-48 ">Event Name</th>
                            <th class="text-left py-2 px-2">Start Date</th>
                            <th class="text-left py-2 px-2">End Date</th>
                        </tr>
                        </thead>
                        
                        <tr class=" text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Sosialisasi Pengumpulan Berkas Magang Genap 23-24</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        <tr class="text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Webinar Career Hack & Sosialisasi Magang Seven Inc</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        <tr class="text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Sosialisasi Magang 1 & 2 Semester TA 2024/2025</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        <tr class="text-[9px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                            <td class="py-1 pl-6"></td>
                            <td class="py-1 px-2">Sosialisasi Pengumpulan Berkas Magang Ganjil 23-24</td>
                            <td class="py-1 px-2">22 May 2024</td>
                            <td class="py-1 px-2">22 May 2024</td>
                        </tr>
                        </div>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
</body>

<footer class="w-full bg-[#2593CF] text-white pb-28">
    <div class="grid grid-cols-3 px-36 pt-16 gap-16">
        <div class="grid-cols-1">
            <p class="text-xl font-semibold">Center of Excellence Smart Tourism & Hotpitality</p>
            <p class="text-sm pt-7 pr-8">Jl. Telekomunikasi No.01, Terusan Buahbatu</p>
        </div>
        <div class="grid-cols-1">
            <p class="text-xl font-semibold">Akses Cepat</p>
            <div class="text-sm pt-[55px] space-y-3">
                <p><a href="#">Home</a></p>
                <p><a href="#">Tentang Kami</a></p>
                <p><a href="#">Aktivitas</a></p>
                <p><a href="#">Program</a></p>
            </div>
        </div>
        <div class="grid-cols-1">
            <p class="text-xl font-semibold">Kontak</p>
            <div class="flex space-x-3 pt-[55px]">
                <a href="" target="_blank">
                    <img src="{{ asset('assets/Call-Button.svg') }}" alt="Telepon" class="w-[40px] h-[40px]">
                </a>
                <a href="" target="_blank">
                    <img src="{{ asset('assets/Facebook-Button.svg') }}" alt="Facebook" class="w-[40px] h-[40px]">
                </a>
                <a href="https://www.instagram.com/coe_smarttourism/" target="_blank">
                    <img src="{{ asset('assets/IG-Button.svg') }}" alt="Instagram" class="w-[40px] h-[40px]">
                </a>
                <a href="" target="_blank">
                    <img src="{{ asset('assets/Linked-In-Button.svg') }}" alt="LinkedIn" class="w-[40px] h-[40px]">
                </a>
            </div>
        </div>
    </div>
</footer>
</html>