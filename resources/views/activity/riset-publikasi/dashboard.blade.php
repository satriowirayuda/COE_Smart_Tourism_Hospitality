<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <section class="mx-5 md:mx-10 lg:mx-28 pt-10 space-y-5 font-arial">
        <div class="flex gap-2 sm:gap-3 lg:gap-5">
            <img src="{{ asset('assets/subtract.png')}}" alt="" class="w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14">
            <div class="text-base sm:text-2xl lg:text-3xl font-semibold">
                <p>Kegiatan Riset apa saja yang dilakukan oleh</p>
                <p>Center of Excellence Smart Tourism & Hospitality ?</p>
            </div>
        </div>

        <p class="text-base sm:text-xl lg:text-xl font-light text-justify ">Center of Excellence Smart Tourism & Hospitality (CoE STH) memiliki komitmen kuat dalam mendukung kemajuan sektor pariwisata dan hospitality melalui pengembangan publikasi ilmiah yang berkualitas. Sebagai pusat riset terkemuka, CoE STH secara konsisten menghasilkan berbagai jurnal penelitian yang membahas isu-isu terkini dalam industri ini. Publikasi tersebut mencakup berbagai topik penting, seperti pemanfaatan teknologi digital untuk menciptakan pengalaman wisata yang lebih menarik dan interaktif, pengembangan destinasi wisata berbasis komunitas yang memberdayakan masyarakat lokal, serta strategi untuk meningkatkan kualitas layanan dan mendukung keberlanjutan di sektor pariwisata.</p>

        <p class="pb-5 text-base sm:text-xl lg:text-xl font-light text-justify">Melalui publikasi-publikasi ini, CoE STH berupaya tidak hanya untuk memperkaya literatur akademik, tetapi juga untuk menciptakan dampak nyata bagi industri. Dengan menghubungkan pengetahuan teoritis dengan kebutuhan praktis, CoE STH berperan sebagai katalisator yang mempertemukan akademisi, praktisi, dan pemangku kepentingan lainnya. Tujuannya adalah untuk mendorong pertumbuhan sektor pariwisata yang lebih inovatif, berdaya saing, dan berkelanjutan, sehingga mampu memberikan kontribusi signifikan bagi perkembangan ekonomi dan budaya, baik di tingkat lokal maupun global.</p>
        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-5 md:mx-10 lg:mx-28 pt-10 font-arial">
        <p class="text-base sm:text-2xl lg:text-3xl font-semibold text-justify">Beberapa hasil Penelitian dan Publikasi yang telah kami lakukan antara lain :</p>
        <p class="pt-6 text-base sm:text-xl lg:text-xl font-light text-justify">Beberapa hasil yang pernah kami lakukan, yang mencakup berbagai upaya yang telah kami rancang, laksanakan, dan evaluasi dengan penuh komitmen, serta berbagai pencapaian signifikan dalam pengembangan proyek dan inisiatif yang kami jalankan, dapat kami paparkan sebagai berikut. Hasil-hasil ini mencerminkan dedikasi kami untuk memberikan kontribusi yang nyata dan berkelanjutan dalam bidang yang kami tekuni, serta menunjukkan capaian kami dalam menciptakan dampak positif yang luas, baik di tingkat lokal maupun global.</p>
    </section>

    <section class="mx-5 md:mx-10 lg:mx-28 pt-8 pb-20 font-arial">
        <div class="flex justify-center gap-10 sm:gap-12 lg:gap-14">

            <!-- JURNAL PENELITIAN -->
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[175px] h-[240px] sm:w-[310px] sm:h-[340px] lg:w-[310px] lg:h-[340px] transform transition-transform duration-300 hover:scale-110">
                <a href="/jurnaldash">
                    <div class="w-[175px] h-[100px] sm:w-[310px] sm:h-[175px] lg:w-[310px] lg:h-[170px]">
                        <img src="{{ asset('assets/jurnalpenelitian.png') }}" alt="" class="w-full h-full rounded-t-xl">
                    </div>
                    <div class="px-2 sm:px-4 lg:px-8 py-4">
                        <p class="text-xs sm:text-sm lg:text-sm font-bold line-clamp-1">Jurnal Penelitian</p>
                        <p class="text-xs sm:text-sm lg:text-sm font-light line-clamp-3">Beberapa penelitian yang telah dilaksanakan oleh tim CoE Smart Tourism & Hospitality</p>
                    </div>
                    <div class="border-t-[1px] border-[#D9D9D9]"></div>
                    <button class="py-3 sm:py-3 lg:py-4 font-arial text-xs sm:text-base lg:text-base"><a href="/jurnaldash">Selengkapnya</a></button>
                </a>
            </div>

            <!-- KALAU ADA YANG BARU TAMBAH DISINI -->

        </div>
        
    </section>
</body>
</html>