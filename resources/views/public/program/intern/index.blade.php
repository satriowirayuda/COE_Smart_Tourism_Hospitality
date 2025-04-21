<x-guest-layout>
    <div>
        <header>
            @include('public.components.navbar')
          <div class="relative h-[30vh] w-full bg-[#2593CF] md:h-[45vh]">
            <div
              class="absolute left-[50%] top-[50%] h-[181px] w-11/12 -translate-x-[50%] md:top-[35%] md:h-[400px] md:w-5/6"
            >
              <div
                class="relative flex h-full w-full flex-col justify-center overflow-hidden rounded-[30px] text-white md:rounded-[50px]"
              >
                <img
                  src="/assets/images/home/imgMBKM.png"
                  alt="img"
                  class="absolute -z-10 h-full w-full"
                />

                <!-- Overlay hitam transparan -->
                <div class="absolute inset-0 bg-black opacity-50"></div>

                <div class="relative z-10">
                  <h1 class="text-center text-2xl font-bold md:text-5xl">
                    MBKM dan Magang
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
          <div class="mb-5 w-11/12 border-b border-black pb-5 md:w-5/6">
            <div>
              <h5
                class="text-xl font-semibold max-md:my-5 max-md:text-center md:text-3xl"
              >
                Title
              </h5>
              <p class="text-justify">
                Merdeka Belajar – Kampus Merdeka (MBKM) adalah program yang diluncurkan oleh Kementerian Pendidikan,
                Kebudayaan, Riset, dan Teknologi Indonesia, yang bertujuan untuk memberikan kebebasan kepada mahasiswa
                dalam menentukan jalur pembelajaran mereka, sehingga lebih relevan dengan dunia industri dan kebutuhan masyarakat.
                Program ini memungkinkan mahasiswa untuk mengembangkan kompetensi di luar kampus melalui berbagai aktivitas,
                seperti magang, penelitian, pengabdian kepada masyarakat, atau proyek-proyek di industri tertentu.
                Tujuan utama dari MBKM adalah untuk mempersiapkan mahasiswa dengan keterampilan yang dibutuhkan di dunia kerja,
                serta menghubungkan pendidikan tinggi dengan kebutuhan dunia industri.
                <br><br>
                Magang, dalam konteks MBKM, merupakan salah satu kegiatan yang memungkinkan mahasiswa untuk mendapatkan pengalaman kerja
                langsung di industri atau organisasi yang relevan dengan bidang studi mereka. Magang memberi kesempatan bagi mahasiswa
                untuk menerapkan ilmu yang telah dipelajari di kelas dalam situasi dunia nyata, mengasah keterampilan praktis, dan membangun
                jejaring profesional yang dapat mendukung karier mereka di masa depan. Selain itu, magang juga memungkinkan mahasiswa untuk
                memahami lebih dalam tentang dinamika industri dan tantangan yang dihadapi oleh sektor terkait, sekaligus memberi kontribusi
                yang berharga bagi perusahaan atau organisasi tempat mereka magang. Program magang ini dirancang untuk memberi manfaat ganda,
                yaitu memperkaya pengalaman mahasiswa sekaligus memberikan peluang bagi perusahaan untuk menemukan talenta potensial.
            </p>
              </p>
            </div>
          </div>
          {{-- page 2 --}}
          <div class="mb-5 w-11/12 pb-5 md:w-5/6">
            <h1 class="mt-5 text-center text-xl font-semibold md:text-3xl">
              Program MBKM dan Magang di <br>CoE Smart Tourism & Hospitality
            </h1>
            @if (count($interns) > 0)
              @foreach ($interns as $intern)
                <div class="mt-10 flex max-md:flex-col max-md:items-center">
                  <img
                    src="{{ $intern->photo_url }}"
                    alt="{{ $intern->name }}"
                    class="h-[300px] min-h-[300px] w-[300px] min-w-[300px] bg-gray-300 object-cover"
                  />
                  <div class="max-md:mt-5 md:ms-5">
                    <h5 class="text-xl font-semibold">{{ $intern->name }}</h5>
                    @if (count($intern->majors) > 0)
                      <div class="my-2 flex flex-wrap gap-2">
                        @foreach ($intern->majors as $major)
                          <span
                            class="min-w-20 rounded-md border border-slate-400 px-2 text-center"
                          >
                            {{ $major->name }}
                          </span>
                        @endforeach
                      </div>
                    @endif

                    <p class="text-justify">{{ $intern->description }}</p>
                    @if (count($intern->projects) > 0)
                      <div class="flex items-center gap-x-2">
                        <p class="font-bold">Project Terkait :</p>
                        <div class="my-2 flex flex-wrap gap-2">
                          @foreach ($intern->projects as $project)
                            <span
                              class="min-w-20 rounded-md border border-slate-400 px-2 text-center"
                            >
                              {{ $project->name }}
                            </span>
                          @endforeach
                        </div>
                      </div>
                    @endif
                  </div>
                </div>
              @endforeach
            @endif
          </div>
        </main>

        <!-- JavaScript -->
        <script src="{{ asset("assets/js/navbar.js") }}"></script>
      </div>

</x-guest-layout>
