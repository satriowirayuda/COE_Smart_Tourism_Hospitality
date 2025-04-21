<x-guest-layout>
    <div>
        <header>
            @include('public.components.navbar')
          <div class="relative h-[30vh] w-full bg-[#2593CF] md:h-[45vh]">
            <div
              class="absolute left-[50%] top-[50%] h-[181px] w-11/12 -translate-x-[50%] md:top-[35%] md:h-[400px] md:w-5/6"
            >
              <div
                class="relative flex h-full w-full flex-col justify-center overflow-hidden rounded-[30px] bg-cover bg-bottom bg-no-repeat text-white md:rounded-[50px]"
                style="background-image: url('/assets/images/research.png')"
              >
                <!-- Overlay hitam transparan -->
                <div class="absolute inset-0 bg-black opacity-50"></div>

                <div class="relative z-10">
                  <h1 class="text-center text-2xl font-bold md:text-5xl">
                    Riset dan Publikasi
                  </h1>
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
              <img
                src="{{ asset("assets/images/activity/Subtract.png") }}"
                alt="img"
                class="me-5 h-10 md:h-16"
              />
              <h1 class="mb-4 text-4xl font-semibold md:text-4xl">
                  Kegiatan Riset apa saja yang dilakukan oleh CoE Smart <br> Tourism & Hospitality ?
              </h1>
            </div>
            <p class="mt-3 text-justify md:text-xl">
              Center of Excellence Smart Tourism & Hospitality (CoE STH) memiliki
              komitmen kuat dalam mendukung kemajuan sektor pariwisata dan hospitality
              melalui pengembangan publikasi ilmiah yang berkualitas. Sebagai pusat
              riset terkemuka, CoE STH secara konsisten menghasilkan berbagai jurnal
              penelitian yang membahas isu-isu terkini dalam industri ini. Publikasi
              tersebut mencakup berbagai topik penting, seperti pemanfaatan teknologi
              digital untuk menciptakan pengalaman wisata yang lebih menarik dan
              interaktif, pengembangan destinasi wisata berbasis komunitas yang
              memberdayakan masyarakat lokal, serta strategi untuk meningkatkan
              kualitas layanan dan mendukung keberlanjutan di sektor pariwisata.
            </p>
            <p class="mt-5 text-justify md:text-xl">
              Beberapa hasil yang pernah kami lakukan, yang mencakup berbagai
              upaya yang telah kami rancang, laksanakan, dan evaluasi dengan
              penuh komitmen, serta berbagai pencapaian signifikan dalam
              pengembangan proyek dan inisiatif yang kami jalankan, dapat
              kami paparkan sebagai berikut. Hasil-hasil ini mencerminkan
              dedikasi kami untuk memberikan kontribusi yang nyata dan
              berkelanjutan dalam bidang yang kami tekuni, serta menunjukkan
              capaian kami dalam menciptakan dampak positif yang luas,
              baik di tingkat lokal maupun global.
            </p>
          </div>
          {{-- page 2 --}}
          <div class="mb-5 w-11/12 md:w-5/6">
            <h1 class="mb-4 text-4xl font-semibold md:text-4xl">
              Beberapa hasil Penelitian dan Publikasi yang telah kami <br> lakukan antara
              lain :
            </h1>
            <p class="text-justify md:text-xl">
              Beberapa hasil yang pernah kami lakukan, yang mencakup berbagai upaya
              yang telah kami rancang, laksanakan, dan evaluasi dengan penuh komitmen,
              serta berbagai pencapaian signifikan dalam pengembangan proyek dan
              inisiatif yang kami jalankan, dapat kami paparkan sebagai berikut.
              Hasil-hasil ini mencerminkan dedikasi kami untuk memberikan kontribusi
              yang nyata dan berkelanjutan dalam bidang yang kami tekuni, serta
              menunjukkan capaian kami dalam menciptakan dampak positif yang luas,
              baik di tingkat lokal maupun global.
            </p>
          </div>
          {{-- page card --}}
          <div
            class="mb-5 flex w-11/12 flex-wrap justify-center max-md:gap-5 md:w-5/6 md:gap-10"
          >
            {{-- card --}}
            <div
              class="overflow-hidden rounded-xl shadow-customBox max-md:w-[80%] md:w-[290px] hover:scale-110 transition duration-500 cursor-pointer m-10 border-2 border-[#D9D9D9]"
            >
              <div class="max-md:h-[150px] md:h-[180px]">
                <img
                  src="{{ asset("assets/images/activity/imgJurnal.png") }}"
                  alt="img"
                  class="h-full w-full"
                />
              </div>
              <div class="px-5 py-3 text-center">
                <h5 class="line-clamp-1 text-lg font-semibold">Jurnal Penelitian</h5>
                <p class="line-clamp-3 text-center text-sm md:text-base">
                  Beberapa penelitian yang telah dilaksanakan oleh tim CoE Smart Tourism & Hospitality
                </p>
              </div>
              <div class="border-t border-[#959393] py-3 text-center md:py-5">
                <a href="{{ route("journal.index") }}" class="w-fit font-semibold">
                  Selengkapnya
                </a>
              </div>
            </div>
          </div>
        </main>
        <!-- JavaScript -->
        <script src="{{ asset("assets/js/navbar.js") }}"></script>
      </div>

</x-guest-layout>
