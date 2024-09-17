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
            <div class="flex-1 p-10 text-gray-800 overflow-auto">
                <h2 class="font-semibold text-2xl">Manajemen Konten Berita</h2>
                <p>Pilih konten untuk di-edit</p>

                <div class="mt-6">
                    <a href="/upload-news" class="bg-cyan-300 hover:bg-cyan-200 text-white font-bold py-2 px-4 rounded">
                        Tambah Berita
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>







</html>
