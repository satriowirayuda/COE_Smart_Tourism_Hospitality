<x-guest-layout>
    <div>
        <header>
            @include('public.components.navbar')
            <div class="relative h-[30vh] w-full bg-[#2593CF] md:h-[45vh]">
                <div
                    class="absolute left-[50%] top-[50%] h-[181px] w-11/12 -translate-x-[50%] md:top-[35%] md:h-[400px] md:w-5/6">
                    <div
                        class="relative flex h-full w-full flex-col justify-center overflow-hidden rounded-[30px] text-white md:rounded-[50px]">
                        <img src="{{ asset('assets/images/aboutUs/ImgSejarah.png') }}" alt="img"
                            class="absolute -z-10 h-full w-full object-cover" />

                        <!-- Overlay hitam transparan -->
                        <div class="absolute inset-0 bg-black opacity-50"></div>

                        <div class="relative z-10">
                            <h1 class="text-center text-xl font-semibold md:text-5xl">
                                Center of Excellence
                            </h1>
                            <h1 class="text-center text-xl font-semibold md:text-6xl">
                                Smart Tourism & Hospitality
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main class="flex flex-col items-center">
            {{-- Sejarah COE --}}
            <div class="mt-28 w-11/12 pb-10 md:mt-[252px] md:w-5/6">
                <div>
                    <h1 class="mb-5 text-xl font-semibold max-md:text-center md:mb-10 md:text-center md:text-5xl">
                        Tim CoE Smart Tourism & Hospitality
                    </h1>
                    <div class="text-justify">
                        <p class="md:text-lg">
                            Tim kami terdiri dari dosen - dosen mahasiswa yang memiliki semangat
                            luar biasa dan dedikasi tinggi untuk terus berinovasi, terutama
                            dalam mendukung pengembangan sektor pariwisata dan perhotelan. Kami
                            berkomitmen untuk menghadirkan ide-ide kreatif serta solusi-solusi
                            yang relevan guna memajukan industri ini, melalui kolaborasi dan
                            pemanfaatan teknologi terdepan yang dipelajari selama masa
                            pendidikan kami.
                        </p>
                    </div>

                    {{-- TimMagang Kami --}}
                    <div>
                        <h5 class="mb-5 mt-10 text-center text-2xl font-semibold">
                            Tim Magang Kami
                        </h5>
                        <div class="flex justify-center">
                        <div class="flex items-center justify-around bg-white rounded-full w-full max-w-[640px] h-10 md:h-14 border border-[#5D5D5D] my-10 text-sm font-semibold text-black">
                            @foreach ($member_options as $index => $option)
                                <a
                                    href="{{ route('team.index', ['type' => $option['type']]) }}"
                                    class="px-4 {{ $member_type == $option['type'] ? 'text-[#FF8A00] font-semibold' : '' }}"
                                    id="{{ $option['type'] }}Button"
                                >
                                    {{ $option['name'] }}
                                </a>
                                @if (!$loop->last)
                                    <div class="h-5 border-r border-black mx-2"></div>
                                @endif
                            @endforeach
                        </div>
                    </div>



                        <div
                            id=""
                            class="bg-gradient-to-b from-[#2593CF] from-85% to-[#134B69] to-100% rounded-[20px] sm:rounded-[30px] lg:rounded-[40px] shadow-2xl pt-10 pb-16 px-20 md:px-10 lg:px-20">
                            <p class="text-xl md:text-2xl font-bold text-white text-center">INHOUSE</p>

                            <!--  KETUA  -->
                            @foreach ($members as $member)
                                @if ($member_type == 'internal' && $member->is_leader == 1)
                                    <div class="relative flex flex-col items-center justify-center pt-8">
                                        <div class="relative w-36 md:w-44 lg:w-52 mx-auto">
                                            <div class="relative md:w-52">
                                                <img src="{{ $member->photo_url }}" alt="{{ $member->name }}" class="rounded-lg">
                                                <div class="absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 rounded-lg"></div>
                                            </div>
                                            <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                                                <p class="font-semibold text-white">{{ $member->name }}</p>
                                                <p class="text-pink-sth pt-1">{{ $member->position }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach

                            <!--  ANGGOTA -->
                            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 pt-10 gap-y-5 md:gap-y-3 lg:gap-6 items-center mx-auto">
                                @foreach ($members as $member)
                                    @if ($member_type != 'internal' || ($member_type == 'internal' && $member->is_leader == 0))
                                        <a
                                            @if ($member_type == 'internal')
                                                href="{{ route('profile.index', ['memberId' => $member->id]) }}"
                                                class="relative h-[160px] w-[160px] overflow-hidden rounded-[10px] md:h-[200px] md:w-[200px] hover:scale-105 duration-500 cursor-pointer"
                                            @else
                                                class="relative h-[160px] w-[160px] overflow-hidden rounded-[10px] md:h-[200px] md:w-[200px]"
                                            @endif
                                        >
                                            <img src="{{ $member->photo_url }}" alt="{{ $member->name }}"
                                                class="absolute h-full w-full object-cover" />
                                            <div class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-black opacity-70"></div>

                                            <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                                                <p class="font-semibold text-white">{{ $member->name }}</p>
                                                <p class="text-pink-sth pt-1">{{ $member->position }}</p>
                                            </div>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </main>
        <!-- JavaScript -->
        <script src="{{ asset('assets/js/navbar.js') }}"></script>
    </div>

</x-guest-layout>
