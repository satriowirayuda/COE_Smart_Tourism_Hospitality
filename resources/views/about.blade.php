<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="flex items-center justify-between h-[4rem] lg:h-[6rem] px-28 bg-[#F5F5F5]">
        <div class="flex items-center gap-2">
            <div class="h-[3.5rem] lg:h-[4rem] py-1">
                <img
                    src="/lingian-logo.png"
                    alt=""
                    class="h-full">
            </div>
            <div class="flex flex-col justify-center">
                <span class="text-lg">Center of Excellence</span>
                <span class="text-xs font-bold">Smart Tourism & Hotpitality</span>
            </div>
        </div>
        <div
            class="flex items-center gap-10 h-full *:h-full">
            <a
                to="/"
                class="flex items-center hover:underline underline-offset-4">Beranda</a>
            <div
                class="relative group flex justify-center"
                @mouseover="navHover.tentangKami = true"
                @mouseleave="navHover.tentangKami = false">
                <button class="">Tentang Kami
                    <Icon
                        name="ic:round-keyboard-arrow-down"
                        class="text-xl group-hover:-rotate-180 transition-all duration-200" />
                </button>
                <!-- <div
                    class="flex flex-col bg-zinc-700/90 px-6 py-2 rounded-md absolute top-[95%] *:text-nowrap z-30">
                    <a
                        class="hover:underline underline-offset-4">Visi dan Misi</a>
                    <a
                        class="hover:underline underline-offset-4">Struktur organisasi COE STH</a>
                    <a
                        class="hover:underline underline-offset-4">Produk dan Mitra COE STH</a>
                    <a
                        class="hover:underline underline-offset-4">Scope Objek COE Smart Tourism dan Hospitality</a>
                    <a
                        class="hover:underline underline-offset-4">Scope Smart Tourism dan Hospitality Research Roadmap</a>
                </div> -->
            </div>
            <div
                class="relative group flex justify-center">
                <button class="">Aktivitas
                    <Icon
                        name="ic:round-keyboard-arrow-down"
                        class="text-xl group-hover:-rotate-180 transition-all duration-200" />
                </button>
                <!-- <div
                    class="flex flex-col bg-zinc-700/90 px-6 py-2 rounded-md absolute top-[95%] *:text-nowrap z-30"
                    v-show="navHover.aktivitas">
                    <a
                        class="hover:underline underline-offset-4">Riset</a>
                    <a
                        class="hover:underline underline-offset-4">Bisnis</a>
                    <a
                        class="hover:underline underline-offset-4">Inovasi</a>
                </div> -->
            </div>
            <div
                class="relative group flex justify-center">
                <button class="">Program
                    <Icon
                        name="ic:round-keyboard-arrow-down"
                        class="text-xl group-hover:-rotate-180 transition-all duration-200" />
                </button>
                <!-- <div
                    class="flex flex-col bg-zinc-700/90 px-6 py-2 rounded-md absolute top-[95%] -right-8 *:text-nowrap z-30">
                    <a
                        class="hover:underline underline-offset-4">MBKM dan Magang</a>
                    <a
                        class="hover:underline underline-offset-4">Pengabdian Masyarakat
                    </a>
                    <a
                        class="hover:underline underline-offset-4">Roadmap Penelitian Hotel
                    </a>
                    <a
                        class="hover:underline underline-offset-4">Roadmap Smart Tourism dan Hospitality
                    </a>
                </div> -->
            </div>
        </div>
    </header>
    <a href="http://localhost:8000/" class="text-pink-500">fldksjflksdf</a>
</body>

</html>