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
                <h2 class="font-semibold text-2xl">Manajemen Tambahan Jurnal</h2>
                <p>Isi konten untuk tambah jurnal</p>

                <form action={{ route('upload_journal') }} method="POST" enctype="multipart/form-data"
                    class="pt-10 w-[75%]">
                    <!-- Judul Jurnal -->
                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Judul Jurnal</label>
                        <input type="text" id="title" name="title"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                            required>
                    </div>

                    <!-- Deskripsi Jurnal -->
                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi
                            Jurnal</label>
                        <textarea id="description" name="description" rows="4"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                            required></textarea>
                    </div>

                    <!-- Tanggal Jurnal dan Penulis Jurnal -->
                    <div class="flex gap-4 w-[45%]">
                        <!-- Tanggal Jurnal -->
                        <div class="mb-4 w-1/2">
                            <label for="journal_date" class="block text-sm font-medium text-gray-700">Tanggal
                                Jurnal</label>
                            <input type="date" id="journal_date" name="journal_date"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                required>
                        </div>

                        <!-- Penulis Jurnal -->
                        <div class="mb-4 w-1/2">
                            <label for="author" class="block text-sm font-medium text-gray-700">Penulis Jurnal</label>
                            <input type="text" id="author" name="author"
                                class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                                required>
                        </div>
                    </div>

                    <!-- Link DOI -->
                    <div class="mb-4">
                        <label for="doi_link" class="block text-sm font-medium text-gray-700">Link DOI</label>
                        <input type="url" id="doi_link" name="doi_link"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                            required>
                    </div>

                    <!-- Link Jurnal -->
                    <div class="mb-4">
                        <label for="journal_link" class="block text-sm font-medium text-gray-700">Link Jurnal</label>
                        <input type="url" id="journal_link" name="journal_link"
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-amber-500 focus:border-amber-500 sm:text-sm"
                            required>
                    </div>

                    <!-- Submit Button -->
                    <div class="mt-6">
                        <button type="submit"
                            class="px-5 py-2.5 relative rounded group overflow-hidden font-medium bg-cyan-300 text-white inline-block">
                            <span
                                class="absolute top-0 left-0 flex w-full h-0 mb-0 transition-all duration-200 ease-out transform translate-y-0 bg-cyan-50 group-hover:h-full opacity-90"></span>
                            <span class="relative group-hover:text-cyan-300">Submit Jurnal</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
