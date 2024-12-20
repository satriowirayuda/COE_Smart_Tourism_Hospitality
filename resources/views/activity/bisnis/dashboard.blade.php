<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <section class="mx-[110px] pt-24 space-y-5 text-justify">
        <img src="{{ asset('assets/subtract.png')}}" alt="" class="w-16 ml-8">
        <p class="text-4xl font-semibold">Kegiatan Bisnis apa saja yang dilakukan oleh COE Smart Tourism & Hospitality ?</p>
        <p class="text-xl  font-light mt-32">Bisnis yang telah dilakukan oleh Center of Excellence Smart Tourism & Hospitality (CoE STH) mencakup dua inisiatif utama yang dirancang untuk mendukung perkembangan sektor pariwisata dan hospitality, serta memberikan dampak positif kepada masyarakat dan industri secara keseluruhan. Salah satunya adalah Rumah Jurnal, sebuah platform yang didirikan dengan tujuan untuk memfasilitasi publikasi riset, artikel ilmiah, dan kajian mendalam di bidang pariwisata dan hospitality. Rumah Jurnal berperan penting sebagai wadah bagi para akademisi, peneliti, dan praktisi industri untuk berbagi pengetahuan dan temuan penelitian yang dapat digunakan untuk mengembangkan kebijakan yang lebih baik dan solusi inovatif dalam mengelola sektor pariwisata. Melalui publikasi yang relevan dan berkualitas, Rumah Jurnal juga diharapkan dapat menjadi referensi utama dalam bidang ini, mendorong terjadinya kemajuan dan pengembangan berkelanjutan yang bermanfaat bagi seluruh pihak yang terlibat.
        </p>
        <p class="text-xl font-light">Di sisi lain, CoE STH juga mengembangkan Kedai CoE sebagai bisnis yang bertujuan untuk menciptakan ruang interaktif bagi pengunjung sambil memperkenalkan berbagai produk dan layanan yang berkaitan dengan pariwisata dan budaya. Kedai CoE tidak hanya menawarkan berbagai produk lokal yang mencerminkan kekayaan budaya Indonesia, tetapi juga menyediakan tempat bagi masyarakat untuk merasakan pengalaman langsung yang berhubungan dengan pengembangan sektor pariwisata yang berkelanjutan. Selain sebagai ruang untuk menikmati produk-produk lokal, Kedai CoE juga berfungsi sebagai tempat yang memfasilitasi pemberdayaan ekonomi lokal, dengan mendukung UMKM dan kerajinan tangan daerah untuk dipromosikan lebih luas. Inisiatif ini sejalan dengan visi CoE STH dalam memajukan industri pariwisata yang inklusif, berkelanjutan, dan memberikan dampak positif yang signifikan bagi komunitas lokal. Dengan menghubungkan budaya lokal, produk inovatif, dan pelestarian lingkungan, Kedai CoE menjadi titik pertemuan yang memperkuat ekonomi lokal dan memperkaya pengalaman pengunjung dalam menjelajahi potensi pariwisata.</p>

        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-[110px] mb-10 text-justify">
        <div class="relative">
            <img src="{{asset('assets/ellips.png')}}" alt="" class="w-28 absolute top-5 right-0 z-0">
            <div class="pt-16">
                <p class="text-4xl font-semibold relative z-10">Beberapa hasil Bisnis yang telah kami lakukan antara lain :</p>
                <p class="text-xl font-light relative z-10 pt-6 space-y-5 ">Beberapa bisnis yang telah dilakukan, yang mencakup berbagai upaya strategis dan inisiatif untuk mendorong pertumbuhan sektor pariwisata dan hospitality, serta menciptakan peluang bagi pemberdayaan masyarakat dan industri lokal, di antaranya melibatkan pengembangan platform berbasis penelitian dan publikasi serta pengelolaan ruang usaha yang mendukung integrasi budaya dan ekonomi lokal. Inisiatif-inisiatif ini dirancang untuk memberikan dampak positif jangka panjang dan mendukung visi besar kami dalam menciptakan solusi inovatif yang relevan dengan kebutuhan zaman, sekaligus memberikan pengalaman yang bermanfaat bagi pengunjung dan masyarakat sekitar. Semua pencapaian ini dapat dijelaskan sebagai berikut.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-[110px] mb-20 pt-8">
        <div class="flex justify-center space-x-5 gap-10">
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-14 py-4">
                    <p class="text-sm font-bold">Pelatihan Jurnal</p>
                    <p class="text-sm font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4"><a href="#">Selengkapnya</a></button>
            </div>
            
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-14 py-4">
                    <p class="text-sm font-bold">Kedai COE</p>
                    <p class="text-sm font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4"><a href="#">Selengkapnya</a></button>
            </div>
        </div>
    </section>


</body>
</html>