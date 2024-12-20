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
        <p class="text-4xl font-semibold">Kegiatan Inovasi apa saja yang dilakukan oleh COE Smart Tourism & Hospitality ?</p>
        <p class="text-xl font-light">Inovasi yang telah dilakukan oleh Center of Excellence Smart Tourism & Hospitality (CoE STH) mencakup beberapa proyek penting yang bertujuan untuk mengubah dan meningkatkan sektor pariwisata dan hospitality melalui teknologi dan pendekatan kreatif. Salah satu inovasi utama adalah pengembangan IHMS (Intelligent Hospitality Management System), sebuah sistem canggih yang dirancang untuk meningkatkan efisiensi operasional di industri hospitality. IHMS memanfaatkan teknologi terbaru untuk mempermudah manajemen sumber daya, pemantauan performa, serta memberikan pengalaman pengunjung yang lebih baik dan personal. Sistem ini tidak hanya membantu pengelola hotel atau destinasi wisata dalam mengelola operasional, tetapi juga menciptakan pengalaman yang lebih nyaman dan terintegrasi bagi para pengunjung, dengan menggunakan data dan analitik untuk meningkatkan layanan yang ditawarkan.</p>
        <p class="text-xl font-light">Selain IHMS, CoE STH juga berhasil merancang dan meluncurkan proyek LOTUS (Legacy of Traditional Unveiling Stories), sebuah instalasi multimedia yang menggabungkan teknologi AI untuk menyajikan sejarah budaya Kasepuhan Cirebon dengan cara yang inovatif dan interaktif. Proyek ini menggunakan teknologi proyeksi dan elemen multimedia lainnya untuk membawa pengunjung dalam sebuah perjalanan visual yang mendalam, memungkinkan mereka untuk lebih memahami dan merasakan kekayaan sejarah dan budaya Cirebon secara langsung. Dengan integrasi teknologi AI, setiap pengunjung dapat menikmati pengalaman yang lebih personal dan immersif, di mana cerita dan informasi yang disajikan dapat disesuaikan dengan minat mereka. Proyek LOTUS tidak hanya bertujuan untuk melestarikan warisan budaya, tetapi juga untuk mengubah cara kita berinteraksi dengan sejarah, menjadikannya lebih relevan dan menarik bagi generasi masa kini.
        </p>
        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-[110px] mb-10 text-justify">
        <div class="relative">
            <img src="{{asset('assets/ellips.png')}}" alt="" class="w-28 absolute top-5 right-0 z-0">
            <div class="pt-16">
                <p class="text-4xl font-semibold relative z-10">Beberapa hasil Inovasi yang telah kami lakukan antara lain :</p>
                <p class="text-xl relative z-10 pt-6 space-y-5 font-light">Beberapa inovasi yang telah dihasilkan oleh kami, yang merupakan hasil dari berbagai upaya penelitian mendalam, pengembangan teknologi mutakhir, serta penerapan solusi kreatif dalam berbagai bidang, telah membawa perubahan signifikan dan memberikan kontribusi positif terhadap sektor pariwisata dan hospitality. Inovasi-inovasi ini tidak hanya meningkatkan efisiensi operasional, tetapi juga menciptakan pengalaman yang lebih baik bagi pengguna dan masyarakat, sekaligus mendukung keberlanjutan dan perkembangan industri. Semua pencapaian tersebut, yang mencerminkan komitmen kami untuk selalu berinovasi dan memberikan dampak nyata, dapat dilihat sebagai berikut.</p>
            </div>
        </div>
    </section>

    <section class="mx-[110px] mb-20 pt-8">
        <div class="flex justify-center space-x-5 gap-10">
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-14 py-4">
                    <p class="text-sm font-bold">IHMS</p>
                    <p class="text-sm font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4"><a href="#">Selengkapnya</a></button>
            </div>
            
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-14 py-4">
                    <p class="text-sm font-bold">LOTUS</p>
                    <p class="text-sm font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4"><a href="#">Selengkapnya</a></button>
            </div>
        </div>
    </section>


</body>
</html>