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
                <p>Pengabdian Masyarakat apa saja yang dilakukan oleh</p>
                <p>Center of Excellence Smart Tourism & Hospitality ?</p>
            </div>
        </div>
        
        <p class="text-base sm:text-xl lg:text-xl font-light text-justify">Center of Excellence Smart Tourism & Hospitality (CoE STH) memegang teguh komitmen untuk berkontribusi secara nyata kepada masyarakat melalui program-program pengabdian yang dirancang untuk mendukung pemberdayaan komunitas lokal dan menciptakan dampak sosial yang berkelanjutan. Dengan mengusung pendekatan yang inklusif, CoE STH melibatkan berbagai pihak, mulai dari masyarakat setempat hingga pemangku kebijakan, dalam upaya meningkatkan kapasitas dan kualitas hidup komunitas lokal. Salah satu fokus utama pengabdian ini adalah mengadakan pelatihan intensif untuk UMKM lokal agar mereka mampu bersaing di era digital. Program ini mencakup pelatihan pemasaran digital, pengelolaan bisnis berbasis teknologi, hingga pengembangan produk lokal yang inovatif dan berdaya saing global. Selain itu, CoE STH juga memfasilitasi pelatihan manajemen pariwisata yang berkelanjutan, dengan tujuan untuk membantu pelaku usaha lokal dalam menciptakan model bisnis yang tidak hanya mendukung pertumbuhan ekonomi tetapi juga melestarikan lingkungan dan budaya.</p>
        <p class="pb-5 text-base sm:text-xl lg:text-xl font-light text-justify">Lebih jauh lagi, CoE STH juga memprioritaskan pelestarian budaya lokal sebagai bagian penting dari program pengabdiannya. Hal ini diwujudkan melalui kerja sama yang erat dengan komunitas adat, seniman, dan pelaku budaya untuk memperkenalkan nilai-nilai budaya tradisional ke dalam arus utama sektor pariwisata. Melalui inisiatif ini, CoE STH turut menggelar festival budaya, pameran seni, dan berbagai acara interaktif yang dirancang untuk meningkatkan apresiasi masyarakat terhadap warisan budaya mereka. Program ini tidak hanya menarik perhatian wisatawan tetapi juga membangun kebanggaan dan rasa memiliki pada komunitas lokal. Selain itu, CoE STH juga berperan sebagai mediator yang menjembatani kolaborasi antara pemerintah, pelaku usaha, dan masyarakat lokal untuk menciptakan ekosistem pariwisata yang inklusif, inovatif, dan berkelanjutan. Dengan upaya yang berkesinambungan ini, CoE STH berharap dapat memberikan dampak positif yang nyata, tidak hanya dalam aspek ekonomi tetapi juga dalam meningkatkan kesejahteraan dan kualitas hidup masyarakat secara keseluruhan.</p>

        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-5 md:mx-10 lg:mx-28 pt-10 font-arial">
        <p class="text-base sm:text-2xl lg:text-3xl font-semibold text-justify">Beberapa kegiatan Pengabdian Masyarakat yang telah CoE Smart Tourism & Hospitality lakukan</p>
        <p class="pt-6 text-base sm:text-xl lg:text-xl font-light text-justify">Beberapa inovasi yang telah dihasilkan oleh kami, yang merupakan hasil dari berbagai upaya penelitian mendalam, pengembangan teknologi mutakhir, serta penerapan solusi kreatif dalam berbagai bidang, telah membawa perubahan signifikan dan memberikan kontribusi positif terhadap sektor pariwisata dan hospitality. Inovasi-inovasi ini tidak hanya meningkatkan efisiensi operasional, tetapi juga menciptakan pengalaman yang lebih baik bagi pengguna dan masyarakat, sekaligus mendukung keberlanjutan dan perkembangan industri. Semua pencapaian tersebut, yang mencerminkan komitmen kami untuk selalu berinovasi dan memberikan dampak nyata, dapat dilihat sebagai berikut.</p>
    </section>

    <section class="mx-5 md:mx-10 lg:mx-28 pt-8 pb-20 font-arial">

        <div class="flex justify-center gap-10 sm:gap-12 lg:gap-14">

            <!-- INNOVILLAGE -->
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[175px] h-[240px] sm:w-[310px] sm:h-[340px] lg:w-[310px] lg:h-[340px] transform transition-transform duration-300 hover:scale-110">
                <a href="/innovillagedash">
                    <div class="w-[175px] h-[100px] sm:w-[310px] sm:h-[175px] lg:w-[310px] lg:h-[170px]">
                        <img src="{{ asset('assets/innovillage.png') }}" alt="" class="w-full h-full rounded-t-xl">
                    </div>
                    <div class="px-2 sm:px-4 lg:px-8 py-4 ">
                        <p class="text-xs sm:text-sm lg:text-sm font-bold line-clamp-1">Innovillage</p>
                        <p class="text-xs sm:text-sm lg:text-sm font-light line-clamp-3">Innovillage adalah sebuah konsep inovatif yang bertujuan untuk memajukan desa-desa di Indonesia</p>
                    </div>
                    <div class="border-t-[1px] border-[#D9D9D9]"></div>
                    <button class="py-3 sm:py-3 lg:py-4 font-arial text-xs sm:text-base lg:text-base"><a href="/innovillagedash">Selengkapnya</a></button>
                </a>
            </div>

            <!-- IHKA -->
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[175px] h-[240px] sm:w-[310px] sm:h-[340px] lg:w-[310px] lg:h-[340px] transform transition-transform duration-300 hover:scale-110">
                <a href="/ihkadash">
                    <div class="w-[175px] h-[100px] sm:w-[310px] sm:h-[175px] lg:w-[310px] lg:h-[170px]">
                        <img src="{{ asset('assets/ihka.png') }}" alt="" class="w-full h-full rounded-t-xl">
                    </div>
                    <div class="px-2 sm:px-4 lg:px-8 py-4 ">
                        <p class="text-xs sm:text-sm lg:text-sm font-bold line-clamp-1">IHKA</p>
                        <p class="text-xs sm:text-sm lg:text-sm font-light line-clamp-3">Indonesian HouseKeepers Association merupakan sebuah asosiasi yang mewadahi para Hotelier</p>
                    </div>
                    <div class="border-t-[1px] border-[#D9D9D9]"></div>
                    <button class="py-3 sm:py-3 lg:py-4 font-arial text-xs sm:text-base lg:text-base"><a href="/ihkadash">Selengkapnya</a></button>
                </a>
                
            </div>
        </div>

    </section>
</body>
</html>