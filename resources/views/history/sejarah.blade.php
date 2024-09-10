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
        <div class="text-3xl sm:text-4xl lg:text-5xl font-semibold text-center">
            <p>Sejarah COE</p>
            <p>Smart Tourism & Hospitality</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-7 py-10 gap-6">
            <div class="lg:col-span-5">
                <p class="font-paragraf-sth text-base sm:text-lg lg:text-xl font-light text-justify">
                    Selamat datang di pusat keunggulan (Center of Excellence - CoE) Smart Tourism and Hospitality! Di
                    era di mana teknologi memainkan peran sentral dalam semua aspek kehidupan, industri pariwisata dan
                    perhotelan tidak terkecuali. Kami berkomitmen untuk menjadi garda terdepan dalam menggabungkan
                    inovasi teknologi dengan pengalaman pariwisata dan perhotelan yang unggul. Visi dan misi kami tidak
                    hanya tentang menciptakan destinasi yang cerdas secara teknologi, tetapi juga memberikan pengalaman
                    yang tak terlupakan bagi.
                </p>
                <p class="font-paragraf-sth text-base sm:text-lg lg:text-xl font-light text-justify mt-4">
                    Selamat datang di pusat keunggulan (Center of Excellence - CoE) Smart Tourism and Hospitality! Di
                    era di mana teknologi memainkan peran sentral dalam semua aspek kehidupan, industri pariwisata dan
                    perhotelan tidak terkecuali. Kami berkomitmen untuk menjadi garda terdepan dalam menggabungkan
                    inovasi teknologi dengan pengalaman pariwisata dan perhotelan yang unggul. Visi dan misi kami tidak
                    hanya tentang menciptakan destinasi yang cerdas secara teknologi, tetapi juga memberikan pengalaman
                    yang tak terlupakan bagi.
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
