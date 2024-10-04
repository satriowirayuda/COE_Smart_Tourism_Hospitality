<!-- resources/views/components/sidebar.blade.php -->
<div class="w-64 h-[95%] flex flex-col border-r border-grey-300">

    <!-- Menu Navigation -->
    <nav class="flex-1 mt-6">
        <ul class="space-y-2">
            <li>
                <a href="/project"
                    class="block py-2.5 px-4  rounded hover:bg-gray-200 transition duration-200 {{ request()->is('project') ? 'bg-kuning-bg ' : '' }}">
                    Proyek Terkini
                </a>
            </li>

            </li>
            <li>
                <a href="/aktivitas"
                    class="block py-2.5 px-4 rounded hover:bg-gray-200 transition duration-200 {{ request()->is('aktivitas', 'news', 'upload-news', 'riset-publikasi', 'innovillage', 'jurnal', 'upload-innovillage', 'upload-jurnal', 'bisnis', 'kedai', 'pelatihan', 'upload-kedai', 'upload-pelatihan', 'inovasi', 'upload-inovasi') ? 'bg-kuning-bg' : '' }}">
                    Aktivitas
                </a>
            </li>
            <li>
                <a href="/member"
                    class="block py-2.5 px-4 rounded hover:bg-gray-200 transition duration-200 {{ request()->is('member', 'upload-member') ? 'bg-kuning-bg ' : '' }}">
                    Anggota
                </a>
            </li>
            <li>
                <a href="/timeline"
                    class="block py-2.5 px-4 rounded hover:bg-gray-200 transition duration-200 {{ request()->is('timeline', 'upload-timeline') ? 'bg-kuning-bg ' : '' }}">
                    Timeline
                </a>
            </li>
            <li>
                <a href="/program"
                    class="block py-2.5 px-4 rounded hover:bg-gray-200 transition duration-200 {{ request()->is('program', 'mbkm-magang', 'kerja-sama', 'upload-mbkm-magang', 'upload-kerja-sama') ? 'bg-kuning-bg ' : '' }}">
                    Program
                </a>
            </li>
        </ul>
    </nav>

</div>
