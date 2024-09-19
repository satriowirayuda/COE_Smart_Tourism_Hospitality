<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="relative pt-28 m-auto">
        <div class="absolute w-full bg-biru-sth h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-72 lg:h-[446px] px-28 mx-auto">
            <img src="{{ asset('assets/artikel-2.png') }}" alt="artikel"
                class="w-full h-full object-cover rounded-[40px] sm:rounded-[30px] lg:rounded-[40px]">

            <div>
                <div class="absolute top-4 left-40 bg-biru-sth w-36 h-8 text-center content-center rounded-lg text-base text-white font-semibold">
                    <p>Berita Terkini</p>
                </div>
                
                <div class="absolute text-white left-40 bottom-10 space-y-3">
                    <div class="flex gap-1 items-center justify-center bg-[#D9D9D9] bg-opacity-25 w-[154px] h-[35px] rounded-xl">
                        <img src="{{ asset('assets/calender.svg') }}" alt="">
                        <p class="text-xs font-semibold">21, December 2023</p>
                    </div>
                    <div>
                        <p class="text-base font-bold ">Telkom University Luncurkan Teknologi</p>
                        <p class="text-base font-bold ">Ciptakan Video Hasil AI Mengangkat Sejarah Kasepuhan Cirebon</p>
                    </div>
                </div>

                <div class="absolute bottom-10 right-40 bg-biru-sth bg-opacity-50 w-40 h-8 flex gap-2 items-center justify-center rounded-lg text-base text-white font-semibold">
                    <a href="#" target="_blank">Selengkapnya</a>
                    <img src="{{ asset('assets/arrow-ford.svg') }}" class="h-7">
                </div>
            </div>
           
        </div>
    </section>
</body>


</html>
