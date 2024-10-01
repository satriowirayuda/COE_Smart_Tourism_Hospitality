<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
{{-- <nav id="navbar"
    class="fixed top-0 left-0 right-0 z-20 w-full bg-transparent p-4 transition-all duration-300 border-b-2 border-black">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center gap-2">
            <div class="flex flex-col justify-center">
                <span class="text-lg">Halaman Admin</span>
            </div>
        </div>
    </div>
</nav> --}}

<body class="bg-blue-400 min-h-screen flex justify-center">
    <div class="w-full bg-white rounded-2xl my-4 mx-4 shadow-lg flex flex-col">
        <div class="flex items-center pl-10 py-5">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-8 h-10 object-cover">
            <h2 class="pl-6 font-semibold text-xl">Halaman Admin</h2>
        </div>
        <hr class="border-grey-300 border" />


        <!-- Logo -->
        <div class="flex justify-center mb-6 pt-10">
            <img src="{{ asset('assets/logo.png') }}" alt="Logo" class="w-24 h-28">
        </div>

        <!-- Login Form -->
        <h2 class="text-2xl font-bold text-center">Manajemen Konten</h2>
        <p class="text-center">Pilih konten untuk di-edit</p>

        <!-- Card Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 p-10 px-24">

            <!-- Card 1 -->
            <a href="/project" class="block">
                <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                    <div class="flex bg-white items-center justify-center h-36 w-full">
                        <img src="{{ asset('assets/project-terkini.svg') }}" alt="Card Image" class="object-contain">
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Proyek Terkini</h3>

                    </div>
                </div>
            </a>

            <!-- Card 2 -->
            <a href="/aktivitas" class="block">
                <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                    <div class="flex bg-white items-center justify-center h-36 w-full">
                        <img src="{{ asset('assets/aktivitas.svg') }}" alt="Card Image" class="object-contain">
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Aktivitas</h3>

                    </div>
                </div>
            </a>

            <!-- Card 3 -->
            <a href="/member" class="block">
                <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                    <div class="flex bg-white items-center justify-center h-36 w-full">
                        <img src="{{ asset('assets/anggota.svg') }}" alt="Card Image" class="object-contain">
                    </div>
                    <div class="p-4 bg-white">
                        <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Anggota</h3>

                    </div>
                </div>
            </a>

            <!-- Card 4 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                <div class="flex bg-white items-center justify-center h-36 w-full">
                    <img src="{{ asset('assets/timeline.svg') }}" alt="Card Image" class="object-contain">
                </div>
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Timeline</h3>

                </div>
            </div>

            <!-- Card 5 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden items-center">
                <div class="flex bg-white items-center justify-center h-36 w-full">
                    <img src="{{ asset('assets/program.svg') }}" alt="Card Image" class="object-contain">
                </div>
                <div class="p-4 bg-white">
                    <h3 class="font-semibold text-xl mb-2 text-center text-shadow-xl">Program</h3>

                </div>
            </div>

        </div>
    </div>
</body>

</html>
