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
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Kedai CoE</h2>
                <p>Isi konten untuk tambah kedai CoE</p>

                <form action="#" method="POST" enctype="multipart/form-data" class="pt-10">
                    <div class="flex justify-between">
                        <div class="flex-1 space-y-4">

                            <!-- Nama Kedai -->
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Nama Kedai</label>
                                <input type="text" id="title" name="title"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Deskripsi Kedai -->
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                                    Kedai</label>
                                <textarea id="description" name="description" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required></textarea>
                            </div>

                            <!-- Instagram dan Whatsapp -->
                            <div class="flex gap-4 w-[45%]">
                                <!-- Instagram -->
                                <div class="mb-4 w-1/2">
                                    <label for="instagram"
                                        class="block text-sm font-medium text-gray-700">Instagram</label>
                                    <input type="text" id="instagram" name="instagram"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                        required>
                                </div>

                                <!-- Whatsapp -->
                                <div class="mb-4 w-1/2">
                                    <label for="whatsapp"
                                        class="block text-sm font-medium text-gray-700">Whatsapp</label>
                                    <input type="text" id="whatsapp" name="whatsapp"
                                        class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                        required>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian untuk input gambar kedai -->
                        <div class="flex-none self-start pl-10">

                            <label for="image" class="block text-sm font-medium text-gray-700">
                                Foto Produk
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
                            <span class="relative group-hover:text-cyan-300">Submit Kedai</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
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
</script>

</html>
