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
        <p class="text-4xl font-semibold">Kegiatan Riset apa saja yang dilakukan oleh COE Smart Tourism & Hospitality ?</p>
        <p class="text-sm">Centre of Excellence for Smart Tourism & Hospitality berkomitmen untuk memperkenalkan dunia penelitian yang inovatif dan berdampak. Dengan berpegang teguh pada prinsip keberlanjutan dan inovasi, kami berfokus pada penelitian dan pengembangan solusi cerdas yang mampu mengubah paradigma dalam industri pariwisata dan perhotelan.</p>
        <p class="text-sm">Dari analisis data untuk memahami perilaku konsumen hingga penerapan kecerdasan buatan dalam meningkatkan pengalaman wisatawan, kami senantiasa berinovasi dan menciptakan solusi mutakhir yang berperan penting dalam membentuk masa depan industri ini.</p>
        <p class="text-sm">Bersama, kita berkolaborasi untuk menciptakan arah baru dalam penelitian, menghubungkan teknologi dan perhotelan guna mewujudkan destinasi wisata yang lebih cerdas, inklusif, dan berkelanjutan bagi semua.</p>

        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-[110px] mb-10 text-justify">
        <div class="relative">
            <img src="{{asset('assets/ellips.png')}}" alt="" class="w-28 absolute top-5 right-0 z-0">
            <div class="pt-16">
                <p class="text-4xl font-semibold relative z-10">Beberapa hasil Penelitian dan Publikasi yang telah kami lakukan antara lain :</p>
                <p class="text-sm relative z-10 pt-6 space-y-5 ">Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.Terdapat beberapa inovasi yang telah kami lakukan untuk dapat mengembangkan pariwisata dan perhotelan.</p>
            </div>
        </div>
    </section>

    <section class="mx-[110px] mb-20 pt-8">
        <div class="flex justify-center space-x-5 gap-10">
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-14 py-4">
                    <p class="text-sm font-bold">Innovillage</p>
                    <p class="text-sm font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4">Selengkapnya</button>
            </div>
            
            <div class="text-center bg-white shadow-2xl rounded-2xl overflow-hidden w-[310px]">
                <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full rounded-t-2xl">
                <div class="px-14 py-4">
                    <p class="text-sm font-bold">Innovillage</p>
                    <p class="text-sm font-light">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                </div>
                <div class="border-t-[1px] border-[#D9D9D9]"></div>
                <button class="py-4">Selengkapnya</button>
            </div>
        </div>
    </section>


</body>
</html>