<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="max-w-[1050px] w-full mx-auto py-20">
        <div class="relative">
            <img src="{{ asset('assets/img.png')}}" alt="" class="w-[635px] z-0">
            <div class="w-[500px] h-[300px] bg-orange bg-opacity-70 text-white py-10 px-5 absolute z-0 top-10 right-0">
                <p class="font-bold text-2xl">Innovillage</p>
                <p class="text-xl pt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
            </div>
        </div>
    </section>

    <section class="max-w-[1050px] mx-auto mb-20 pt-8">
        <div class="flex justify-center gap-7">
            <a href="#" target="_blank">
                <div class="relative bg-white shadow-2xl overflow-hidden w-[330px]">
                    <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full">

                    <div class="absolute right-0 top-40 translate-y py-2 bg-[#FF8A00] text-center rounded-l-full w-[100px]">
                        <p class="text-sm font-bold text-white">2022</p>
                    </div>

                    <div class="px-3 py-4">
                        <p class="text-sm font-bold">Judul Ide Innovillage</p>
                        <p class="text-sm font-light mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                    </div>

                    <div class="px-3 pb-4 text-[#FF8A00] flex gap-2 text-base">
                        <span>Baca Selengkapnya</span>
                        <img src="{{ asset('assets/arrow-o.svg') }}" class="h-7">
                    </div>
                </div>
            </a>

            
            
            <a href="#" target="_blank">
                <div class="relative bg-white shadow-2xl overflow-hidden w-[330px]">
                    <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full">

                    <div class="absolute right-0 top-40 translate-y py-2 bg-[#FF8A00] text-center rounded-l-full w-[100px]">
                        <p class="text-sm font-bold text-white">2023</p>
                    </div>

                    <div class="px-3 py-4">
                        <p class="text-sm font-bold">Judul Ide Innovillage</p>
                        <p class="text-sm font-light mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                    </div>

                    <div class="px-3 pb-4 text-[#FF8A00] flex gap-2 text-base">
                        <span>Baca Selengkapnya</span>
                        <img src="{{ asset('assets/arrow-o.svg') }}" class="h-7">
                    </div>
                </div>
            </a>

            <a href="#" target="_blank">
                <div class="relative bg-white shadow-2xl overflow-hidden w-[330px]">
                    <img src="{{ asset('assets/img-innovilage.png') }}" alt="" class="w-full">

                    <div class="absolute right-0 top-40 translate-y py-2 bg-[#FF8A00] text-center rounded-l-full w-[100px]">
                        <p class="text-sm font-bold text-white">2024</p>
                    </div>

                    <div class="px-3 py-4">
                        <p class="text-sm font-bold">Judul Ide Innovillage</p>
                        <p class="text-sm font-light mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                    </div>

                    <div class="px-3 pb-4 text-[#FF8A00] flex gap-2 text-base">
                        <span>Baca Selengkapnya</span>
                        <img src="{{ asset('assets/arrow-o.svg') }}" class="h-7">
                    </div>
                </div>
            </a>
        </div>
    </section>
</body>
</html>