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
        <p class="text-sm mt-32">CoE Smart Tourism & Hospitality mendukung pemberdayaan bisnis lokal melalui inovasi relevan dan berdampak. Fokus kami adalah meningkatkan kualitas layanan dan menciptakan nilai tambah berkelanjutan di sektor pariwisata, perhotelan, dan lainnya.</p>
        <p class="text-sm">Melalui program pendampingan dan pelatihan digital, kami bekerja sama dengan komunitas lokal untuk meningkatkan daya saing dan adaptasi bisnis terhadap perubahan pasar. Dengan teknologi cerdas dan strategi inovatif, kami membantu bisnis tumbuh, menciptakan destinasi wisata yang inklusif dan ramah lingkungan.</p>

        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-[110px] mb-10 text-justify">
        <div class="relative">
            <img src="{{asset('assets/ellips.png')}}" alt="" class="w-28 absolute top-5 right-0 z-0">
            <div class="pt-16">
                <p class="text-4xl font-semibold relative z-10">Beberapa hasil Bisnis yang telah kami lakukan antara lain :</p>
                <p class="text-sm relative z-10 pt-6 space-y-5 ">CoE Smart Tourism & Hospitality telah meluncurkan berbagai inovasi untuk mengembangkan sektor pariwisata dan perhotelan. Melalui program-program seperti Pelatihan Jurnal dan Kedai COE, kami berfokus pada peningkatan kapasitas dan penciptaan pengalaman baru yang berdampak positif bagi industri pariwisata.</p>
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