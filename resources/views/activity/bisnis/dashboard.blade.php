<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <section class="mx-5 md:mx-10 lg:mx-28 pt-10 space-y-5 text-justify font-arial">
        <div class="flex gap-2 sm:gap-3 lg:gap-5">
            <img src="{{ asset('assets/subtract.png')}}" alt="" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
            <p class="mr-5 sm:mr-32 lg:mr-80 text-lg sm:text-3xl lg:text-4xl font-semibold">Bisnis apa saja yang dilakukan oleh CoE Smart Tourism & Hospitality ?</p>
        </div>
        <p class="text-base sm:text-xl lg:text-xl font-light mt-32">Bisnis yang telah dilakukan oleh Center of Excellence Smart Tourism & Hospitality (CoE STH) mencakup dua inisiatif utama yang dirancang untuk mendukung perkembangan sektor pariwisata dan hospitality, serta memberikan dampak positif kepada masyarakat dan industri secara keseluruhan. Salah satunya adalah Rumah Jurnal, sebuah platform yang didirikan dengan tujuan untuk memfasilitasi publikasi riset, artikel ilmiah, dan kajian mendalam di bidang pariwisata dan hospitality. Rumah Jurnal berperan penting sebagai wadah bagi para akademisi, peneliti, dan praktisi industri untuk berbagi pengetahuan dan temuan penelitian yang dapat digunakan untuk mengembangkan kebijakan yang lebih baik dan solusi inovatif dalam mengelola sektor pariwisata. Melalui publikasi yang relevan dan berkualitas, Rumah Jurnal juga diharapkan dapat menjadi referensi utama dalam bidang ini, mendorong terjadinya kemajuan dan pengembangan berkelanjutan yang bermanfaat bagi seluruh pihak yang terlibat.
        </p>
        <p class="text-base sm:text-xl lg:text-xl font-light pb-3 sm:pb-7 lg:pb-14">Di sisi lain, CoE STH juga mengembangkan Kedai CoE sebagai bisnis yang bertujuan untuk menciptakan ruang interaktif bagi pengunjung sambil memperkenalkan berbagai produk dan layanan yang berkaitan dengan pariwisata dan budaya. Kedai CoE tidak hanya menawarkan berbagai produk lokal yang mencerminkan kekayaan budaya Indonesia, tetapi juga menyediakan tempat bagi masyarakat untuk merasakan pengalaman langsung yang berhubungan dengan pengembangan sektor pariwisata yang berkelanjutan. Selain sebagai ruang untuk menikmati produk-produk lokal, Kedai CoE juga berfungsi sebagai tempat yang memfasilitasi pemberdayaan ekonomi lokal, dengan mendukung UMKM dan kerajinan tangan daerah untuk dipromosikan lebih luas. Inisiatif ini sejalan dengan visi CoE STH dalam memajukan industri pariwisata yang inklusif, berkelanjutan, dan memberikan dampak positif yang signifikan bagi komunitas lokal. Dengan menghubungkan budaya lokal, produk inovatif, dan pelestarian lingkungan, Kedai CoE menjadi titik pertemuan yang memperkuat ekonomi lokal dan memperkaya pengalaman pengunjung dalam menjelajahi potensi pariwisata.</p>

        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-5 md:mx-10 lg:mx-28 mb-10 text-justify font-arial">
        <div class="relative">
            <!-- <img src="{{asset('assets/ellips.png')}}" alt="" class="w-28 absolute top-5 right-0 z-0"> -->
            <div class="pt-6 sm:pt-10 lg:pt-16">
                <p class="text-lg sm:text-3xl lg:text-4xl font-semibold">Beberapa hasil Bisnis yang telah kami lakukan antara lain :</p>
                <p class="text-base sm:text-xl lg:text-xl font-light pt-6 space-y-5 ">Beberapa bisnis yang telah dilakukan, yang mencakup berbagai upaya strategis dan inisiatif untuk mendorong pertumbuhan sektor pariwisata dan hospitality, serta menciptakan peluang bagi pemberdayaan masyarakat dan industri lokal, di antaranya melibatkan pengembangan platform berbasis penelitian dan publikasi serta pengelolaan ruang usaha yang mendukung integrasi budaya dan ekonomi lokal. Inisiatif-inisiatif ini dirancang untuk memberikan dampak positif jangka panjang dan mendukung visi besar kami dalam menciptakan solusi inovatif yang relevan dengan kebutuhan zaman, sekaligus memberikan pengalaman yang bermanfaat bagi pengunjung dan masyarakat sekitar. Semua pencapaian ini dapat dijelaskan sebagai berikut.
                </p>
            </div>
        </div>
    </section>            

    <section class="mx-5 md:mx-10 lg:mx-28 mb-20 pt-8">
        <div class="flex justify-center gap-10 sm:gap-12 lg:gap-14">

            <div class="text-center bg-white shadow-2xl rounded-xl overflow-hidden w-[175px] h-[240px] sm:w-[310px] sm:h-[340px] lg:w-[310px] lg:h-[340px]">
                <a href="/pelatihandash">
                    <div class="w-[175px] h-[100px] sm:w-[310px] sm:h-[175px] lg:w-[310px] lg:h-[170px]">
                        <img src="{{ asset('assets/rumahjurnal.png') }}" alt="" class="w-full h-full rounded-t-xl">
                    </div>
                    <div class="px-2 sm:px-4 lg:px-8 py-4 font-arial">
                        <p class="text-xs sm:text-sm lg:text-sm font-bold line-clamp-1">Rumah Jurnal</p>
                        <p class="text-xs sm:text-sm lg:text-sm font-light line-clamp-3">Rumah Jurnal merupakan penyedia layanan jasa dalam pendampingan penyusunan artikel ilmiah</p>
                    </div>
                    <div class="border-t-[1px] border-[#D9D9D9]"></div>
                    <button class="py-3 sm:py-3 lg:py-4 font-arial text-xs sm:text-base lg:text-base"><a href="/pelatihandash">Selengkapnya</a></button>
                </a>
            </div>

            <div class="text-center bg-white shadow-2xl rounded-xl overflow-hidden w-[175px] h-[240px] sm:w-[310px] sm:h-[340px] lg:w-[310px] lg:h-[340px]">
                <a href="/kedaidash">
                    <div class="w-[175px] h-[100px] sm:w-[310px] sm:h-[175px] lg:w-[310px] lg:h-[170px]">
                        <img src="{{ asset('assets/kedaicoe.png') }}" alt="" class="w-full h-full rounded-t-xl">
                    </div>
                    <div class="px-2 sm:px-4 lg:px-8 py-4 font-arial">
                        <p class="text-xs sm:text-sm lg:text-sm font-bold line-clamp-1">Kedai CoE</p>
                        <p class="text-xs sm:text-sm lg:text-sm font-light line-clamp-3">Kedai CoE adalah solusi tepat ketika lapar, menyajikan hidangan lezat, bergizi, dan mendukung produk lokal serta UMKM.</p>
                    </div>
                    <div class="border-t-[1px] border-[#D9D9D9]"></div>
                    <button class="py-3 sm:py-3 lg:py-4 font-arial text-xs sm:text-base lg:text-base"><a href="/kedaidash">Selengkapnya</a></button>
                </a>
            </div>
            
        </div>
    </section>

</body>
</html>