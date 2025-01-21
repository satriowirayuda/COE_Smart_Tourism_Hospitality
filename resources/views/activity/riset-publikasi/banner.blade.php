<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="relative pt-28 font-arial">
    <x-white-navigation />
        <div class="absolute w-full bg-biru-sth h-[200px] lg:h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-[181px] md:[300px] lg:h-[350px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[40px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/briset.png') }}" alt="">

            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center">
                    <p class="text-xl sm:text-xl md:text-4xl lg:text-6xl font-bold">Riset dan Publikasi</p>
                    <p class="text-sm sm:text-lg md:text-2xl lg:text-4xl font-thin">Center of Excellence Smart Tourism & Hospitality</p>
                </div>
            </div>

        </div>

    </section>
</body>


</html>
