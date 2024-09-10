<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="px-4 sm:px-8 lg:px-28 pt-10">
        <!-- <hr class="h-[20px] bg-indigo-500 border-0 rounded-full mb-10"> -->
        <div class="border-t-[1px] border-black"></div>
        <div class="py-10">
            <div class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-center">
                <p>Visi dan Misi</p>
                <p>COE Smart Tourism & Hospitality</p>
            </div>
            <div class="flex flex-col lg:flex-row gap-y-6 lg:gap-x-6 py-10 text-white">
                <div class="flex-1 py-10 px-6 sm:px-8 lg:px-10 bg-gradient-to-b from-[#ff8a00] to-[#995300] rounded-lg">
                    <p class="text-3xl sm:text-4xl lg:text-5xl font-semibold">Visi</p>
                    <p class="font-paragraf-sth text-[16px] sm:text-[18px] font-bold pt-8">Menjadi Research Center
                        pariwisata dan hospitality unggul berbasis teknologi informasi dan komunikasi.</p>
                </div>
                <div class="flex-1 py-10 px-6 sm:px-8 lg:px-10 bg-gradient-to-b from-[#2593CF] to-[#134B69] rounded-lg">
                    <p class="text-3xl sm:text-4xl lg:text-5xl font-semibold">Misi</p>
                    <div class="font-paragraf-sth text-[16px] sm:text-[18px] font-bold pt-8">
                        <ol class="list-decimal px-4 sm:px-6">
                            <li>Meningkatkan kualitas produk dan layanan pariwisata dan hospitality melalui
                                digitalisasi, teknologi, dan inovasi terkini.</li>
                            <li>Menjalin kerjasama dan kolaborasi lintas sektor demi memajukan sektor pariwisata
                                Indonesia yang berkelanjutan.</li>
                            <li>Memajukan Sumber Daya Manusia (SDM) di bidang pariwisata dan hospitality melalui
                                penelitian dan pelatihan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
