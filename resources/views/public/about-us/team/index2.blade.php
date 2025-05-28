<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota Tim</title>
</head>
<body>
<x-guest-layout>
    <div class="font-arial">
        @include('public.components.navbar')

        <!-- Hero Section -->
        <section class="relative pt-28">
            <div class="absolute w-full bg-biru-sth h-[230px] lg:h-[340px] top-0 left-0 -z-10"></div>
            <div class="relative w-full sm:h-[201px] md:h-[450px] px-4 lg:px-28 mx-auto">
                <img class="w-full h-full object-cover rounded-[30px] lg:rounded-[40px]"
                    src="{{ asset('assets/images/aboutUs/btim.png') }}" alt="Gambar Tim">
                <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
                    <div class="text-center font-extrabold space-y-2">
                        <p class="text-xl sm:text-4xl lg:text-[40px]">Center of Excellence</p>
                        <p class="text-xl sm:text-4xl lg:text-[50px]">Smart Tourism & Hospitality</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Deskripsi Tim -->
        <section class="px-5 sm:px-8 lg:px-28 py-10">
            <div class="text-xl md:text-4xl lg:text-5xl font-semibold text-center">
                <p>Tim CoE Smart Tourism & Hospitality</p>
            </div>
            <div class="text-base sm:text-lg lg:text-xl font-light text-justify pt-5 md:pt-10">
                <p>
                    Tim kami terdiri dari dosen - dosen mahasiswa yang memiliki semangat luar biasa dan dedikasi tinggi
                    untuk terus berinovasi, terutama dalam mendukung pengembangan sektor pariwisata dan perhotelan. Kami
                    berkomitmen untuk menghadirkan ide-ide kreatif serta solusi-solusi yang relevan guna memajukan
                    industri ini, melalui kolaborasi dan pemanfaatan teknologi terdepan yang dipelajari selama masa
                    pendidikan kami.
                </p>
            </div>
        </section>

        <!-- Tab Pilihan Tim -->
        <section class="w-full pt-10 pb-28 font-arial">
            <div class="px-5 md:px-10 lg:px-28">
                <div class=" mx-auto mb-10 border-t border-[#A9A9A9]"></div>

            <p class="text-center text-xl md:text-2xl font-semibold">Tim Magang Kami</p>

            <nav class="mx-auto my-10 w-fit rounded-3xl border border-gray-500 px-10 py-3">
                <ol class="flex font-semibold max-md:justify-between max-md:px-5 md:text-lg">
                    @foreach ($member_options as $index => $option)
                        <li class="{{ $member_type == $option['type'] ? 'text-orange1' : 'text-dark' }}">
                            <a href="{{ route('team.index', ['type' => $option['type']]) }}">
                                {{ $option['name'] }}
                            </a>
                        </li>
                        @if (!$loop->last)
                            <span class="mx-4 h-7 w-[1px] bg-black"></span>
                        @endif
                    @endforeach
                </ol>
            </nav>

            <!-- Daftar Anggota -->
            <div
                class="bg-gradient-to-b from-[#2593CF] from-85% to-[#134B69] to-100% rounded-[20px] sm:rounded-[30px] lg:rounded-[40px] shadow-2xl pt-10 pb-16 px-4 md:px-10 lg:px-20">
                <p class="text-xl md:text-2xl font-bold text-white text-center">
                    @foreach ($member_options as $option)
                        @if ($option['type'] == $member_type)
                            {{ $option['name'] }}
                        @endif
                    @endforeach
                </p>

                <div class="relative flex flex-col items-center justify-center pt-8">
                    <div class="relative w-36 md:w-44 lg:w-52 mx-auto">
                        <div class="relative md:52">
                        </div>
                    </div>
                    @foreach ($members as $member)
                        <a
                            @if ($member_type == 'internal') href="{{ route('profile.index', ['memberId' => $member->id]) }}" @endif
                            class="relative h-[160px] w-[160px] md:h-[200px] md:w-[200px] overflow-hidden rounded-[10px] hover:scale-105 duration-500 cursor-pointer">
                            <img src="{{ $member->photo_url }}" alt="{{ $member->name }}"
                                class="absolute h-full w-full object-cover bg-gray-300" />
                            <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-black opacity-70"></div>

                            <div class="absolute bottom-0 w-full text-[9px] md:text-sm lg:text-sm px-2 py-5">
                                <p class="font-semibold text-white"> {{ $member->name }}</p>
                                <p class="text-red-600 pt-1">{{ $member->position }} </p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            </div>
        </section>

        <script src="{{ asset('assets/js/navbar.js') }}"></script>
    </div>
</x-guest-layout>


</body>
</html>
