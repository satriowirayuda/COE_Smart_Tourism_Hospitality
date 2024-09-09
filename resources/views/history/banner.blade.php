<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="relative">
        <div class="absolute w-full bg-biru-sth h-[340px] top-0 left-0 -z-10"></div>
        
        <div class="relative w-[1067px] h-[460px] top-28 mx-auto">
            <img class="w-full h-full rounded-[40px]" src="{{ asset('assets/bhomepage-o.png') }}" alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class=" text-center font-bold">
                    <p class="text-xl md:text-4xl lg:text-6xl">Center of Excellence</p>
                    <p class="text-2xl md:text-4xl lg:text-6xl">Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>

    </section>
</body>
</html>
