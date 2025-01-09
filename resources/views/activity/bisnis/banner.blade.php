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
        <div class="absolute w-full bg-biru-sth h-[230px] lg:h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-[170px] md:h-[270px] lg:h-[350px] px-5 md:px-10 lg:px-28">

            <img class="w-full h-full object-cover rounded-[35px] sm:rounded-[40px] lg:rounded-[40px]"
                src="{{ asset('assets/bisnisbanner.png') }}" alt="">

            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extralight">
                    <p class="text-lg sm:text-xl md:text-4xl lg:text-6xl font-bold">Bisnis</p>
                    <p class="text-base sm:text-3xl md:text-3xl lg:text-3xl italic">Center of Excellence Smart Tourism & Hospitality</p>
                </div>
            </div>

        </div>

    </section>
</body>


</html>
