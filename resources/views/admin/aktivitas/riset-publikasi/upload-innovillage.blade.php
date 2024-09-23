<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-blue-400 min-h-screen flex justify-center">
    <div class="w-full bg-white rounded-2xl my-4 mx-4 shadow-lg flex flex-col">
        <div class="flex items-center pl-10 py-5">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-8 h-10 object-cover">
            <h2 class="pl-6 font-semibold text-xl">Halaman Admin</h2>
        </div>
        <hr class="border-grey-300 border" />

        <!-- Wrapper untuk sidebar dan konten utama -->
        <div class="flex flex-1 overflow-hidden">
            <!-- Panggil Sidebar -->
            <x-sidebar />

            <!-- Konten Utama di Sebelah Sidebar -->
            <div class="px-10 py-10 w-full">
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Innovillage</h2>
                <p>Isi konten untuk tambah innovillage</p>

                <form action={{ route('upload_innovillage') }} method="POST" enctype="multipart/form-data"
                    class="pt-10">
                    <div class="flex justify-between">
                        <!-- Bagian untuk input teks -->
                        <div class="flex-1 space-y-4">
                            <!-- Judul Innovillage-->
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Judul
                                    Innovillage</label>
                                <input type="text" id="title" name="title"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Deskripsi Innovillage -->
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                                    Innovillage</label>
                                <textarea id="description" name="description" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required></textarea>
                            </div>

                            <!-- Tahun Innovillage -->
                            <div class="mb-4 w-1/2">
                                <label for="innovillage_year" class="block text-sm font-medium text-gray-700">Tahun
                                    Innovillage</label>
                                <input type="date" id="innovillage_year" name="innovillage_year"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>



                            <!-- Tim Innovillage -->
                            <div class="mb-4">
                                <label for="image_team" class="block text-sm font-medium text-gray-700">Tim
                                    Innovillage</label>
                                <div id="team-container" class="flex items-start gap-4">
                                    <div>
                                        <label for="image_team" id="image_team-label"
                                            class="inline-block cursor-pointer bg-white border-2 border-gray-300 h-24 w-24 py-8 px-8 rounded-md hover:bg-slate-100 bg-cover bg-center">
                                            ➕
                                        </label>
                                        <input type="file" id="image_team" name="image_team" accept="image_team/*"
                                            class="hidden" onchange="displayImageInLabel(this)">
                                        <!-- Pastikan input Nama tetap berdekatan dengan label gambar -->
                                        <input type="text" placeholder="Nama"
                                            class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                                    </div>
                                </div>
                            </div>


                            <button id="add-team-btn" type="button"
                                class="mt-4 bg-white border border-gray-400 text-black px-4 py-2 rounded-md">Tambah
                                Tim</button>
                        </div>

                        <!-- Bagian untuk input Dokumentasi Innovillage -->
                        <div class="flex flex-col bg-cyan-300 px-2 py-2 ml-2 rounded-xl flex-none self-start">
                            <!-- Card Gambar Utama -->
                            <div class="w-full max-w-md mb-2">
                                <img id="main_image" src="https://dummyimage.com/420x260" alt="Main Image"
                                    class="w-full h-auto object-cover max-h-64" />
                            </div>

                            <!-- Card Gambar Kecil -->
                            <div class="flex  gap-1">
                                <div class="flex gap-1">
                                    <div class="w-24 h-24">
                                        <img id="image_1" src="https://dummyimage.com/420x260" alt="Image 1"
                                            class="w-full h-full object-cover" />
                                    </div>
                                    <div class="w-24 h-24">
                                        <img id="image_2" src="https://dummyimage.com/420x260" alt="Image 2"
                                            class="w-full h-full object-cover" />
                                    </div>
                                    <div class="w-24 h-24">
                                        <img id="image_3" src="https://dummyimage.com/420x260" alt="Image 3"
                                            class="w-full h-full object-cover" />
                                    </div>
                                </div>


                                <!-- Input Gambar -->
                                <div class="mt-10">
                                    <label for="image-input"
                                        class="inline-block cursor-pointer bg-cyan-300 border-2 border-white text-xs text-white font-semibold py-2 px-2 rounded-xl hover:bg-cyan-400">
                                        Tambah
                                    </label>
                                    <input type="file" id="image-input" name="image" accept="image/*"
                                        class="hidden" onchange="displayImage(this)" multiple>
                                    <label onclick="resetImages()"
                                        class="inline-block cursor-pointer bg-cyan-300 border-2 border-white text-xs text-white font-semibold py-2 px-3 rounded-xl hover:bg-cyan-400">
                                        Reset
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-cyan-300 text-white py-2 px-12 font-semibold rounded-md hover:bg-cyan-400 transition duration-200">
                            Tambah Berita
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    // Fungsi untuk menampilkan gambar pratinjau di dalam label
    function displayImageInLabel(input) {
        const file = input.files[0];
        const label = input.previousElementSibling;

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // Terapkan gambar sebagai background pada label
                label.style.backgroundImage = `url(${e.target.result})`;
                label.style.backgroundSize = 'cover'; // Gambar akan menutupi area label
                label.style.backgroundPosition = 'center'; // Gambar akan berada di tengah label
                label.style.backgroundRepeat = 'no-repeat'; // Gambar tidak akan berulang
                label.textContent = ''; // Hapus simbol ➕ setelah gambar muncul
            };
            reader.readAsDataURL(file);
        } else {
            // Jika tidak ada gambar, kembalikan tampilan label ke semula
            label.style.backgroundImage = '';
            label.textContent = '➕';
        }
    }


    // JavaScript untuk menambah form tim baru
    let teamCount = 1; // jumlah form tim yang ada
    const maxTeams = 3; // batas maksimal form tim
    const addTeamBtn = document.getElementById('add-team-btn');
    const teamContainer = document.getElementById('team-container');

    addTeamBtn.addEventListener('click', function() {
        if (teamCount < maxTeams) {
            teamCount++;

            // Buat elemen baru untuk tim
            const newTeamDiv = document.createElement('div');
            newTeamDiv.classList.add('team-item');

            // HTML untuk input tim baru
            newTeamDiv.innerHTML = `
                <div>
                    <label for="image_team${teamCount}" id="image_team-label${teamCount}"
                        class="inline-block cursor-pointer bg-white border-2 border-gray-300 h-24 w-24 py-8 px-8 rounded-md hover:bg-slate-100 bg-cover bg-center">
                        ➕
                    </label>
                    <input type="file" id="image_team${teamCount}" name="image_team" accept="image_team/*"
                        class="hidden" onchange="displayImageInLabel(this)">
                    <input type="text" placeholder="Nama"
                        class="mt-2 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none sm:text-sm">
                    
                </div>
            `;

            // Tambahkan elemen baru ke dalam kontainer tim
            teamContainer.appendChild(newTeamDiv);
        } else {
            alert('Maksimal 3 Tim!');
        }
    });
    let images = [];

    // Fungsi untuk menampilkan gambar
    function displayImage(input) {
        const files = input.files;
        for (let i = 0; i < files.length && images.length < 4; i++) {
            const reader = new FileReader();
            reader.onload = function(e) {
                images.push(e.target.result); // Menambah gambar ke array
                updateImages(); // Update tampilan gambar
            };
            reader.readAsDataURL(files[i]);
        }
    }

    // Fungsi untuk mengupdate gambar di tampilan
    function updateImages() {
        // Jika ada lebih dari 3 gambar, jadikan gambar ke-4 sebagai gambar utama
        if (images.length > 3) {
            document.getElementById('main_image').src = images[3];
        }

        // Update gambar 1-3 di bagian bawah
        for (let i = 0; i < 3 && i < images.length; i++) {
            document.getElementById(`image-${i + 1}`).src = images[i];
        }
    }

    // Fungsi reset gambar
    function resetImages() {
        images = []; // Menghapus semua gambar di array
        document.getElementById('main_image').src = "https://dummyimage.com/420x260"; // Reset gambar utama ke default
        for (let i = 1; i <= 3; i++) {
            document.getElementById(`image-${i}`).src =
                "https://dummyimage.com/420x260"; // Reset gambar kecil ke default
        }
        document.getElementById('image-input').value = ''; // Reset input file
    }
</script>
</body>

</html>
