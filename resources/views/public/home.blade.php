<div>
    {{-- ==== HEADER ==== --}}
    <header>
        <livewire:public.components.navbar />
        <div
            class="align-items-center relative flex h-screen flex-col items-center justify-center bg-cover bg-fixed bg-no-repeat text-center font-semibold text-white">
            <!-- Video sebagai latar belakang -->
            <video class="absolute inset-0 w-full h-full object-cover" autoplay loop muted playsinline>
                <source src="assets/images/home/videoo.mp4" type="video/mp4">
            </video>
            <!-- Overlay hitam transparan -->
            <div class="absolute inset-0 bg-black opacity-50"></div>

            <!-- Konten di atas background dan overlay -->
            <div
                class="relative text-center text-white flex flex-col justify-center mt-48 mx-11 sm:mx-30 lg:mx-40 h-full">
                <div class="font-bold ">
                    <p class="text-[26px] sm:text-[33px] lg:text-4xl">Center of Excellence</p>
                    <p class="text-[26px] sm:text-[33px] lg:text-[40px]">Smart Tourism & Hospitality</p>
                </div>

                <div class="pt-5 ">
                    <p class="text-[15px] sm:text-lg lg:text-xl text-[#bbbbbb]">
                        Center of Excellence Smart Tourism and Hospitality
                        merupakan pusat unggulan di bidang pariwisata dan hospitality
                        yang berfokus pada riset, inovasi, bisnis, dan pengabdian kepada masyarakat.
                </div>
            </div>
        </div>
    </header>

    {{-- ==== Main ==== --}}
    <main>
        {{-- Ketua RA smart --}}
        <section class="flex min-h-screen flex-col items-center bg-[#EEEEEE] px-3 max-md:pt-20 md:py-20">
            {{-- chairman --}}
            <div class="mb-5 flex w-11/12 flex-col md:w-5/6">
                <h1 class="mb-5 text-base font-semibold md:hidden">
                    Ketua RA Smart Tourism & Hospitality
                </h1>
                <div class="flex max-md:flex-wrap-reverse md:items-center">
                    <div class="h-full w-full md:w-3/5">
                        <h1 class="text-base font-semibold max-md:hidden md:text-4xl">
                            Ketua
                            <br />
                            CoE Smart Tourism & Hospitality
                        </h1>
                        <p class="b-3 text-2xl sm:text-[26px] lg:text-3xl font-semibold lg:font-normal pt-3">
                            Dr. Ersy Ervina, S.Sos., MM. Par
                        </p>
                        <p class="mb-8 mt-4 text-justify md:text-lg">
                            Center of Excellence Smart Tourism and Hospitality (STH)
                            merupakan pusat unggulan di bidang pariwisata dan hospitality
                            yang berfokus pada riset, inovasi, bisnis, dan pengabdian kepada masyarakat.
                            Center of Excellence STH menciptakan produk dan layanan yang berdaya saing.
                            Melalui kolaborasi lintas sektor dan pengembangan kompetensi sumber daya manusia,
                            Center of Excellence STH siap mendukung kemajuan pariwisata Indonesia yang berkelanjutan.
                        </p>
                    </div>
                    <div class="relative mx-auto ">
                        <img src="assets/images/home/Bu Ersy 1.png" alt="img"
                            class="max-md:relative max-md:z-10 max-md:h-full" />
                    </div>
                </div>
            </div>

            {{-- program --}}
            <div class="py-10 flex">
                <div class="mx-auto grid grid-cols-1 md:grid-cols-1 lg:grid-cols-2 gap-x-20 gap-y-10 lg:pt-20">
                    <!-- Riset dan Publikasi -->
                    <div
                        class="relative group flex justify-center hover:scale-110 transition duration-500 cursor-pointer">
                        <img src="{{ asset('assets/images/home/Riset.png') }}" alt="Riset dan Publikasi"
                            class="w-full sm:w-[400px] lg:w-[512px] h-auto object-cover shadow-2xl">
                        <div
                            class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-52 h-[33.41px] rounded-md bg-[#F6A11F] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                            Riset dan Publikasi
                        </div>
                        <a href="{{ route('research') }}" class="absolute inset-0"></a>
                    </div>

                    <!-- Inovasi -->
                    <div
                        class="relative group flex justify-center hover:scale-110 transition duration-500 cursor-pointer">
                        <img src="{{ asset('assets/images/home/inovasi.png') }}" alt="Inovasi"
                            class="w-full sm:w-[400px] lg:w-[512px] h-auto object-cover shadow-2xl">
                        <div
                            class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-52 h-[33.41px] rounded-md bg-[#2593CF] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                            Inovasi
                        </div>
                        <a href="{{ route('innovation') }}" class="absolute inset-0"></a>
                    </div>
                    <!-- Bisnis -->
                    <div
                        class="relative group flex justify-center hover:scale-110 transition duration-500 cursor-pointer">
                        <img src="{{ asset('assets/images/home/bisnis.png') }}" alt="Bisnis"
                            class="w-full sm:w-[400px] lg:w-[512px] h-auto object-cover shadow-2xl">
                        <div
                            class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-52 h-[33.41px] rounded-md bg-[#E20A91] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                            Bisnis
                        </div>
                        <a href="{{ route('business') }}" class="absolute inset-0"></a>
                    </div>
                    <!-- Pengabdian Masyarakat -->
                    <div
                        class="relative group flex justify-center hover:scale-110 transition duration-500 cursor-pointer">
                        <img src="{{ asset('assets/images/home/Pengabdian Masyarakat.png') }}"
                            alt="Pengabdian Masyarakat"
                            class="w-full sm:w-[400px] lg:w-[512px] h-auto object-cover shadow-2xl">
                        <div
                            class="absolute top-[-15px] left-1/2 transform -translate-x-1/2 w-[274.29px] h-[33.41px] rounded-md bg-[#21A652] text-white italic font-semibold flex justify-center items-center shadow-2xl">
                            Pengabdian Masyarakat
                        </div>
                        <a href="{{ route('community-service') }}" class="absolute inset-0"></a>
                    </div>
                </div>
            </div>

        </section>

        {{-- Project Terkini --}}
        <section class="px-5 lg:px-28 m-auto font-arial">
            <div class="pt-20">
                <h1 class="text-3xl font-bold pb-10">Proyek Terkini</h1>
                {{-- card --}}
                <div
                    class="bg-gray-200 py-10 px-10 rounded-[22px] w-full flex flex-col sm:flex-row shadow-xl">
                    @if ($project)
                        <iframe class="w-full aspect-video rounded-[22px] shadow-2xl md:me-10 md:w-3/6"
                            src="{{ $project->yt_embed_link }}"></iframe>
                        <div class="flex min-h-56 flex-col justify-between max-md:w-full md:w-3/5">
                            <h5 class="text-3xl font-bold max-md:hidden">
                                {{ $project->name }}
                            </h5>
                            <h5 class="my-3 text-2xl font-bold md:hidden">Proyek Terkini</h5>
                            <p class="text-justify md:text-xl">
                                {{ $project->description }}
                            </p>
                            <a href="{{ $project->yt_link }}" target="_blank">
                                <button
                                    class="mt-4 flex rounded-3xl bg-[#2593CF] px-4 py-2 text-white underline hover:ps-6 hover:bg-orange1">
                                    Lihat di Youtube
                                    <svg class="h-6 w-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    @else
                        <p class="text-center">Belum Ada Project Yang Ditambahkan</p>
                    @endif
                </div>
            </div>
        </section>

        {{-- news dan timeline --}}
        <section class="mb-5 flex min-h-screen justify-center">
            <div class="flex w-11/12 items-center justify-between max-md:flex-col md:w-5/6">
                {{-- news --}}
                <div class="flex flex-col items-center max-md:w-full md:w-[37%]">
                    @if ($news)
                        <h5 class="mb-5 text-3xl font-semibold md:text-4xl">Berita</h5>
                        <div
                            class="relative h-[350px] w-full overflow-hidden rounded-2xl bg-gray-200 text-white md:h-[400px] md:w-[400px]">
                            <!-- Gambar -->
                            <img src="{{ $news->photo_url }}" alt="{{ $news->title }}"
                                class="h-full w-full object-cover" />
                            <!-- Overlay hitam dengan transparansi -->
                            <div class="absolute inset-0 bg-black opacity-25"style="background: linear-gradient(to bottom,
                                #030000 0%,
                                #300000 40%,
                                #690000 98%,
                                #660000 100%,
                                #000000 100%);
                                opacity: 0.3;"></div>

                            <!-- Konten di atas gambar dan overlay -->
                            <div class="absolute bottom-5 z-10 px-3">
                                <p class="line-clamp-1 text-xl font-semibold">
                                    {{ $news->title }}
                                </p>
                                <p class="line-clamp-3 text-xs font-light">
                                    {{ $news->description }}
                                </p>
                            </div>
                            <a href="{{ route('news') }}">
                                <div class="absolute right-5 top-5 z-10 flex text-white hover:text-orange1">
                                    <span class="text-base">Selengkapnya</span>
                                    <svg class="h-[30px] w-[30px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>
                {{-- timeline --}}
                <div class="mb-5 box-border max-md:w-full md:w-[60%] md:border-l md:border-[#A9A9A9] md:ps-10">
                    <h5 class="text-center text-3xl font-semibold max-md:mt-10 md:text-4xl">
                        Kegiatan
                    </h5>
                    {{-- Event LKM --}}
                    <div class="mb-5">
                        <div class="mt-5 w-full overflow-x-auto shadow-xl">
                            <h5 class="mb-2 font-semibold">Kegiatan LKM</h5>
                            <table border="" class="w-full table-auto text-sm">
                                <thead class="h-[60px] bg-[#626262] text-white">
                                    <tr>
                                        <th class="p-2">NO</th>
                                        <th class="text-center">Nama Acara</th>
                                        <th class="text-start">Tanggal Mulai</th>
                                        <th class="text-start">Tanggal Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lkmEvents as $event)
                                        <tr class="h-[45px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                                            <th class="">{{ $loop->iteration }}</th>
                                            <td>{{ $event->name }}</td>
                                            <td class="">
                                                {{ date('d F Y', strtotime($event->start_date)) }}
                                            </td>
                                            <td class="">
                                                {{ date('d F Y', strtotime($event->end_date)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- Event External --}}
                    <div>
                        <div class="mt-5 w-full overflow-x-auto shadow-xl">
                            <h5 class="mb-2 font-semibold">Kegiatan External</h5>
                            <table border="" class="w-full table-auto text-sm">
                                <thead class="h-[60px] bg-[#626262] text-white">
                                    <tr>
                                        <th class="p-2">NO</th>
                                        <th class="text-center">Kegiatan Name</th>
                                        <th class="text-start">Tanggal Mulai</th>
                                        <th class="text-start">Tanggal Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($externalEvents as $event)
                                        <tr class="h-[45px] odd:bg-[#EEEEEE] even:bg-[#D9D9D9]">
                                            <th class="">{{ $loop->iteration }}</th>
                                            <td>{{ $event->name }}</td>
                                            <td class="">
                                                {{ date('d F Y', strtotime($event->start_date)) }}
                                            </td>
                                            <td class="">
                                                {{ date('d F Y', strtotime($event->end_date)) }}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    {{-- footer --}}
    <x-footer />

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/navbar.js') }}"></script>
</div>
