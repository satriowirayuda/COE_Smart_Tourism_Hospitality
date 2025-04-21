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
                        <nav class="mx-auto mb-10 w-fit rounded-3xl border border-gray-500 px-10 py-3">
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
                        <div
                            class="flex flex-col items-center rounded-3xl bg-gradient-to-b from-[#2593CF] to-[#134B69] py-10 shadow-[0_10px_10px_0px_rgba(0,0,0,0.4)] md:rounded-[40px] md:p-14">
                            <h5 class="mb-5 text-xl font-semibold text-white md:text-3xl">
                                @foreach ($member_options as $option)
                                    @if ($option['type'] == $member_type)
                                        {{ $option['name'] }}
                                    @endif
                                @endforeach
                            </h5>
                            <div class="flex flex-wrap justify-center gap-2">
                                @foreach ($members as $member)
                                    @if ($member_type == 'internal' && $member->is_leader == 1)
                                        <a @if ($member_type == 'internal') href="{{ route('profile.index', ['memberId' => $member->id]) }}" @endif
                                            class="flex w-full justify-center">
                                            <div
                                                class="relative h-[160px] w-[160px] overflow-hidden rounded-[10px] md:h-[200px] md:w-[200px] hover:scale-105 duration-500 cursor-pointer">
                                                <img src="{{ $member->photo_url }}" alt="{{ $member->name }}"
                                                    class="absolute h-full w-full bg-gray-300" />
                                                <div
                                                    class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-black opacity-70">
                                                </div>
                                                <div class="absolute bottom-2 z-10 ps-2">
                                                    <p
                                                        class="bottom-6 text-[9px] font-semibold text-white drop-shadow-md md:bottom-8 md:text-sm">
                                                        {{ $member->name }}
                                                    </p>
                                                    <p class="bottom-3 text-[10px] text-orange1 md:text-sm">
                                                        {{ $member->position }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    @elseif ($member_type != 'internal' || ($member_type == 'internal' && $member->is_leader == 0))
                                    <a
                                    @if ($member_type == 'internal')
                                      href="{{ route('profile.index', ['memberId' => $member->id]) }}"
                                      class="relative h-[160px] w-[160px] overflow-hidden rounded-[10px] md:h-[200px] md:w-[200px] hover:scale-105 duration-500 cursor-pointer"
                                    @else
                                      class="relative h-[160px] w-[160px] overflow-hidden rounded-[10px] md:h-[200px] md:w-[200px]"
                                    @endif
                                  >
                                    <img
                                      src="{{ $member->photo_url }}"
                                      alt="{{ $member->name }}"
                                      class="absolute h-full w-full bg-gray-300"
                                    />
                                    <div
                                      class="absolute bottom-0 left-0 right-0 h-1/2 bg-gradient-to-t from-black opacity-70"
                                    ></div>
                                    <div class="absolute bottom-2 z-10 ps-2">
                                      <p
                                        class="bottom-6 text-[9px] font-semibold text-white drop-shadow-md md:bottom-8 md:text-sm"
                                      >
                                        {{ $member->name }}
                                      </p>
                                      <p class="bottom-3 text-[10px] text-orange1 md:text-sm">
                                        {{ $member->position }}
                                      </p>
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
