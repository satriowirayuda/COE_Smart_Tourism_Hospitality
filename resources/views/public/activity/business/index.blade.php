<x-guest-layout>
    <div>
        <header>
            @include('public.components.navbar')
            <div class="relative h-[30vh] w-full bg-[#2593CF] md:h-[45vh]">
            <div
                class="absolute left-[50%] top-[50%] h-[181px] w-11/12 -translate-x-[50%] md:top-[35%] md:h-[400px] md:w-5/6">
                <div class="relative flex h-full w-full flex-col justify-center overflow-hidden rounded-[30px] bg-cover bg-bottom bg-no-repeat text-white md:rounded-[50px]"
                    style="background-image: url('/assets/images/home/bisnis.png')">
                    <!-- Overlay hitam transparan -->
                    <div class="absolute inset-0 bg-black opacity-50"></div>

                    <div class="relative z-10">
                        <h1 class="text-center text-2xl font-bold md:text-5xl">Bisnis</h1>
                        <h1 class="text-center font-extralight md:text-4xl">
                            Center of Excellent Smart Tourism & Hospitality
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="mt-24 flex flex-col items-center md:mt-[252px]">
        {{-- page 1 --}}
        <div class="mb-5 w-11/12 border-b-2 border-[#a09e9e] pb-5 md:w-5/6">
            <div class="flex">
                <img src="{{ asset('assets/images/activity/Subtract.png') }}" alt="img"
                    class="me-5 h-10 md:h-16" />
                <h1 class="mb-4 text-4xl font-semibold md:text-4xl">
                    Kegiatan Bisnis apa saja yang dilakukan oleh CoE Smart <br>Tourism &
                    Hospitality ?
                </h1>
            </div>
            <p class="pt-3 text-justify md:text-xl">
                Bisnis yang telah dilakukan oleh Center of Excellence Smart Tourism &
                Hospitality (CoE STH) mencakup dua inisiatif utama yang dirancang untuk
                mendukung perkembangan sektor pariwisata dan hospitality, serta
                memberikan dampak positif kepada masyarakat dan industri secara
                keseluruhan. Salah satunya adalah Rumah Jurnal, sebuah platform yang
                didirikan dengan tujuan untuk memfasilitasi publikasi riset, artikel
                ilmiah, dan kajian mendalam di bidang pariwisata dan hospitality. Rumah
                Jurnal berperan penting sebagai wadah bagi para akademisi, peneliti, dan
                praktisi industri untuk berbagi pengetahuan dan temuan penelitian yang
                dapat digunakan untuk mengembangkan kebijakan yang lebih baik dan solusi
                inovatif dalam mengelola sektor pariwisata. Melalui publikasi yang
                relevan dan berkualitas, Rumah Jurnal juga diharapkan dapat menjadi
                referensi utama dalam bidang ini, mendorong terjadinya kemajuan dan
                pengembangan berkelanjutan yang bermanfaat bagi seluruh pihak yang
                terlibat.
            </p>
            <p class="pt-3 text-justify md:text-xl">
                Di sisi lain, CoE STH juga mengembangkan Kedai CoE sebagai bisnis yang
                bertujuan untuk menciptakan ruang interaktif bagi pengunjung sambil
                memperkenalkan berbagai produk dan layanan yang berkaitan dengan
                pariwisata dan budaya. Kedai CoE tidak hanya menawarkan berbagai produk
                lokal yang mencerminkan kekayaan budaya Indonesia, tetapi juga
                menyediakan tempat bagi masyarakat untuk merasakan pengalaman langsung
                yang berhubungan dengan pengembangan sektor pariwisata yang
                berkelanjutan. Selain sebagai ruang untuk menikmati produk-produk lokal,
                Kedai CoE juga berfungsi sebagai tempat yang memfasilitasi pemberdayaan
                ekonomi lokal, dengan mendukung UMKM dan kerajinan tangan daerah untuk
                dipromosikan lebih luas. Inisiatif ini sejalan dengan visi CoE STH dalam
                memajukan industri pariwisata yang inklusif, berkelanjutan, dan
                memberikan dampak positif yang signifikan bagi komunitas lokal. Dengan
                menghubungkan budaya lokal, produk inovatif, dan pelestarian lingkungan,
                Kedai CoE menjadi titik pertemuan yang memperkuat ekonomi lokal dan
                memperkaya pengalaman pengunjung dalam menjelajahi potensi pariwisata.
            </p>
        </div>
        {{-- page 2 --}}
        <div class="mb-5 w-11/12 md:w-5/6">
            <h1 class="mb-4 text-2xl font-semibold md:text-4xl">
                Beberapa hasil Bisnis yang telah CoE Smart Tourism & Hospitality lakukan
            </h1>
            <p class="pt-3 text-justify md:text-xl">
                Beberapa bisnis yang telah dilakukan, yang mencakup berbagai upaya
                strategis dan inisiatif untuk mendorong pertumbuhan sektor pariwisata
                dan hospitality, serta menciptakan peluang bagi pemberdayaan masyarakat
                dan industri lokal, di antaranya melibatkan pengembangan platform
                berbasis penelitian dan publikasi serta pengelolaan ruang usaha yang
                mendukung integrasi budaya dan ekonomi lokal. Inisiatif-inisiatif ini
                dirancang untuk memberikan dampak positif jangka panjang dan mendukung
                visi besar kami dalam menciptakan solusi inovatif yang relevan dengan
                kebutuhan zaman, sekaligus memberikan pengalaman yang bermanfaat bagi
                pengunjung dan masyarakat sekitar. Semua pencapaian ini dapat dijelaskan
                sebagai berikut.
            </p>
        </div>
        {{-- page card --}}
        <div class="mb-5 flex w-11/12 flex-wrap justify-center gap-5 md:w-5/6 md:gap-10">
            {{-- card --}}
            <div
                class="w-[320px] overflow-hidden rounded-xl shadow-customBox hover:scale-110 transition duration-500 cursor-pointer m-10 border-2 border-[#D9D9D9]">
                <div class="h-[189px]">
                    <img src="{{ asset('assets/images/activity/JurnalImg.png') }}" alt="img"
                        class="h-full w-full bg-gray-300" />
                </div>
                <div class="px-5 py-3 text-center">
                    <h5 class="text-lg font-semibold pb-5">Pelatihan Jurnal</h5>
                    <p class="line-clamp-3 text-center text-base">
                        Rumah Jurnal merupakan penyedia layanan jasa dalam pendampingan
                        penyusunan artikel ilmiah
                    </p>
                </div>
                <div class="border-t border-[#959393] py-5 text-center">
                     <a href="{{ route('training.index') }}" class="w-fit font-semibold">
                        Selengkapnya
                    </a>
                </div>
            </div>
            <div
                class="w-[320px] overflow-hidden rounded-xl shadow-customBox hover:scale-110 transition duration-500 cursor-pointer m-10 border-2 border-[#D9D9D9]">
                <div class="h-[189px]">
                    <img src="{{ asset('assets/images/activity/imgKedai.png') }}" alt="img"
                        class="h-full w-full bg-gray-300" />
                </div>
                <div class="px-5 py-3 text-center">
                    <h5 class="text-lg font-semibold">Kedai COE</h5>
                    <p class="line-clamp-4 text-center text-base">
                        Kedai CoE adalah solusi tepat ketika lapar, menyajikan hidangan
                        lezat, bergizi, dan mendukung produk lokal serta UMKM.
                    </p>
                </div>
                <div class="border-t border-[#959393] py-5 text-center">
                    <a href="{{ route('shop.index') }}" class="w-fit font-semibold">
                        Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </main>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
</div>
</x-guest-layout>
