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
        <div class="absolute w-full bg-biru-sth h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full max-w-[1280px] h-72 lg:h-[446px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[40px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/bhomepage-o.png') }}" alt="">
            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center font-extralight">
                    <p class="text-base sm:text-xl md:text-4xl lg:text-6xl font-bold">MBKM dan Magang</p>
                    <p class="text-3xl sm:text-3xl md:text-3xl lg:text-3xl italic">Center of Excellent Smart Tourism & Hospitality</p>
                </div>
            </div>
        </div>

    </section>

    <section class="mx-[110px] pt-10 space-y-5 text-justify">
        <p class="font-semibold text-2xl">Apa itu MBKM dan Magang?</p>
        <p class="text-xl font-light">MBKM (Merdeka Belajar Kampus Merdeka) adalah program yang diluncurkan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Indonesia, yang bertujuan untuk memberikan kebebasan kepada mahasiswa dalam menentukan jalur pembelajaran mereka, sehingga lebih relevan dengan dunia industri dan kebutuhan masyarakat. Program ini memungkinkan mahasiswa untuk mengembangkan kompetensi di luar kampus melalui berbagai aktivitas, seperti magang, penelitian, pengabdian kepada masyarakat, atau proyek-proyek di industri tertentu. Tujuan utama dari MBKM adalah untuk mempersiapkan mahasiswa dengan keterampilan yang dibutuhkan di dunia kerja, serta menghubungkan pendidikan tinggi dengan kebutuhan dunia industri.
        </p>

        <p class="text-xl font-light">Magang, dalam konteks MBKM, merupakan salah satu kegiatan yang memungkinkan mahasiswa untuk mendapatkan pengalaman kerja langsung di industri atau organisasi yang relevan dengan bidang studi mereka. Magang memberi kesempatan bagi mahasiswa untuk menerapkan ilmu yang telah dipelajari di kelas dalam situasi dunia nyata, mengasah keterampilan praktis, dan membangun jejaring profesional yang dapat mendukung karier mereka di masa depan. Selain itu, magang juga memungkinkan mahasiswa untuk memahami lebih dalam tentang dinamika industri dan tantangan yang dihadapi oleh sektor terkait, sekaligus memberi kontribusi yang berharga bagi perusahaan atau organisasi tempat mereka magang. Program magang ini dirancang untuk memberi manfaat ganda, yaitu memperkaya pengalaman mahasiswa sekaligus memberikan peluang bagi perusahaan untuk menemukan talenta potensial.
        </p>
        <div class="border-t-[1px] border-black"></div>

    </section>
</body>


</html>