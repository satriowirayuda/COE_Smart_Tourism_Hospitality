<body>
<section class="w-full pt-10 pb-28 font-arial">

    <div class="px-5 md:px-10 lg:px-28">
        <div class="mx-auto mb-10 border-t-[1px] border-[#A9A9A9]"></div>

        <p class="mx-auto text-center text-xl md:text-2xl font-semibold">Tim Magang Kami</p>

        <div class="flex justify-center bg-white rounded-[15px] md:rounded-[30px] lg:rounded-[30px] lg:w-[639px] h-10 md:h-14 lg:h-14 mx-auto border border-[#5D5D5D] my-10 gap-14 text-sm font-semibold text-black">

            <button id="inhouseButton" class="text-[#FF8A00] font-semibold" onclick="showInhouse()">Anggota</button>
            <div class="flex items-center">
                <div class="border-r-[1px] border-black h-7"></div> 
            </div>
            <button id="anggotaButton" onclick="showMagang()">Mahasiswa Magang</button>
            <div class="flex items-center">
                <div class="border-r-[1px] border-black h-7"></div>
            </div>
            <button id="alumniButton" onclick="showAlumni()">Alumni</button>

        </div>

        <!-- ANGGOTA INTERNAL -->
        <div 
            id="inhouseSection" 
            class="bg-gradient-to-b from-[#2593CF] from-85% to-[#134B69] to-100% rounded-[20px] sm:rounded-[30px] lg:rounded-[40px] shadow-2xl pt-10 pb-16 px-4 md:px-10 lg:px-20">

            <p class="text-xl md:text-2xl font-bold text-white text-center">Anggota</p>

            <!-- KETUA COE -->
            
            <div class="relative flex flex-col items-center justify-center pt-8 ">
                <a href="#">
                    <div class="relative w-36 md:w-44 lg:w-52 mx-auto transform transition-transform duration-300 hover:scale-110">
                        <div class="relative  md:w-52">
                            <img src="{{ asset('assets/bu-ersy.png') }}" alt="Ketua COE" class="rounded-lg ">
                            <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                            </div>
                        </div>

                        <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                            <p class="font-semibold text-white">Dr. Ersy Ervina, S.Sos.MM.Par.</p>
                            <p class="text-pink-sth pt-1">Ketua CoE STH</p>
                        </div>
                    </div>
                </a>
            </div>

            <!-- ANGGOTA COE -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 pt-10 gap-y-5 md:gap-y-3 lg:gap-6 items-center mx-auto">

                <div class="relative flex flex-col items-center justify-center">
                    <a href="#">
                        <div class="relative w-36 md:w-44 lg:w-52 mx-auto transform transition-transform duration-300 hover:scale-110">
                            <div class="relative  md:w-52">
                                <img src="{{ asset('assets/profil.png') }}" alt="Ketua COE" class="rounded-lg ">
                                <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                                </div>
                            </div>

                            <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                                <p class="font-semibold text-white">Nama Anggota</p>
                                <p class="text-pink-sth pt-1">Jabatan</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative flex flex-col items-center justify-center">
                    <a href="#">
                        <div class="relative w-36 md:w-44 lg:w-52 mx-auto transform transition-transform duration-300 hover:scale-110">
                            <div class="relative  md:w-52">
                                <img src="{{ asset('assets/profil.png') }}" alt="Ketua COE" class="rounded-lg ">
                                <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                                </div>
                            </div>

                            <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                                <p class="font-semibold text-white">Nama Anggota</p>
                                <p class="text-pink-sth pt-1">Jabatan</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative flex flex-col items-center justify-center">
                    <a href="#">
                        <div class="relative w-36 md:w-44 lg:w-52 mx-auto transform transition-transform duration-300 hover:scale-110">
                            <div class="relative  md:w-52">
                                <img src="{{ asset('assets/profil.png') }}" alt="Ketua COE" class="rounded-lg ">
                                <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                                </div>
                            </div>

                            <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                                <p class="font-semibold text-white">Nama Anggota</p>
                                <p class="text-pink-sth pt-1">Jabatan</p>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="relative flex flex-col items-center justify-center">
                    <a href="#">
                        <div class="relative w-36 md:w-44 lg:w-52 mx-auto transform transition-transform duration-300 hover:scale-110">
                            <div class="relative  md:w-52">
                                <img src="{{ asset('assets/profil.png') }}" alt="Ketua COE" class="rounded-lg ">
                                <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                                </div>
                            </div>

                            <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                                <p class="font-semibold text-white">Nama Anggota</p>
                                <p class="text-pink-sth pt-1">Jabatan</p>
                            </div>
                        </div>
                    </a>
                </div>
                
            </div>

        </div>

        <!-- MAHASISWA MAGANG -->
        <div id="magangSection" class="hidden bg-gradient-to-b from-[#2593CF] to-[#134B69] rounded-[20px] pt-10 pb-16 px-4 md:px-10 lg:px-20">
            <p class="text-xl md:text-2xl font-bold text-white text-center">Mahasiswa Magang</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 pt-10 gap-y-5 items-center mx-auto">
                
                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/1-min.png') }}" alt="anggota" class="rounded-lg">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Farrel Muhammad Ardan</p>
                        <p class="text-pink-sth pt-1">Marketing</p>
                    </div>
                </div>

                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/2-min.png') }}" alt="anggota" class="rounded-lg">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Adelia Putri Abadi</p>
                        <p class="text-pink-sth pt-1">UI/UX Designer</p>
                    </div>
                </div>

                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/3-min.png') }}" alt="anggota" class="rounded-lg">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Aufa</p>
                        <p class="text-pink-sth pt-1">Marketing</p>
                    </div>
                </div>

                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/4-min.png') }}" alt="anggota" class="rounded-lg">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Lhase</p>
                        <p class="text-pink-sth pt-1">Marketing</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- ALUMNI -->
        <div id="alumniSection" class="hidden bg-gradient-to-b from-[#2593CF] to-[#134B69] rounded-[20px] pt-10 pb-16 px-4 md:px-10 lg:px-20">
            <p class="text-xl md:text-2xl font-bold text-white text-center">Alumni</p>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 pt-10 gap-y-5 items-center mx-auto">

                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/anggota-1.png') }}" alt="anggota" class="rounded-lg">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Nama Alumni</p>
                        <p class="text-pink-sth pt-1">JABATAN</p>
                    </div>
                </div>

                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/anggota-2.png') }}" alt="anggota" class="rounded-lg">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Nama Alumni</p>
                        <p class="text-pink-sth pt-1">JABATAN</p>
                    </div>
                </div>

                <div class="relative w-40 md:w-48 lg:w-52 mx-auto">
                    <div class="relative">
                        <img src="{{ asset('assets/anggota-3.png') }}" alt="anggota" class="rounded-lg">
                        <div class = "absolute inset-0 bg-gradient-to-b from-black/0 to-black/50 to-100% rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-0 w-full text-[9px] md:text-[11px] lg:text-sm px-2 py-5">
                        <p class="font-semibold text-white">Nama Alumni</p>
                        <p class="text-pink-sth pt-1">JABATAN</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<script>
    // Fungsi untuk menampilkan bagian Internal
    function showInhouse() {
        document.getElementById('inhouseSection').classList.remove('hidden');
        document.getElementById('magangSection').classList.add('hidden');
        document.getElementById('alumniSection').classList.add('hidden');
        updateButtonStyles('inhouseButton');
    }

    // Fungsi untuk menampilkan bagian Magang
    function showMagang() {
        document.getElementById('inhouseSection').classList.add('hidden');
        document.getElementById('magangSection').classList.remove('hidden');
        document.getElementById('alumniSection').classList.add('hidden');
        updateButtonStyles('anggotaButton');
    }

    // Fungsi untuk menampilkan bagian Alumni
    function showAlumni() {
        document.getElementById('inhouseSection').classList.add('hidden');
        document.getElementById('magangSection').classList.add('hidden');
        document.getElementById('alumniSection').classList.remove('hidden');
        updateButtonStyles('alumniButton');
    }

    // Fungsi untuk memperbarui gaya tombol
    function updateButtonStyles(activeButtonId) {
        const buttons = ['inhouseButton', 'anggotaButton', 'alumniButton'];
        buttons.forEach(buttonId => {
            const button = document.getElementById(buttonId);
            if (buttonId === activeButtonId) {
                button.classList.add('text-[#FF8A00]', 'font-semibold');
            } else {
                button.classList.remove('text-[#FF8A00]', 'font-semibold');
            }
        });
    }
</script>
</body>
