<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <section class="mx-[110px] pt-10 space-y-5 text-justify font-arial">
        <div class="flex gap-5">
            <img src="{{ asset('assets/subtract.png')}}" alt="" class="w-14 h-14">
            <div class="text-lg sm:text-2xl lg:text-3xl font-semibold">
                <p>Inovasi apa saja yang dilakukan oleh</p>
                <p>Center of Excellence Smart Tourism & Hospitality ?</p>
            </div>
            
        </div>
        <p class="text-xl font-light">Center of Excellence Smart Tourism & Hospitality (CoE STH) terus menunjukkan komitmennya dalam menghadirkan inovasi yang relevan dan berdampak di sektor pariwisata dan hospitality. Inovasi yang dikembangkan berlandaskan pada prinsip keberlanjutan dan berorientasi pada kebutuhan masyarakat serta perkembangan industri di era modern. Fokus utama dari inovasi ini adalah menciptakan solusi kreatif dan aplikatif yang mampu menjawab tantangan industri, sekaligus memberikan kontribusi nyata dalam memperkuat daya saing dan efisiensi sektor pariwisata.</p>
        <p class="text-xl font-light">Dalam setiap inovasinya, CoE STH mengadopsi pendekatan yang integratif, menghubungkan pengetahuan akademik dengan praktik industri, serta mendorong kolaborasi aktif antara berbagai pemangku kepentingan. Pendekatan ini tidak hanya dirancang untuk meningkatkan kualitas layanan, tetapi juga untuk memberdayakan komunitas lokal dan mendorong pengelolaan destinasi wisata yang berkelanjutan. Dengan demikian, inovasi yang dihadirkan tidak hanya bersifat teknis, tetapi juga berkontribusi pada pembangunan sosial dan ekonomi masyarakat.</p>
        <p  class="text-xl font-light pb-10">Sebagai pusat unggulan dalam pariwisata dan hospitality, CoE STH percaya bahwa inovasi adalah kunci utama untuk menciptakan ekosistem pariwisata yang inklusif, dinamis, dan adaptif terhadap perubahan. Dengan inovasi yang berfokus pada keberlanjutan dan pemberdayaan, CoE STH terus mendukung pengembangan sektor pariwisata yang mampu bersaing di tingkat lokal maupun global, sekaligus menciptakan dampak positif bagi generasi mendatang.</p>
        <div class="border-t-[1px] border-black"></div>
    </section>
    
    <section class="mx-[110px] pt-10 mb-10 text-justify">
        <div class="relative">
            <div class="font-arial">
                <p class="text-lg sm:text-2xl lg:text-3xl font-semibold">Beberapa hasil Inovasi yang telah kami lakukan antara lain :</p>
                <p class="text-xl pt-6 font-light">Beberapa inovasi yang telah dihasilkan oleh kami, yang merupakan hasil dari berbagai upaya penelitian mendalam, pengembangan teknologi mutakhir, serta penerapan solusi kreatif dalam berbagai bidang, telah membawa perubahan signifikan dan memberikan kontribusi positif terhadap sektor pariwisata dan hospitality. Inovasi-inovasi ini tidak hanya meningkatkan efisiensi operasional, tetapi juga menciptakan pengalaman yang lebih baik bagi pengguna dan masyarakat, sekaligus mendukung keberlanjutan dan perkembangan industri. Semua pencapaian tersebut, yang mencerminkan komitmen kami untuk selalu berinovasi dan memberikan dampak nyata, dapat dilihat sebagai berikut.</p>
            </div>
        </div>
    </section>

    <section class="mx-[110px] mb-20 pt-8 font-arial">
        <div class="flex justify-center space-x-5 gap-10">
            <div class="text-center bg-white shadow-2xl rounded-xl overflow-hidden w-[175px] h-[240px] sm:w-[310px] sm:h-[340px] lg:w-[310px] lg:h-[340px] transform transition-transform duration-300 hover:scale-110">
                <a href="/ihmsdash">
                    <img src="{{ asset('assets/ihms.png') }}" alt="" class="w-full rounded-t-xl">
                    <div class="px-8 py-4">
                        <p class="text-sm font-bold line-clamp-1">IHMS</p>
                        <p class="text-sm font-light line-clamp-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut ...</p>
                    </div>
                    <div class="border-t-[1px] border-[#D9D9D9]"></div>
                    <button class="pt-1 sm:pt-2 lg:pt-2 text-xs sm:text-base lg:text-base"><a href="/ihmsdash">Selengkapnya</a></button>
                </a>
            </div>
            
            <div class="text-center bg-white shadow-xl rounded-2xl overflow-hidden w-[175px] h-[240px] sm:w-[310px] sm:h-[340px] lg:w-[310px] lg:h-[340px] transform transition-transform duration-300 hover:scale-110">
                <a href="/lotusdash">
                    <img src="{{ asset('assets/blotus.png') }}" alt="" class="w-full rounded-t-xl">
                    <div class="px-8 py-4">
                        <p class="text-sm font-bold line-clamp-1">LOTUS</p>
                        <p class="text-sm font-light line-clamp-4">LOTUS (Lorong Waktu Sejarah) merupakan sebuah mini bioskop yang 100% isi konten memanfaatkan AI (Artificial Intelligence)</p>
                    </div>
                    <div class="border-t-[1px] border-[#D9D9D9]"></div>
                    <button class="pt-1 sm:pt-2 lg:pt-2 text-xs sm:text-base lg:text-base"><a href="/lotusdash">Selengkapnya</a></button>
                </a>
            </div>
        </div>
    </section>


</body>
</html>