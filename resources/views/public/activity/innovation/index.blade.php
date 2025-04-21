<x-guest-layout>
    @push('styles')
    {{-- Remove swiper CSS since we're not using it anymore --}}
    @endpush

<div>
    <header>
        <       @include('public.components.navbar')
        <div class="relative h-[30vh] w-full bg-[#2593CF] md:h-[45vh]">
            <div
                class="absolute left-[50%] top-[50%] h-[181px] w-11/12 -translate-x-[50%] md:top-[35%] md:h-[400px] md:w-5/6">
                <div
                    class="relative flex h-full w-full flex-col justify-center overflow-hidden rounded-[30px] text-white md:rounded-[50px]">
                    <img src="{{ asset('/assets/images/activity/ImgInov.jpg') }}" alt="img"
                        class="absolute -z-10 h-full w-full" />
                    <!-- Overlay hitam transparan -->
                    <div class="absolute inset-0 bg-black opacity-50"></div>

                    <div class="relative z-10">
                        <h1 class="text-center text-2xl font-bold md:text-5xl">Inovasi</h1>
                        <h1 class="text-center font-extralight italic md:text-4xl">
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
                <img src="{{ asset('assets/images/activity/Subtract.png') }}" alt="img" class="h-10 md:h-16" />
                <h1 class="mb-4 ps-5 text-4xl font-semibold md:text-4xl">
                    Kegiatan Inovasi apa saja yang dilakukan oleh CoE Smart <br> Tourism &
                    Hospitality ?
                </h1>
            </div>
            <p class="pt-4 text-justify md:text-xl">
                Center of Excellence Smart Tourism & Hospitality (CoE STH) terus
                menunjukkan komitmennya dalam menghadirkan inovasi yang relevan dan
                berdampak di sektor pariwisata dan hospitality. Inovasi yang
                dikembangkan berlandaskan pada prinsip keberlanjutan dan berorientasi
                pada kebutuhan masyarakat serta perkembangan industri di era modern.
                Fokus utama dari inovasi ini adalah menciptakan solusi kreatif dan
                aplikatif yang mampu menjawab tantangan industri, sekaligus memberikan
                kontribusi nyata dalam memperkuat daya saing dan efisiensi sektor
                pariwisata.
            </p>
            <p class="pt-4 text-justify md:text-xl">
                Dalam setiap inovasinya, CoE STH mengadopsi pendekatan yang integratif,
                menghubungkan pengetahuan akademik dengan praktik industri, serta
                mendorong kolaborasi aktif antara berbagai pemangku kepentingan.
                Pendekatan ini tidak hanya dirancang untuk meningkatkan kualitas
                layanan, tetapi juga untuk memberdayakan komunitas lokal dan mendorong
                pengelolaan destinasi wisata yang berkelanjutan. Dengan demikian,
                inovasi yang dihadirkan tidak hanya bersifat teknis, tetapi juga
                berkontribusi pada pembangunan sosial dan ekonomi masyarakat.
            </p>
            <p class="pt-4 text-justify md:text-xl">
                Sebagai pusat unggulan dalam pariwisata dan hospitality, CoE STH percaya
                bahwa inovasi adalah kunci utama untuk menciptakan ekosistem pariwisata
                yang inklusif, dinamis, dan adaptif terhadap perubahan. Dengan inovasi
                yang berfokus pada keberlanjutan dan pemberdayaan, CoE STH terus
                mendukung pengembangan sektor pariwisata yang mampu bersaing di tingkat
                lokal maupun global, sekaligus menciptakan dampak positif bagi generasi
                mendatang.
            </p>
        </div>
        {{-- page 2 --}}
        <div class="mb-5 w-11/12 md:w-5/6">
            <h1 class="mb-4 text-4xl font-semibold md:text-4xl">
                Beberapa hasil Inovasi yang telah CoE Smart Tourism & Hospitality
                lakukan
            </h1>
            <p class="text-justify md:text-xl">
                Beberapa inovasi yang telah dihasilkan oleh kami, yang merupakan hasil
                dari berbagai upaya penelitian mendalam, pengembangan teknologi
                mutakhir, serta penerapan solusi kreatif dalam berbagai bidang, telah
                membawa perubahan signifikan dan memberikan kontribusi positif terhadap
                sektor pariwisata dan hospitality. Inovasi-inovasi ini tidak hanya
                meningkatkan efisiensi operasional, tetapi juga menciptakan pengalaman
                yang lebih baik bagi pengguna dan masyarakat, sekaligus mendukung
                keberlanjutan dan perkembangan industri. Semua pencapaian tersebut, yang
                mencerminkan komitmen kami untuk selalu berinovasi dan memberikan dampak
                nyata, dapat dilihat sebagai berikut.
            </p>
        </div>
        {{-- page card --}}
        <div class="mb-5 w-11/12 md:w-5/6">
            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($innovations as $innovation)
                    {{-- card --}}
                    <div class="overflow-hidden rounded-xl shadow-customBox hover:scale-105 transition duration-500 cursor-pointer border-2 border-[#D9D9D9]">
                        <div class="h-[189px]">
                            <img src="{{ $innovation->first_photo->photo_url }}" alt="{{ $innovation->title }}"
                                class="h-full w-full object-cover" />
                        </div>
                        <div class="px-5 py-3 text-center">
                            <h5 class="text-lg font-semibold">
                                {{ $innovation->title }}
                            </h5>
                            <p class="line-clamp-3 text-justify text-base">
                                {{ $innovation->description }}
                            </p>
                        </div>
                        <div class="border-t border-[#959393] py-5 text-center">
                            <a href="{{ route('innovation.show', ['id' => $innovation->id]) }}"
                                class="w-fit font-semibold">
                                Selengkapnya
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            @if($innovations->hasPages())
            <div class="mt-8 flex justify-center">
                {{ $innovations->links() }}
            </div>
            @endif
        </div>
    </main>

    <!-- JavaScript -->
    <script src="{{ asset('assets/js/navbar.js') }}"></script>

    {{-- Remove swiper JS since we're not using it anymore --}}
</div>

</x-guest-layout>
