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
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Berita</h2>
                <p>Isi konten untuk tambah berita</p>

                <form action={{ route('upload_news') }} method="POST" enctype="multipart/form-data" class="pt-10">
                    <div class="flex justify-between">
                        <!-- Bagian untuk input teks -->
                        <div class="flex-1 space-y-4">
                            <!-- Judul Berita -->
                            <div class="mb-4">
                                <label for="title" class="block text-sm font-medium text-gray-700">Judul
                                    Berita</label>
                                <input type="text" id="title" name="title"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Deskripsi Berita -->
                            <div class="mb-4">
                                <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                                    Berita</label>
                                <textarea id="description" name="description" rows="4"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required></textarea>
                            </div>

                            <!-- Link Berita -->
                            <div class="mb-4">
                                <label for="link" class="block text-sm font-medium text-gray-700">Link
                                    Berita</label>
                                <input type="url" id="link" name="link"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Tanggal Berita -->
                            <div class="mb-4">
                                <label for="news_date" class="block text-sm font-medium text-gray-700">Tanggal
                                    Berita</label>
                                <input type="date" id="news_date" name="news_date"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Kategori Berita (Dropdown) -->
                            <div class="mb-4">
                                <label for="category" class="block text-sm font-medium text-gray-700">Katergori
                                    Berita</label>
                                <select id="category" name="category"
                                    class="mt-1 block w-full px-3 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm">
                                    <option value="a">Artikel</option>
                                    <option value="p">Penghargaan</option>
                                </select>
                            </div>

                            <!-- Berita Utama (Radio Button) -->
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700">Berita Utama</label>
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="is_primary" value="true"
                                            class="form-radio h-4 w-4 text-amber-500 border-gray-300" required>
                                        <span class="ml-2">Ya</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" name="is_primary" value="false"
                                            class="form-radio h-4 w-4 text-amber-500 border-gray-300">
                                        <span class="ml-2">Tidak</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Bagian untuk input gambar (dokumentasi berita) -->
                        <div class="flex-none self-start pl-10">
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">
                                    Dokumentasi Berita
                                </label>
                                <div>
                                    <label for="image"
                                        class="inline-block cursor-pointer bg-cyan-300 text-white py-16 px-36 rounded-md hover:bg-cyan-400">
                                        ➕
                                    </label>
                                    <input type="file" id="image" name="image" accept="image/*" class="hidden">
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="bg-cyan-300 text-white py-2 px-4 rounded-md hover:bg-cyan-400 transition duration-200">
                            Tambah Berita
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>


</html>
