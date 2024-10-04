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
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Pelatihan</h2>
                <p>Isi konten untuk tambah pelatihan</p>

                <form action="#" method="POST" enctype="multipart/form-data" class="pt-10">
                    <div class="flex justify-between">
                        <!-- Bagian untuk input teks -->
                        <div class="flex-1 space-y-4">
                            <!-- Judul Pelatihan-->
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Judul
                                    Pelatihan</label>
                                <input type="text" id="title" name="title"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Deskripsi Pelatihan -->
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                                    Pelatihan</label>
                                <textarea id="description" name="description" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required></textarea>
                            </div>

                            <!-- Tanggal Pelatihan, lokasi dan jenis pelatihan -->
                            <div class="flex gap-4 w-[85%]">
                                <!-- Tanggal Pelatihan -->
                                <div class="mb-4 w-1/2">
                                    <label for="training_date" class="block text-sm font-medium text-gray-700">Tanggal
                                        Pelatihan</label>
                                    <input type="date" id="training_date" name="training_date"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                        required>
                                </div>

                                <!-- lokasi -->
                                <div class="mb-4 w-1/2">
                                    <label for="location" class="block text-sm font-medium text-gray-700">Lokasi</label>
                                    <input type="text" id="location" name="location"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                        required>
                                </div>

                                <!-- Jenis Pelatihan -->
                                <div class="mb-4 w-1/2">
                                    <label for="type" class="block text-sm font-medium text-gray-700">Jenis
                                        Pelatihan</label>
                                    <input type="text" id="type" name="type"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                        required>
                                </div>
                            </div>

                            <!-- Link pelatihan -->
                            <div class="mb-4">
                                <label for="link" class="block text-sm font-medium text-gray-700">Link
                                    Pelatihan</label>
                                <input type="url" id="link" name="link"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>
                        </div>

                        <!-- Bagian untuk input gambar pelatihan -->
                        <div class="flex-none self-start pl-10 w-[30%]">
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">
                                    Foto Pelatihan
                                </label>
                                <div
                                    class="relative w-full h-48 bg-cyan-300 text-white rounded-md flex items-center justify-center hover:bg-cyan-400">
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
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="px-5 py-2.5 relative rounded group overflow-hidden font-medium bg-cyan-300 text-white inline-block">
                            <span
                                class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-cyan-50 group-hover:h-full opacity-90"></span>
                            <span class="relative group-hover:text-cyan-300">Submit Pelatihan</span>
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
</script>

</html>
