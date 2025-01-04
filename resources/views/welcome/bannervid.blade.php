<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="relative h-screen w-full overflow-hidden">
        <x-navigation />
        
        <video 
            class="absolute top-0 left-0 w-full h-full object-cover" 
            autoplay muted loop>
            <source src="{{asset('assets/videoo.mp4')}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="absolute inset-0 bg-black bg-opacity-70 m-auto"></div>
        <div class="relative text-center text-white flex flex-col justify-center mt-28 mx-11 sm:mx-30 lg:mx-40 h-full">
            <div class="font-bold ">
                <p class="text-[26px] sm:text-[33px] lg:text-4xl">Center of Excellence</p>
                <p class="text-[26px] sm:text-[33px] lg:text-[40px]">Smart Tourism & Hospitality</p>
            </div>

            <div class="pt-5 ">
                <p class="text-[15px] sm:text-lg lg:text-xl text-[#bbbbbb]">Tingkatkan pengalaman Anda dengan Smart Tourism dan Hospitality! Hemat waktu, jelajahi lebih banyak, dan rasakan kenyamanan teknologi.</p>
            </div>
        </div>
    </section>

</body>
</html>