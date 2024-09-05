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
    <section class="px-36">
        <div class="py-48">
        <p class="text-3xl font-bold pb-10">Project Terkini</p>
        <div class="bg-gray-200 py-10 px-10 rounded-[22px] w-full flex flex-col sm:flex-row gap-x-14 shadow-xl">
  
            <div class="flex-1 content-center">
                <iframe class="w-full aspect-video rounded-[22px] shadow-2xl"
                    src="https://www.youtube.com/embed/-AqiQlznVnc"
                    allow="autoplay"
                    title="Youtube Video Player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
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

    <section class="w-full bg-background p-10 px-36 py-24">
        <div class="grid grid-cols-6 gap-16">
        <div class="col-span-4">
            <div class="pr-32 pb-3"><p class="text-3xl font-semibold ">Ketua RA Smart Tourism & Hospitality</p></div>
            <p class="text-xl pb-3">Dr. Ersy Ervina, S.Sos., MM. Par</p>
            <p class="text-xl text-justify font-light">Selamat datang di halaman resmi CoE Smart Tourism and Hospitality. Sebagai Ketua, saya bangga mempersembahkan kepada Anda sebuah platform yang menggabungkan kecerdasan, teknologi, dan keberlanjutan untuk mengubah lanskap pariwisata kita. Di sini, kami berkomitmen untuk memberikan layanan terbaik. Menjadikan pengalaman wisata yang tak terlupakan, sambil memajukan destinasi wisata ke tingkat baru.</p>
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
</body>
</html>