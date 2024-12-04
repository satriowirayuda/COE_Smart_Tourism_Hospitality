<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex bg-white rounded-[15px] md:rounded-[30px] lg:rounded-[40px] h-10 md:h-14 lg:h-14 mx-5 lg:mx-[110px] shadow-2xl my-10 pl-10 md:pl-15 lg:pl-20 items-center gap-9 text-sm font-semibold text-black">
        <a href="{{url('berita/semua')}}" class="text-[#025D9F]">Semua</a>
        <div class="border-r-[1px] border-black h-7"></div>
        <a href="{{url('berita/artikel')}}">Artikel</a>
        <div class="border-r-[1px] border-black h-7"></div>
        <a href="{{url('berita/penghargaan')}}">Penghargaan</a>
    </div>

    <section class="mx-5 md:mx-5 lg:mx-[110px] mb-28 space-y-5 font-lota1">
        <div class="flex gap-2 md:gap-4 lg:gap-4">
            <div class="w-[460px] h-[120px] md:w-[560px] md:h-[160px] lg:w-[560px] lg:h-[200px] rounded-xl lg:rounded-2xl shadow-2xl overflow-hidden">
            <img src="{{ asset('assets/artikel-2.png')}}" alt="artikel" 
                class="w-full h-full object-cover">
            </div>
  
            <div class="bg-white shadow-2xl rounded-xl lg:rounded-2xl px-2 md:px-7 lg:px-7 py-4"> 

                <div class="flex gap-2">
                    <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-24 md:w-[130px] lg:w-36 h-6 md:h-8 lg:h-8 rounded-md">
                        <img class="w-4 md:w-6 lg:w-8" src="{{ asset('assets/calender-grey.svg') }}" alt="">
                        <p class="text-[8px] md:text-[10px] lg:text-xs font-light">20 Agustus-2024</p>
                    </div>
                        
                    <div class=" text-center content-center text-[8px] md:text-[10px] lg:text-xs font-light border border-[#D9D9D9] w-12 md:w-16 lg:w-20 h-6 md:h-8 lg:h-8 rounded-md">
                        <ul class="list-disc list-inside p-0 m-0">
                            <li>Artikel</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-1 mt-2 md:mt-3 lg:mt-3">
                    <p class="text-[8px] md:text-[10px] lg:text-xs font-bold line-clamp-1">Telkom University Luncurkan Teknologi LOTUS, Ciptakan Video Hasil AI Mengangkat Sejarah Kasepuhan Cirebon</p>
                    <p class="text-[8px] md:text-[10px] lg:text-xs font-light line-clamp-2">Kehadiran teknologi yang makin canggih seperti kecerdasan buatan (Artificial Intelligence/AI) dapat membantu manusia menciptakan produk yang unik salah satunya inovasi membuat video hasil AI.</p>

                    <div class="flex gap-2 object-center text-[10px] md:text-sm lg:text-base text-black">
                        <a href="#" target="_blank">Selengkapnya</a>
                        <img src="{{ asset('assets/arrow-b.svg') }}" class="h-4 md:h-6 lg:h-7">
                    </div>
                </div>

            </div>
        </div>

        <div class="flex gap-2 md:gap-4 lg:gap-4">
            <div class="w-[460px] h-[120px] md:w-[560px] md:h-[160px] lg:w-[560px] lg:h-[200px] rounded-xl lg:rounded-2xl shadow-2xl overflow-hidden">
            <img src="{{ asset('assets/artikel-2.png')}}" alt="artikel" 
                class="w-full h-full object-cover">
            </div>
  
            <div class="bg-white shadow-2xl rounded-xl lg:rounded-2xl px-2 md:px-7 lg:px-7 py-4"> 

                <div class="flex gap-2">
                    <div class="flex gap-1 items-center justify-center border border-[#D9D9D9] w-24 md:w-[130px] lg:w-36 h-6 md:h-8 lg:h-8 rounded-md">
                        <img class="w-4 md:w-6 lg:w-8" src="{{ asset('assets/calender-grey.svg') }}" alt="">
                        <p class="text-[8px] md:text-[10px] lg:text-xs font-light">20 Agustus-2024</p>
                    </div>
                        
                    <div class=" text-center content-center text-[8px] md:text-[10px] lg:text-xs font-light border border-[#D9D9D9] w-12 md:w-16 lg:w-20 h-6 md:h-8 lg:h-8 rounded-md">
                        <ul class="list-disc list-inside p-0 m-0">
                            <li>Artikel</li>
                        </ul>
                    </div>
                </div>

                <div class="space-y-1 mt-2 md:mt-3 lg:mt-3">
                    <p class="text-[8px] md:text-[10px] lg:text-xs font-bold line-clamp-1">Telkom University Luncurkan Teknologi LOTUS, Ciptakan Video Hasil AI Mengangkat Sejarah Kasepuhan Cirebon</p>
                    <p class="text-[8px] md:text-[10px] lg:text-xs font-light line-clamp-2">Kehadiran teknologi yang makin canggih seperti kecerdasan buatan (Artificial Intelligence/AI) dapat membantu manusia menciptakan produk yang unik salah satunya inovasi membuat video hasil AI.</p>

                    <div class="flex gap-2 object-center text-[10px] md:text-sm lg:text-base text-black">
                        <a href="#" target="_blank">Selengkapnya</a>
                        <img src="{{ asset('assets/arrow-b.svg') }}" class="h-4 md:h-6 lg:h-7">
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>