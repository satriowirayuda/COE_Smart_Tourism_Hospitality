<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="relative pt-28 font-arial">
    <x-white-navigation />
    
        <div class="absolute w-full bg-biru-sth h-[200px] lg:h-[340px] top-0 left-0 -z-10"></div>

        <div class="relative w-full h-[181px] md:[300px] lg:h-[350px] px-4 lg:px-28 mx-auto">
            <img class="w-full h-full object-cover rounded-[40px] sm:rounded-[30px] lg:rounded-[40px]"
                src="{{ asset('assets/bmbkm.png') }}" alt="">

            <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                <div class="text-center">
                    <p class="text-xl sm:text-xl md:text-4xl lg:text-6xl font-bold">MBKM dan Magang</p>
                    <p class="text-sm sm:text-lg md:text-2xl lg:text-4xl font-thin">Center of Excellence Smart Tourism & Hospitality</p>
                </div>
            </div>

        </div>

    </section>

    <section class="mx-5 md:mx-10 lg:mx-28 pt-10 space-y-5 font-arial">
        <p class="font-semibold text-base sm:text-2xl lg:text-3xl">Apa itu MBKM dan Magang?</p>
        <p class="text-xl font-light">MBKM (Merdeka Belajar Kampus Merdeka) adalah program yang diluncurkan oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Indonesia, yang bertujuan untuk memberikan kebebasan kepada mahasiswa dalam menentukan jalur pembelajaran mereka, sehingga lebih relevan dengan dunia industri dan kebutuhan masyarakat. Program ini memungkinkan mahasiswa untuk mengembangkan kompetensi di luar kampus melalui berbagai aktivitas, seperti magang, penelitian, pengabdian kepada masyarakat, atau proyek-proyek di industri tertentu. Tujuan utama dari MBKM adalah untuk mempersiapkan mahasiswa dengan keterampilan yang dibutuhkan di dunia kerja, serta menghubungkan pendidikan tinggi dengan kebutuhan dunia industri.
        </p>

        <p class="pt-6 text-base sm:text-xl lg:text-xl font-light text-justify">Magang, dalam konteks MBKM, merupakan salah satu kegiatan yang memungkinkan mahasiswa untuk mendapatkan pengalaman kerja langsung di industri atau organisasi yang relevan dengan bidang studi mereka. Magang memberi kesempatan bagi mahasiswa untuk menerapkan ilmu yang telah dipelajari di kelas dalam situasi dunia nyata, mengasah keterampilan praktis, dan membangun jejaring profesional yang dapat mendukung karier mereka di masa depan. Selain itu, magang juga memungkinkan mahasiswa untuk memahami lebih dalam tentang dinamika industri dan tantangan yang dihadapi oleh sektor terkait, sekaligus memberi kontribusi yang berharga bagi perusahaan atau organisasi tempat mereka magang. Program magang ini dirancang untuk memberi manfaat ganda, yaitu memperkaya pengalaman mahasiswa sekaligus memberikan peluang bagi perusahaan untuk menemukan talenta potensial.
        </p>
        <div class="border-t-[1px] border-black"></div>

    </section>
</body>


</html>