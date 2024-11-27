<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="px-5 sm:px-8 lg:px-28 pt-10">
        <div class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-center font-lota1">
            <p>Sejarah COE</p>
            <p>Smart Tourism & Hospitality</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-7 py-10 gap-6">
            <div class="lg:col-span-5 font-lota1">
                <p class="font-paragraf-sth text-base sm:text-lg lg:text-xl font-light text-justify">
                CoE Smart Tourism and Hospitality didirikan pada bulan Maret 2024 sebagai salah satu unit strategis di Universitas Telkom. Unit ini dibentuk untuk mendukung kegiatan Research, Innovation, Business, and Community Service (RIBCS) di bidang pariwisata dan perhotelan berbasis teknologi digital. Dengan berfokus pada riset, inovasi, bisnis, dan pengabdian masyarakat, CoE ini bertujuan untuk menyumbang, menyebarluaskan, dan berkontribusi dalam perkembangan ilmu pengetahuan, teknologi, manajemen, dan seni.
                </p>
                <p class="font-paragraf-sth text-base sm:text-lg lg:text-xl font-light text-justify mt-4">
                CoE ini berperan sebagai penghubung antara akademisi, pemerintah, industri, operator, dan pengguna jasa dalam menciptakan kajian akademik yang relevan, baik di tingkat nasional maupun internasional. Selain itu, CoE turut menjadi pemasok pemikiran strategis dalam pengembangan sektor pariwisata dan hospitality yang berkelanjutan di Indonesia melalui pendekatan kolaboratif lintas sektor.
                </p>
            </div>

            <div class="lg:col-span-2 flex justify-center items-center">
                <img class="w-[180px] sm:w-[200px] lg:w-[235px] h-[220px] sm:h-[250px] lg:h-[285px]"
                    src="{{ asset('assets/logo.png') }}" alt="">
            </div>
        </div>
    </section>
</body>

</html>
