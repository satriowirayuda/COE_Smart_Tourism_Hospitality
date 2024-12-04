<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="relative pt-28">
    <x-white-navigation />
        <div class="absolute w-full bg-biru-sth h-[200px] lg:h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-48 md:h-[300px] lg:h-[446px] px-5 md:px-10 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[40px]"
                src="{{ asset('assets/briset.png') }}" alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extralight">
                    <p class="font-lota2 text-2xl md:text-4xl lg:text-6xl font-bold">Riset dan Publikasi</p>
                    <p class="font-lota1 text-base md:text-3xl lg:text-3xl italic">Center of Excellent Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>

    </section>
</body>


</html>
