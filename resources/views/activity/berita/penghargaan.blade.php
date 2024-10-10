<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex bg-white rounded-[40px] h-14 mx-[110px] shadow-2xl my-10 pl-20 items-center gap-9 text-sm font-semibold text-black">
        <a href="#">Semua</a>
        <div class="border-r-[1px] border-black h-7"></div>
        <a href="#">Artikel</a>
        <div class="border-r-[1px] border-black h-7"></div>
        <a href="#" class="text-[#025D9F]">Penghargaan</a>
    </div>

    <section class="mx-[110px] mb-28 space-y-5">
    <div class="flex gap-4">
        <img src="{{ asset('assets/artikel-1.png')}}" alt="artikel" 
            class="w-[350px] h-[200px] rounded-[30px] shadow-2xl">

        <div class="bg-white shadow-2xl rounded-2xl px-7 py-4"> 

            <div class="flex gap-2">
                <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-36 h-8 rounded-md">
                    <img src="{{ asset('assets/calender-grey.svg') }}" alt="">
                    <p class="text-xs font-light">20 Agustus-2024</p>
                </div>
                    
                <div class=" text-center content-center text-xs font-light border border-[#D9D9D9] w-28 h-8 rounded-md">
                    <ul class="list-disc list-inside p-0 m-0">
                        <li>Penghargaan</li>
                    </ul>
                </div>
            </div>

            <div class="space-y-2 mt-3">
                <p class="text-xs font-bold pr-40">Telkom University Luncurkan Teknologi LOTUS, Ciptakan Video Hasil AI Mengangkat Sejarah Kasepuhan Cirebon</p>
                <p class="text-xs font-light">Kehadiran teknologi yang makin canggih seperti kecerdasan buatan (Artificial Intelligence/AI) dapat membantu manusia menciptakan produk yang unik salah satunya inovasi membuat video hasil AI.</p>

                <div class="flex gap-2 object-center text-base text-black">
                    <a href="#" target="_blank">Selengkapnya</a>
                    <img src="{{ asset('assets/arrow-b.svg') }}" class="h-7">
                </div>
            </div>

        </div>
    </div>

    <div class="flex gap-4">
        <img src="{{ asset('assets/artikel-1.png')}}" alt="artikel" 
            class="w-[350px] h-[200px] rounded-[30px] shadow-2xl">

        <div class="bg-white shadow-2xl rounded-2xl px-7 py-4"> 

            <div class="flex gap-2">
                <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-36 h-8 rounded-md">
                    <img src="{{ asset('assets/calender-grey.svg') }}" alt="">
                    <p class="text-xs font-light">20 Agustus-2024</p>
                </div>
                    
                <div class=" text-center content-center text-xs font-light border border-[#D9D9D9] w-28 h-8 rounded-md">
                    <ul class="list-disc list-inside p-0 m-0">
                        <li>Penghargaan</li>
                    </ul>
                </div>
            </div>

            <div class="space-y-2 mt-3">
                <p class="text-xs font-bold pr-40">Telkom University Luncurkan Teknologi LOTUS, Ciptakan Video Hasil AI Mengangkat Sejarah Kasepuhan Cirebon</p>
                <p class="text-xs font-light">Kehadiran teknologi yang makin canggih seperti kecerdasan buatan (Artificial Intelligence/AI) dapat membantu manusia menciptakan produk yang unik salah satunya inovasi membuat video hasil AI.</p>

                <div class="flex gap-2 object-center text-base text-black">
                    <a href="#" target="_blank">Selengkapnya</a>
                    <img src="{{ asset('assets/arrow-b.svg') }}" class="h-7">
                </div>
            </div>

        </div>
    </div>

    <div class="flex gap-4">
        <img src="{{ asset('assets/artikel-1.png')}}" alt="artikel" 
            class="w-[350px] h-[200px] rounded-[30px] shadow-2xl">

        <div class="bg-white shadow-2xl rounded-2xl px-7 py-4"> 

            <div class="flex gap-2">
                <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-36 h-8 rounded-md">
                    <img src="{{ asset('assets/calender-grey.svg') }}" alt="">
                    <p class="text-xs font-light">20 Agustus-2024</p>
                </div>
                    
                <div class=" text-center content-center text-xs font-light border border-[#D9D9D9] w-28 h-8 rounded-md">
                    <ul class="list-disc list-inside p-0 m-0">
                        <li>Penghargaan</li>
                    </ul>
                </div>
            </div>

            <div class="space-y-2 mt-3">
                <p class="text-xs font-bold pr-40">Telkom University Luncurkan Teknologi LOTUS, Ciptakan Video Hasil AI Mengangkat Sejarah Kasepuhan Cirebon</p>
                <p class="text-xs font-light">Kehadiran teknologi yang makin canggih seperti kecerdasan buatan (Artificial Intelligence/AI) dapat membantu manusia menciptakan produk yang unik salah satunya inovasi membuat video hasil AI.</p>

                <div class="flex gap-2 object-center text-base text-black">
                    <a href="#" target="_blank">Selengkapnya</a>
                    <img src="{{ asset('assets/arrow-b.svg') }}" class="h-7">
                </div>
            </div>

        </div>
    </div>

    <div class="flex gap-4">
        <img src="{{ asset('assets/artikel-1.png')}}" alt="artikel" 
            class="w-[350px] h-[200px] rounded-[30px] shadow-2xl">

        <div class="bg-white shadow-2xl rounded-2xl px-7 py-4"> 

            <div class="flex gap-2">
                <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-36 h-8 rounded-md">
                    <img src="{{ asset('assets/calender-grey.svg') }}" alt="">
                    <p class="text-xs font-light">20 Agustus-2024</p>
                </div>
                    
                <div class=" text-center content-center text-xs font-light border border-[#D9D9D9] w-28 h-8 rounded-md">
                    <ul class="list-disc list-inside p-0 m-0">
                        <li>Penghargaan</li>
                    </ul>
                </div>
            </div>

            <div class="space-y-2 mt-3">
                <p class="text-xs font-bold pr-40">Telkom University Luncurkan Teknologi LOTUS, Ciptakan Video Hasil AI Mengangkat Sejarah Kasepuhan Cirebon</p>
                <p class="text-xs font-light">Kehadiran teknologi yang makin canggih seperti kecerdasan buatan (Artificial Intelligence/AI) dapat membantu manusia menciptakan produk yang unik salah satunya inovasi membuat video hasil AI.</p>

                <div class="flex gap-2 object-center text-base text-black">
                    <a href="#" target="_blank">Selengkapnya</a>
                    <img src="{{ asset('assets/arrow-b.svg') }}" class="h-7">
                </div>
            </div>

        </div>
    </div>
        
    </section>
</body>
</html>