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
        <div class="absolute w-full bg-biru-sth h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-72 lg:h-[446px] px-4 lg:px-28 mx-auto">

            <img class="w-full h-full object-cover rounded-[40px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/inovasibanner.png') }}" alt="">

            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extralight">
                    <p class="text-base sm:text-xl md:text-4xl lg:text-6xl font-bold">Inovasi</p>
                    <p class="text-3xl sm:text-3xl md:text-3xl lg:text-3xl italic">Center of Excellent Smart Tourism & Hospitality</p>
                </div>
            </div>

        </div>

    </section>
</body>


</html>
