<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <section class="mx-5 md:mx-10 lg:mx-[110px] pt-5 lg:pt-24 space-y-5 text-justify">
        <img src="{{ asset('assets/subtract.png')}}" alt="" class="w-8 md:w-14 lg:w-16 ml-8">
        <p class="font-lota1 font-semibold text-xl md:text-3xl lg:text-4xl">Kegiatan Riset apa saja yang dilakukan oleh COE Smart Tourism & Hospitality ?</p>
        <p class="font-lota1 font-light text-xl lg:text-lg">Center of Excellence Smart Tourism & Hospitality (CoE STH) telah melaksanakan berbagai kegiatan riset dan publikasi yang bertujuan untuk mendorong kemajuan sektor pariwisata dan hospitality, baik di tingkat lokal maupun global. Salah satu pencapaian signifikan adalah partisipasi aktif dalam ajang Innovillage, yang berfokus pada pengembangan inovasi desa wisata berbasis teknologi untuk meningkatkan daya tarik dan pengelolaan destinasi wisata. Dalam konteks ini, CoE STH berperan dalam merancang solusi kreatif dan aplikatif yang mendukung pemberdayaan masyarakat lokal serta pengelolaan sumber daya alam secara berkelanjutan.</p>
        <p class="font-lota1 font-light text-xl lg:text-lg">Selain itu, CoE STH juga berkomitmen dalam menghasilkan publikasi ilmiah melalui berbagai jurnal penelitian yang membahas isu-isu terkini dalam industri pariwisata dan hospitality. Topik-topik yang diangkat meliputi pemanfaatan teknologi digital dalam pengalaman wisata, pengembangan destinasi wisata berbasis komunitas, serta strategi untuk meningkatkan kualitas layanan dan keberlanjutan dalam sektor pariwisata. Dengan kontribusi ini, CoE STH tidak hanya berperan sebagai pusat riset, tetapi juga sebagai katalisator yang menghubungkan antara pengetahuan akademik dan praktik industri, guna mendukung pertumbuhan sektor pariwisata yang inovatif dan berkelanjutan.
        </p>

        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-5 md:mx-10 lg:mx-[110px] mb-10 text-justify">
        <div class="relative">
            <img src="{{asset('assets/ellips.png')}}" alt="" class="w-14 md:w-20 lg:w-28 absolute top-5 right-0 z-0">
            <div class="pt-16 font-lota1">
                <p class="font-semibold text-xl md:text-3xl lg:text-4xl relative z-10">Beberapa hasil Penelitian dan Publikasi yang telah kami lakukan antara lain :</p>
                <p class="font-light text-sm md:text-lg g:text-lg relative z-10 pt-6 space-y-5 ">Beberapa hasil yang pernah kami lakukan, yang mencakup berbagai upaya yang telah kami rancang, laksanakan, dan evaluasi dengan penuh komitmen, serta berbagai pencapaian signifikan dalam pengembangan proyek dan inisiatif yang kami jalankan, dapat kami paparkan sebagai berikut. Hasil-hasil ini mencerminkan dedikasi kami untuk memberikan kontribusi yang nyata dan berkelanjutan dalam bidang yang kami tekuni, serta menunjukkan capaian kami dalam menciptakan dampak positif yang luas, baik di tingkat lokal maupun global.
                </p>
            </div>
        </div>
    </section>

    <section class="flex justify-center items-center mx-5 md:mx-10 lg:mx-[110px] mb-20 pt-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 place-items-center gap-7 md:gap-5 lg:gap-10">
            
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden max-w-[310px] w-full sm:w-[90%] md:w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="font-lota1 px-5 md:px-14 lg:px-14 py-4">
                    <p class="text-sm font-bold">Innovillage</p>
                    <p class="text-sm font-light line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="font-lota1 py-4">Selengkapnya</button>
            </div>

            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden max-w-[310px] w-full sm:w-[90%] md:w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="font-lota1 px-5 md:px-14 lg:px-14 py-4">
                    <p class="text-sm font-bold">Innovillage</p>
                    <p class="text-sm font-light line-clamp-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="font-lota1 py-4">Selengkapnya</button>
            </div>

        </div>
    </section>




</body>
</html>