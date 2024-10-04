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
                <h2 class="font-semibold text-2xl">Konten Project Terkini</h2>
                <p>Pilih konten untuk di-edit</p>

                <div class="mt-6">
                    <a href="/upload-project"
                        class="bg-cyan-300 hover:bg-cyan-200 text-white font-bold py-2 px-4 rounded">
                        Tambah Proyek
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
