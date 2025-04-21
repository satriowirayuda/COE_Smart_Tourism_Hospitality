<x-guest-layout>
    <div>
        <header>
        @include('public.components.navbar')
          <section class="relative pt-28">
            <div class="absolute w-full bg-[#2593CF] h-[230px] lg:h-[340px] top-0 left-0 -z-10"></div>

            <div class="relative w-full h-[181px] md:h-[300px] lg:h-[350px] px-4 lg:px-28 mx-auto">
                <img class="w-full h-full object-cover rounded-[30px]"
                src="{{ asset('assets/images/aboutUs/ImgSejarah.png') }}" alt="">

                <!-- Background hitam transparan -->
                <div class="absolute inset-0 bg-black opacity-50 rounded-[30px] sm:rounded-[30px] lg:rounded-[40px]"></div>

                <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                    <div class="text-center font-bold">
                        <p class="font-lota2 text-2xl sm:text-2xl lg:text-4xl">Center of Excellence</p>
                        <p class="font-lota1 text-2xl sm:text-2xl lg:text-5xl">Smart Tourism & Hospitality</p>
                    </div>
                </div>
            </div>


        </section>
        </header>
        <main class="flex flex-col items-center">
          {{-- Sejarah COE --}}
          <section class="px-5 sm:px-8 lg:px-28 pt-10">
            <div class="text-3xl sm:text-4xl lg:text-5xl font-bold text-center font-lota2">
                <p>Sejarah COE</p>
                <p>Smart Tourism & Hospitality</p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-7 py-10 gap-6">
                <div class="lg:col-span-5 font-lota2 font-light">
                    <p class="text-base sm:text-lg lg:text-xl font-light text-justify">
                    CoE Smart Tourism and Hospitality didirikan pada bulan Maret 2024 sebagai salah satu unit strategis di Universitas Telkom. Unit ini dibentuk untuk mendukung kegiatan Research, Innovation, Business, and Community Service (RIBCS) di bidang pariwisata dan perhotelan berbasis teknologi digital. Dengan berfokus pada riset, inovasi, bisnis, dan pengabdian masyarakat, CoE ini bertujuan untuk menyumbang, menyebarluaskan, dan berkontribusi dalam perkembangan ilmu pengetahuan, teknologi, manajemen, dan seni.
                    </p>
                    <p class="text-base sm:text-lg lg:text-xl font-light text-justify mt-4">
                    CoE ini berperan sebagai penghubung antara akademisi, pemerintah, industri, operator, dan pengguna jasa dalam menciptakan kajian akademik yang relevan, baik di tingkat nasional maupun internasional. Selain itu, CoE turut menjadi pemasok pemikiran strategis dalam pengembangan sektor pariwisata dan hospitality yang berkelanjutan di Indonesia melalui pendekatan kolaboratif lintas sektor.
                    </p>
                </div>

                <div class="lg:col-span-2 flex justify-center items-center">
                    <img class="w-[180px] sm:w-[200px] lg:w-[235px] h-[220px] sm:h-[250px] lg:h-[285px]"
                        src="{{ asset("assets/images/aboutUs/logo.png") }}"
                </div>
            </div>
        </section>

          {{-- Visi Misi --}}
          <section class="px-4 sm:px-8 lg:px-28 lg:pt-10">
            <div class="border-t-[1px] border-black"></div>
            <div class="py-10">
                <div class="text-3xl lg:text-5xl font-lota2 font-semibold text-center">
                    <p>Visi dan Misi</p>
                    <p>COE Smart Tourism & Hospitality</p>
                </div>
                <div class="flex flex-col lg:flex-row gap-y-6 lg:gap-x-6 py-10 text-white">
                    <div class="flex-1 py-10 px-6 sm:px-8 lg:px-10 bg-gradient-to-b from-[#ff8a00] to-[#995300] rounded-lg">
                        <p class="text-3xl sm:text-4xl lg:text-5xl font-lota2 font-semibold">Visi</p>
                        <p class="font-lota2 text-[16px] sm:text-[18px] font-semibold pt-8">Menjadi Research Center
                            pariwisata dan hospitality unggul berbasis teknologi informasi dan komunikasi.</p>
                    </div>
                    <div class="flex-1 py-10 px-6 sm:px-8 lg:px-10 bg-gradient-to-b from-[#2593CF] to-[#134B69] rounded-lg">
                        <p class="text-3xl sm:text-4xl lg:text-5xl font-lota2 font-semibold">Misi</p>
                        <div class="font-lota2 text-[16px] sm:text-[18px] font-semibold pt-8">
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
        </main>
        <!-- JavaScript -->
        <script src="{{ asset("assets/js/navbar.js") }}"></script>
      </div>
</x-guest-layout>
