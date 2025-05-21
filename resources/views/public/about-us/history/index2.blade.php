<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
</head>
<body>
    <x-guest-layout>
    <div class="font-arial">
    @include('public.components.navbar')
    <section class="relative pt-28">
        <div class="absolute w-full bg-biru-sth h-[230px] lg:h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-[201px] md:h-[300px] lg:h-[450px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[30px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/images/aboutUs/bsejarah.png') }}" alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extrabold -space-y-2 lg:space-y-3">
                    <p class="text-xl sm:text-4xl lg:text-[40px]">Center of Excellence</p>
                    <p class="text-xl sm:text-4xl lg:text-[50px]">Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>
    </section>

    <section class="px-5 sm:px-8 lg:px-28 py-5 sm:py-7 lg:py-10">
        <div class="text-xl md:text-4xl lg:text-5xl font-semibold text-center">
            <p>Sejarah CoE</p>
            <p>Smart Tourism & Hospitality</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-7 py-10 gap-6">
            <div class="lg:col-span-5 font-light">
                <p class="text-base sm:text-lg lg:text-xl font-light text-justify">
                CoE Smart Tourism and Hospitality didirikan pada bulan Maret 2024 sebagai salah satu unit strategis di Universitas Telkom. Unit ini dibentuk untuk mendukung kegiatan Research, Innovation, Business, and Community Service (RIBCS) di bidang pariwisata dan perhotelan berbasis teknologi digital. Dengan berfokus pada riset, inovasi, bisnis, dan pengabdian masyarakat, CoE ini bertujuan untuk menyumbang, menyebarluaskan, dan berkontribusi dalam perkembangan ilmu pengetahuan, teknologi, manajemen, dan seni.
                </p>
                <p class="text-base sm:text-lg lg:text-xl font-light text-justify mt-4">
                CoE ini berperan sebagai penghubung antara akademisi, pemerintah, industri, operator, dan pengguna jasa dalam menciptakan kajian akademik yang relevan, baik di tingkat nasional maupun internasional. Selain itu, CoE turut menjadi pemasok pemikiran strategis dalam pengembangan sektor pariwisata dan hospitality yang berkelanjutan di Indonesia melalui pendekatan kolaboratif lintas sektor.
                </p>
            </div>

            <div class="lg:col-span-2 flex justify-center items-center">
                <img class="w-[180px] sm:w-[200px] lg:w-[235px] h-[220px] sm:h-[250px] lg:h-[285px]"
                    src="{{ asset('assets/images/aboutUs/logo.png') }}" alt="">
            </div>
        </div>
    </section>

    <section class="px-4 sm:px-8 lg:px-28">
        <div class="border-t-[1px] border-black"></div>
        <div class="py-10">
            <div class="text-xl md:text-4xl lg:text-5xl font-semibold text-center">
                <p>Visi dan Misi</p>
                <p>CoE Smart Tourism & Hospitality</p>
            </div>
            <div class="flex flex-col lg:flex-row gap-y-6 lg:gap-x-6 py-10 text-white">
                <div class="flex-1 py-10 px-6 sm:px-8 lg:px-10 bg-gradient-to-b from-[#ff8a00] to-[#995300] rounded-lg">
                    <p class="text-3xl sm:text-4xl lg:text-5xl font-semibold">Visi</p>
                    <p class="text-[16px] sm:text-[18px] font-semibold pt-8">Menjadi pusat unggulan  riset, inovasi, bisnis dan pengabdian masyarakat  bidang pariwisata dan hospitality berlandaskan entrepreneurship dengan berbasis teknologi informasi dan komunikasi di tahun 2028.</p>
                </div>
                <div class="flex-1 py-10 px-6 sm:px-8 lg:px-10 bg-gradient-to-b from-[#2593CF] to-[#134B69] rounded-lg">
                    <p class="text-3xl sm:text-4xl lg:text-5xl font-semibold">Misi</p>
                    <div class="text-[16px] sm:text-[18px] font-semibold pt-8">
                        <ol class="list-decimal px-4 sm:px-6">
                            <li>Melaksanakan riset, inovasi, bisnis dan pengabdian masyarakat di bidang pariwisata dan hospitality berbasis digitalitasi dan teknologi</li>
                            <li>Mengembangkan kompetensi Sumber Daya Manusia di bidang pariwisata dan hospitality</li>
                            <li>Menjalin kerjasama dan kolaborasi lintas sektor demi memajukan sektor pariwisata Indonesia yang berkelanjutan.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    
</x-guest-layout>
</body>
</html>