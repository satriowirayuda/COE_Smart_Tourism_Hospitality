<x-guest-layout>
    @push('styles')
    {{-- Remove swiper CSS since we're not using it anymore --}}
    @endpush

<div>
    <header>
        @include('public.components.navbar')
        <div class="relative h-[30vh] w-full bg-[#2593CF] md:h-[45vh]">
            <div
                class="absolute left-[50%] top-[50%] h-[181px] w-11/12 -translate-x-[50%] md:top-[35%] md:h-[400px] md:w-5/6">
                <div
                    class="relative flex h-full w-full flex-col justify-center overflow-hidden rounded-[30px] text-white md:rounded-[50px]">
                    <img src="{{ asset('/assets/images/home/Pengabdian Masyarakat.png') }}" alt="img"
                        class="absolute -z-10 h-full w-full" />
                    <!-- Overlay hitam transparan -->
                    <div class="absolute inset-0 bg-black opacity-50"></div>

                    <div class="relative z-10">
                        <h1 class="text-center text-2xl font-bold md:text-5xl">
                            Pengabdian Masyarakat
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
                <img src="{{ asset('assets/images/activity/Subtract.png') }}" alt="img"
                    class="me-5 h-10 md:h-16" />
                <h1 class="mb-4 text-4xl font-semibold md:text-4xl">
                    Kegiatan Pengabdian Masyarakat apa saja yang dilakukan oleh <br> CoE Smart
                    Tourism & Hospitality ?
                </h1>
            </div>
            <p class="pt-3 text-justify md:text-xl">
                Center of Excellence Smart Tourism & Hospitality (CoE STH) memiliki
                komitmen tinggi terhadap pengabdian masyarakat sebagai salah satu wujud
                kontribusi nyata dalam mendukung kemajuan sektor pariwisata dan
                hospitality. Melalui berbagai program pengabdian masyarakat, CoE STH
                berfokus pada pemberdayaan komunitas lokal untuk meningkatkan kapasitas
                sumber daya manusia serta mendukung pengelolaan destinasi wisata secara
                berkelanjutan.
            </p>
            <p class="pt-3 text-justify md:text-xl">
                Selain itu, CoE STH juga mendorong masyarakat untuk lebih adaptif
                terhadap perkembangan teknologi dan tren wisata modern. Dengan
                memberikan akses terhadap pengetahuan, keterampilan, dan inovasi, CoE
                STH membantu masyarakat lokal menjadi lebih mandiri dalam mengelola
                potensi wisata di wilayah mereka. Upaya ini tidak hanya memperkuat
                perekonomian lokal, tetapi juga membantu melestarikan nilai-nilai budaya
                yang menjadi ciri khas dari setiap destinasi wisata.
            </p>
            <p class="pt-3 text-justify md:text-xl">
                Melalui pengabdian masyarakat yang berkelanjutan, CoE STH berperan aktif
                dalam menciptakan ekosistem pariwisata yang inklusif, berdaya saing, dan
                berorientasi pada kesejahteraan masyarakat. Dengan mengintegrasikan
                pendekatan berbasis penelitian dan inovasi, CoE STH terus berkontribusi
                dalam membangun hubungan yang harmonis antara manusia, alam, dan budaya.
            </p>
        </div>
        {{-- page 2 --}}
        <div class="mb-5 w-11/12 md:w-5/6">
            <h1 class="mb-4 text-4xl font-semibold md:text-4xl">
                Beberapa kegiatan Pengabdian Masyarakat yang telah <br> CoE Smart Tourism &
                Hospitality lakukan
            </h1>
            <p class="text-justify md:text-xl">
                Beberapa kegiatan Pengabdian Masyarakat yang telah dilaksanakan oleh
                Center of Excellence Smart Tourism & Hospitality (CoE STH) meliputi
                program IHKA (Indonesian Housekeepers Association) dan Innovillage.
                Melalui IHKA, CoE STH memberikan pelatihan kepada masyarakat dalam
                bidang housekeeping dan layanan perhotelan, membantu meningkatkan
                keterampilan sesuai standar industri sekaligus membuka peluang kerja
                baru. Sementara itu, Innovillage berfokus pada pemberdayaan masyarakat
                desa melalui pengembangan potensi wisata, pelestarian budaya lokal, dan
                pemanfaatan teknologi digital untuk promosi produk lokal serta
                pengelolaan destinasi wisata. Kedua program ini mencerminkan komitmen
                CoE STH dalam mendukung pertumbuhan pariwisata berkelanjutan sekaligus
                meningkatkan kesejahteraan masyarakat.
            </p>
        </div>
        {{-- page card --}}
        <div class="mb-5 w-11/12 md:w-5/6">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                {{-- Innovillage Card --}}
                <div class="overflow-hidden rounded-xl shadow-customBox hover:scale-105 transition duration-500 cursor-pointer border-2 border-[#D9D9D9]">
                    <div class="h-[189px]">
                        <img src="{{ asset('assets/images/activity/imgInno.png') }}" alt="Innovillage"
                            class="h-full w-full object-cover" />
                    </div>
                    <div class="px-5 py-3 text-center">
                        <h5 class="text-lg font-semibold">Innovillage</h5>
                        <p class="line-clamp-3 text-center text-base">
                            Innovillage adalah sebuah konsep inovatif
                            yang bertujuan untuk memajukan desa-desa di Indonesia
                        </p>
                    </div>
                    <div class="border-t border-[#959393] py-5 text-center">
                        <a href="{{ route('innovillage.index') }}" class="w-fit font-semibold">
                            Selengkapnya
                        </a>
                    </div>
                </div>

                {{-- Community Service Cards --}}
                @foreach ($community_services as $community_service)
                    <div class="overflow-hidden rounded-xl shadow-customBox hover:scale-105 transition duration-500 cursor-pointer border-2 border-[#D9D9D9]">
                        <div class="h-[189px]">
                            <img src="{{ $community_service->first_photo->photo_url }}"
                                alt="{{ $community_service->title }}" class="h-full w-full object-cover" />
                        </div>
                        <div class="px-5 py-3 text-center">
                            <h5 class="text-lg font-semibold">
                                {{ $community_service->title }}
                            </h5>
                            <p class="line-clamp-3 text-justify text-base">
                                {{ $community_service->description }}
                            </p>
                        </div>
                        <div class="border-t border-[#959393] py-5 text-center">
                            <a href="{{ route('community-service.show', ['id' => $community_service->id]) }}" class="w-fit font-semibold">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if($community_services->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $community_services->links() }}
            </div>
            @endif
        </div>
    </main>
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/navbar.js') }}"></script>

    {{-- Remove swiper JS since we're not using it anymore --}}
</div>

</x-guest-layout>
