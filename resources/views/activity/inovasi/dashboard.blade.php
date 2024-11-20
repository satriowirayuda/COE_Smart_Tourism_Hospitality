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
        <p class="text-sm">Dalam CoE Smart Tourism & Hospitality, kami menghadirkan inovasi yang mendorong perubahan dan memperkuat daya saing. Dengan fokus pada solusi yang praktis dan terukur, kami merancang dan mengimplementasikan teknologi cerdas yang mendukung transformasi dalam industri pariwisata dan perhotelan.</p>
        <p class="text-sm">Dari pengembangan aplikasi digital yang mempersonalisasi pengalaman wisatawan hingga penerapan teknologi ramah lingkungan yang mendukung keberlanjutan, kami menciptakan solusi inovatif yang memberikan dampak nyata dan berkelanjutan.</p>
        <p class="text-sm">Bersama-sama, kami menavigasi arah baru dalam inovasi yang menghubungkan teknologi dengan keramahan, menciptakan destinasi yang lebih cerdas, inklusif, dan berdaya guna bagi semua.</p>

        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-[110px] mb-10 text-justify">
        <div class="relative">
            <img src="{{asset('assets/ellips.png')}}" alt="" class="w-28 absolute top-5 right-0 z-0">
            <div class="pt-16">
                <p class="text-4xl font-semibold relative z-10">Beberapa hasil Inovasi yang telah kami lakukan antara lain :</p>
                <p class="text-sm relative z-10 pt-6 space-y-5 ">Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.</p>
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