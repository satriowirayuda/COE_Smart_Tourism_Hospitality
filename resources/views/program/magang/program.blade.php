<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <section class="mx-5 md:mx-10 lg:mx-28 py-10 space-y-5 font-arial">
        <div class="text-center">
            <p class="font-semibold text-base sm:text-2xl lg:text-3xl">Program MBKM dan Magang di </p>
            <p class="font-semibold text-base sm:text-2xl lg:text-3xl">CoE Smart Tourism  & Hospitality</p>
        </div>
        <div class="flex gap-7 pt-6">
            <img class="w-80 h-100" src="{{asset('assets/uiux.png')}}" alt="Gambar Program">
            <div class="">
                <p class="font-semibold text-2xl">UI/UX Design</p>
                <div class="flex gap-2 my-3">
                    <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-24">D3 RPLA</p>
                    <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-24">D3 SIA</p>
                    <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-24">D3 TRM</p>
                </div>
                <p class="font-thin text-justify text-lg">UI/UX Design adalah bidang yang berfokus pada perancangan antarmuka (UI) dan pengalaman pengguna (UX) dalam produk digital seperti aplikasi atau website. UX Design memastikan produk mudah digunakan dan memberikan pengalaman yang menyenangkan, sementara UI Design menekankan pada tampilan visual yang menarik dan intuitif. Keduanya bekerja sama untuk menciptakan produk yang estetis sekaligus fungsional.</p>
                
                <div class="flex gap-3 mt-3">
                    <div class="font-semibold">Proyek Terkait:</div>
                    <div class="grid grid-cols-3 gap-2">
                        <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-auto px-3">Website CoE STH</p>
                        <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-auto px-3">Aplikasi SiLotus</p>
                        <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-auto px-3">IHKA</p>
                        <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-auto px-3">IHMS</p>
                        <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-auto px-3">Website RuteX</p>
                        <p class="text-center text-base border-[1.5px] border-[#A9A9A9] rounded-md w-auto px-3">Visualisasi Data</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>