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

    <section class=" w-full pt-10 pb-28 font-arial">
    <div class="px-5 md:px-10 lg:px-28">
        <div class="mx-auto mb-10 border-t-[1px] border-[#A9A9A9]"></div>

        <p class="mx-auto text-center text-xl md:text-2xl font-semibold">Tim Magang Kami</p>

        <div class="flex justify-center bg-white rounded-[15px] md:rounded-[30px] lg:rounded-[30px] lg:w-[639px] h-10 md:h-14 lg:h-14 mx-auto border border-[#5D5D5D] my-10 gap-14 text-sm font-semibold text-black">
            <button 
                id="inhouseButton" 
                class="text-[#FF8A00] font-semibold"
                onclick="showInhouse()">
                Anggota Internal
            </button>

            <div class="flex items-center">
                <div class="border-r-[1px] border-black h-7"></div> 
            </div>

            <button 
                id="anggotaButton" 
                class=""
                onclick="showAnggota()">
                Anggota Magang
            </button>
            
            <div class="flex items-center">
                <div class="border-r-[1px] border-black h-7"></div>
            </div>

            <button 
                id="alumniButton" 
                class=""
                onclick="alumniInhouse()">
                Alumni
            </button>
        </div>

        <!-- ANGGOTA COE-->
        <div
            id="inhouseSection"
            class="bg-gradient-to-b from-[#2593CF] from-85% to-[#134B69] to-100% rounded-[20px] sm:rounded-[30px] lg:rounded-[40px] shadow-2xl pt-10 pb-16 px-4 md:px-10 lg:px-20">
            
            <p class="text-xl md:text-2xl font-bold text-white text-center">INHOUSE</p>

            <!-- KETUA COE -->
            <div class="relative flex flex-col items-center justify-center pt-8">
                <div class="relative w-36 md:w-44 lg:w-52 mx-auto">
                    <div class="relative  md:w-52">
                        <img src="{{ asset('assets/images/bu-ersy.png') }}" alt="Ketua COE" class="rounded-lg ">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>

                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Dr. Ersy Ervina, S.Sos.MM.Par.</p>
                        <p class="text-pink-sth pt-1">Ketua COE STH</p>
                    </div>
                </div>
            </div>

            <!-- ANGGOTA COE -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 pt-10 gap-y-5 md:gap-y-3 lg:gap-6 items-center mx-auto">
                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/images/1-min.png') }}" alt="anggota" class="rounded-lg">
                        <div class="absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Dr. Ersy Ervina, S.Sos.MM.Par.</p>
                        <p class="text-pink-sth pt-1">Ketua COE STH</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

        <script src="{{ asset('assets/js/navbar.js') }}"></script>

    </div>
</x-guest-layout>


</body>
</html>