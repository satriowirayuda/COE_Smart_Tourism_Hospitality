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
        <x-header />

        <!-- Wrapper untuk sidebar dan konten utama -->
        <div class="flex flex-1 overflow-hidden">
            <!-- Panggil Sidebar -->
            <x-sidebar />

            <!-- Konten Utama di Sebelah Sidebar -->
            <div class="px-10 py-10 w-full">
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Inovasi CoE</h2>
                <p>Isi konten untuk tambah inovasi</p>

                <form action="#" method="POST" enctype="multipart/form-data" class="pt-10">
                    <div class="flex justify-between">
                        <div class="flex-1 space-y-4">

                            <!-- Nama Inovasi -->
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Nama
                                    Inovasi</label>
                                <input type="text" id="title" name="title"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Deskripsi Inovasi -->
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                                    Jurnal</label>
                                <textarea id="description" name="description" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required></textarea>
                            </div>

                            <!-- Kategori dan Klien-->
                            <div class="flex gap-4 w-[45%]">
                                <!-- category -->
                                <div class="mb-4 w-1/2">
                                    <label for="category"
                                        class="block text-sm font-medium text-gray-700">Kategori</label>
                                    <input type="text" id="category" name="category"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                        required>
                                </div>

                                <!-- client -->
                                <div class="mb-4 w-1/2">
                                    <label for="client" class="block text-sm font-medium text-gray-700">Klien</label>
                                    <input type="text" id="client" name="client"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                        required>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="logo" class="block text-sm font-medium text-gray-700">
                                    Foto Logo Mitra
                                </label>
                                <div class="bg-cyan-300 px-2 py-2 rounded-lg relative">
                                    <p class="text-center text-gray-500">Pilih Gambar Logo Mitra <br> max 50 gambar</p>

                                    <!-- Grid for displaying uploaded logos -->
                                    <div id="logo-preview-container" class="grid grid-cols-10 gap-1 mt-4">
                                        <!-- Empty initially, will be populated dynamically -->
                                    </div>

                                    <!-- Input Gambar -->
                                    <div class="mt-10 flex justify-end gap-2">
                                        <label for="logo-input"
                                            class="inline-block cursor-pointer bg-cyan-300 border-2 border-white text-xs text-white font-semibold py-2 px-2 rounded-xl hover:bg-cyan-400">
                                            Tambah
                                        </label>
                                        <input type="file" id="logo-input" name="logo[]" accept="image/*"
                                            class="hidden" multiple onchange="handleLogoUpload(this)">
                                        <label onclick="resetLogos()"
                                            class="inline-block cursor-pointer bg-cyan-300 border-2 border-white text-xs text-white font-semibold py-2 px-3 rounded-xl hover:bg-cyan-400">
                                            Reset
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <!-- Bagian untuk input gambar Inovasi -->
                        <div class="flex-none self-start pl-10">
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">
                                    Foto Inovasi
                                </label>
                                <div
                                    class="relative w-full h-36 bg-cyan-300 text-white rounded-md flex items-center justify-center hover:bg-cyan-400">
                                    <label for="image"
                                        class="cursor-pointer absolute inset-0 flex items-center justify-center">
                                        ➕
                                    </label>
                                    <input type="file" id="image" name="image" accept="image/*" class="hidden"
                                        onchange="displayImageInLabel(this)">
                                    <img id="preview" src="" alt="Preview Gambar"
                                        class="absolute inset-0 w-full h-full object-cover hidden">
                                </div>
                                <div id="file-name" class="text-sm text-gray-500 mt-2"></div>
                                <!-- Tempat untuk menampilkan nama file -->
                            </div>

                            <label for="image" class="block text-sm font-medium text-gray-700">
                                Dokumentasi
                            </label>
                            <div class="bg-cyan-300 px-2 py-2 rounded-lg">

                                <!-- Card Gambar -->
                                <div class="grid grid-cols-3 gap-1">
                                    <div class="w-28 h-20">
                                        <img id="image_1" src="https://dummyimage.com/420x260" alt="Image 1"
                                            class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="w-28 h-20">
                                        <img id="image_2" src="https://dummyimage.com/420x260" alt="Image 2"
                                            class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="w-28 h-20">
                                        <img id="image_3" src="https://dummyimage.com/420x260" alt="Image 3"
                                            class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="w-28 h-20">
                                        <img id="image_4" src="https://dummyimage.com/420x260" alt="Image 4"
                                            class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="w-28 h-20">
                                        <img id="image_5" src="https://dummyimage.com/420x260" alt="Image 5"
                                            class="w-full h-full object-cover rounded-md" />
                                    </div>
                                    <div class="w-28 h-20">
                                        <img id="image_6" src="https://dummyimage.com/420x260" alt="Image 6"
                                            class="w-full h-full object-cover rounded-md" />
                                    </div>
                                </div>

                                <!-- Input Gambar -->
                                <div class="mt-10 flex justify-end gap-2 ">
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
                            class="px-5 py-2.5 relative rounded group overflow-hidden font-medium bg-cyan-300 text-white inline-block">
                            <span
                                class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-cyan-50 group-hover:h-full opacity-90"></span>
                            <span class="relative group-hover:text-cyan-300">Submit Inovasi</span>
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

    let images = [];

    function displayImage(input) {
        const files = input.files;
        for (let i = 0; i < files.length && images.length < 6; i++) {
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

        for (let i = 0; i < 6 && i < images.length; i++) {
            document.getElementById(`image_${i + 1}`).src = images[i];
        }
    }

    // Fungsi reset gambar
    function resetImages() {
        images = []; // Menghapus semua gambar di array
        for (let i = 1; i <= 6; i++) {
            document.getElementById(`image_${i}`).src =
                "https://dummyimage.com/420x260"; // Reset gambar kecil ke default
        }
        document.getElementById('image-input').value = ''; // Reset input file
    }
    let logos = [];

    // Function to handle logo uploads
    function handleLogoUpload(input) {
        const files = input.files;
        const maxLogos = 50; // Limit to 50 logos
        const logoContainer = document.getElementById('logo-preview-container');

        // Only add up to 50 logos
        for (let i = 0; i < files.length && logos.length < maxLogos; i++) {
            const reader = new FileReader();
            reader.onload = function(e) {
                logos.push(e.target.result);
                updateLogos();
            };
            reader.readAsDataURL(files[i]);
        }
    }

    // Function to update the logo preview grid
    function updateLogos() {
        const logoContainer = document.getElementById('logo-preview-container');
        logoContainer.innerHTML = ''; // Clear previous images

        logos.forEach((logo, index) => {
            const imgElement = document.createElement('img');
            imgElement.src = logo;
            imgElement.alt = `Logo ${index + 1}`;
            imgElement.classList.add('w-full', 'h-full', 'object-cover', 'rounded-md');
            const divElement = document.createElement('div');
            divElement.classList.add('w-14', 'h-14');
            divElement.appendChild(imgElement);
            logoContainer.appendChild(divElement);
        });
    }

    // Function to reset logos
    function resetLogos() {
        logos = []; // Clear all logos
        updateLogos(); // Update the preview
        document.getElementById('logo-input').value = ''; // Reset file input
    }
</script>

</html>
