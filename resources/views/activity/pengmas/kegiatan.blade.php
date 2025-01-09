<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <section class="mx-[110px] pt-16 space-y-5 text-justify">

        <div class="flex gap-5">
            <img src="{{ asset('assets/subtract.png')}}" alt="" class="w-14 h-14">
            <p class="text-4xl font-semibold">Kegiatan Pengabdian Masyarakat apa saja yang dilakukan oleh COE Smart Tourism & Hospitality ?</p>
        </div>

        <p class="text-xl font-light">Center of Excellence Smart Tourism & Hospitality (CoE STH) memegang teguh komitmen untuk berkontribusi secara nyata kepada masyarakat melalui program-program pengabdian yang dirancang untuk mendukung pemberdayaan komunitas lokal dan menciptakan dampak sosial yang berkelanjutan. Dengan mengusung pendekatan yang inklusif, CoE STH melibatkan berbagai pihak, mulai dari masyarakat setempat hingga pemangku kebijakan, dalam upaya meningkatkan kapasitas dan kualitas hidup komunitas lokal. Salah satu fokus utama pengabdian ini adalah mengadakan pelatihan intensif untuk UMKM lokal agar mereka mampu bersaing di era digital. Program ini mencakup pelatihan pemasaran digital, pengelolaan bisnis berbasis teknologi, hingga pengembangan produk lokal yang inovatif dan berdaya saing global. Selain itu, CoE STH juga memfasilitasi pelatihan manajemen pariwisata yang berkelanjutan, dengan tujuan untuk membantu pelaku usaha lokal dalam menciptakan model bisnis yang tidak hanya mendukung pertumbuhan ekonomi tetapi juga melestarikan lingkungan dan budaya.</p>
        <p class="pb-10 text-xl font-light">Lebih jauh lagi, CoE STH juga memprioritaskan pelestarian budaya lokal sebagai bagian penting dari program pengabdiannya. Hal ini diwujudkan melalui kerja sama yang erat dengan komunitas adat, seniman, dan pelaku budaya untuk memperkenalkan nilai-nilai budaya tradisional ke dalam arus utama sektor pariwisata. Melalui inisiatif ini, CoE STH turut menggelar festival budaya, pameran seni, dan berbagai acara interaktif yang dirancang untuk meningkatkan apresiasi masyarakat terhadap warisan budaya mereka. Program ini tidak hanya menarik perhatian wisatawan tetapi juga membangun kebanggaan dan rasa memiliki pada komunitas lokal. Selain itu, CoE STH juga berperan sebagai mediator yang menjembatani kolaborasi antara pemerintah, pelaku usaha, dan masyarakat lokal untuk menciptakan ekosistem pariwisata yang inklusif, inovatif, dan berkelanjutan. Dengan upaya yang berkesinambungan ini, CoE STH berharap dapat memberikan dampak positif yang nyata, tidak hanya dalam aspek ekonomi tetapi juga dalam meningkatkan kesejahteraan dan kualitas hidup masyarakat secara keseluruhan.
        </p>
        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-[110px] mb-10 text-justify">
        <div class="relative">
            <div class="pt-16">
                <p class="text-4xl font-semibold relative z-10">Beberapa kegiatan Pengabdian Masyarakat yang telah CoE Smart Tourism & Hospitality lakukan</p>
                <p class="text-xl relative z-10 pt-6 space-y-5 font-light">Beberapa inovasi yang telah dihasilkan oleh kami, yang merupakan hasil dari berbagai upaya penelitian mendalam, pengembangan teknologi mutakhir, serta penerapan solusi kreatif dalam berbagai bidang, telah membawa perubahan signifikan dan memberikan kontribusi positif terhadap sektor pariwisata dan hospitality. Inovasi-inovasi ini tidak hanya meningkatkan efisiensi operasional, tetapi juga menciptakan pengalaman yang lebih baik bagi pengguna dan masyarakat, sekaligus mendukung keberlanjutan dan perkembangan industri. Semua pencapaian tersebut, yang mencerminkan komitmen kami untuk selalu berinovasi dan memberikan dampak nyata, dapat dilihat sebagai berikut.</p>
            </div>
        </div>
    </section>

    <section class="mx-[110px] mb-20 pt-8">
        <div class="flex justify-center space-x-5 gap-10">
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-6 py-4">
                    <p class="text-sm font-bold">IHKA</p>
                    <p class="text-sm font-light line-clamp-3">Indonesian HouseKeepers Association merupakan sebuah asosiasi yang mewadahi para Hotelier</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4"><a href="#">Selengkapnya</a></button>
            </div>
            
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-6 py-4">
                    <p class="text-sm font-bold">Innovillage</p>
                    <p class="text-sm font-light line-clamp-3">Innovillage adalah sebuah konsep inovatif yang bertujuan untuk memajukan desa-desa di Indonesia</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4 hover:bg-black"><a href="#">Selengkapnya</a></button>
            </div>
        </div>
    </section>


</body>
</html>