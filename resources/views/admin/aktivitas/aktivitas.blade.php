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
        <div class="flex overflow-hidden">
            <!-- Panggil Sidebar -->
            <x-sidebar />

            <!-- Konten Utama di Sebelah Sidebar -->
            <div class="px-10 py-10 w-full">
                <h2 class="font-semibold text-2xl">Manajemen Konten Aktivitas</h2>
                <p>pilih konten untuk di-edit</p>

                <!-- Card Grid -->
                <div class="pt-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full">

                    <!-- Card 1 -->
                    <a href="/news" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                            <div class="flex bg-white items-center justify-center h-36 w-full">
                                <img src="{{ asset('assets/berita.svg') }}" alt="Card Image" class="object-contain">
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Berita</h3>

                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="/riset-publikasi" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                            <div class="flex bg-white items-center justify-center h-36 w-full">
                                <img src="{{ asset('assets/riset-publikasi.svg') }}" alt="Card Image"
                                    class="object-contain">
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Riset dan Publikasi
                                </h3>

                            </div>
                        </div>
                    </a>

                    <!-- Card 3 -->
                    <a href="/inovasi" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                            <div class="flex bg-white items-center justify-center h-36 w-full">
                                <img src="{{ asset('assets/inovasi.svg') }}" alt="Card Image" class="object-contain">
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Inovasi</h3>

                            </div>
                        </div>
                    </a>

                    <!-- Card 4 -->
                    <a href="/bisnis" class="block">
                        <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                            <div class="flex bg-white items-center justify-center h-36 w-full">
                                <img src="{{ asset('assets/bisnis.svg') }}" alt="Card Image" class="object-contain">
                            </div>
                            <div class="p-4 bg-white">
                                <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Bisnis</h3>

                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
