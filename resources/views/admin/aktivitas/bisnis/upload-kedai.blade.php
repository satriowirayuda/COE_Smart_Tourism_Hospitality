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
                                    Jurnal</label>
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
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">
                                    Foto produk
                                </label>
                                <div>
                                    <label for="image"
                                        class="inline-block cursor-pointer bg-cyan-300 text-white py-16 px-36 rounded-md hover:bg-cyan-400">
                                        ➕
                                    </label>
                                    <input type="file" id="image" name="image" accept="image/*" class="hidden"
                                        onchange="displayFileName()">
                                </div>
                                <div id="file-name" class="text-sm text-gray-500 mt-2"></div>
                                <!-- Tempat untuk menampilkan nama file -->
                            </div>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-cyan-300 text-white py-2 px-4 rounded-md hover:bg-cyan-400 transition duration-200">
                            Tambah Jurnal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script>
    function displayFileName() {
        const input = document.getElementById('image');
        const fileNameDisplay = document.getElementById('file-name');
        const fileName = input.files[0] ? input.files[0].name : 'Tidak ada file yang dipilih';
        fileNameDisplay.textContent = fileName;
    }
</script>

</html>
