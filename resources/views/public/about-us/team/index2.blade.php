<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Tim</title>
</head>
<body>
<x-guest-layout>
    <div class="font-arial">
    @include('public.components.navbar')

    <section class="relative pt-28">
        <div class="absolute w-full bg-biru-sth h-[230px] lg:h-[340px] top-0 left-0 -z-10"></div>
        <div class="relative w-full h-[201px] md:h-[300px] lg:h-[450px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[30px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/images/aboutUs/btim.png') }}" alt="Gambar Tim">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extrabold -space-y-2 lg:space-y-3">
                    <p class="text-xl sm:text-4xl lg:text-[40px]">Center of Excellence</p>
                    <p class="text-xl sm:text-4xl lg:text-[50px]">Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>
    </section>
    <section class="px-5 sm:px-8 lg:px-28 py-5 sm:py-7 lg:py-10">
        <div class="text-xl md:text-4xl lg:text-5xl font-semibold text-center">
            <p>Tim CoE Smart Tourism & Hospitality</p>
        </div>
        <div class="text-base sm:text-lg lg:text-xl font-light text-justify pt-5 md:pt-10 lg:pt-10">
            <p>Tim kami terdiri dari dosen - dosen mahasiswa yang memiliki semangat luar biasa dan dedikasi tinggi untuk terus berinovasi, terutama dalam mendukung pengembangan sektor pariwisata dan perhotelan. Kami berkomitmen untuk menghadirkan ide-ide kreatif serta solusi-solusi yang relevan guna memajukan industri ini, melalui kolaborasi dan pemanfaatan teknologi terdepan yang dipelajari selama masa pendidikan kami.</p>
        </div>
    </section>
    <section class="w-full lg::pt-6 pb-28">
        <div class="px-5 md:px-10 lg:px-28">
            <div class="mx-auto mb-10 border-t-[1px] border-[#A9A9A9]"></div>
            <p class="mx-auto text-center text-xl md:text-2xl font-semibold">Tim Magang Kami</p>
        </div>
        
    </section>

        <script src="{{ asset('assets/js/navbar.js') }}"></script>
    </div>
</x-guest-layout>
</body>
</html>