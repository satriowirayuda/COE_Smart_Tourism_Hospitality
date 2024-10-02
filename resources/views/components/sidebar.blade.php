<!-- resources/views/components/sidebar.blade.php -->
<div class="w-64 h-[95%] flex flex-col border-r border-grey-300">

    <!-- Menu Navigation -->
    <nav class="flex-1 mt-6">
        <ul class="space-y-2">
            <li>
                <a href="/project"
                    class="block py-2.5 px-4 rounded hover:bg-amber-500 transition duration-200 {{ request()->is('project') ? 'bg-red-500 ' : '' }}">
                    Proyek Terkini
                </a>
            </li>

            </li>
            <li>
                <a href="/aktivitas"
                    class="block py-2.5 px-4 rounded hover:bg-amber-500 transition duration-200 {{ request()->is('aktivitas', 'news', 'upload-news', 'riset-publikasi', 'innovillage', 'jurnal', 'upload-innovillage', 'upload-jurnal', 'bisnis', 'kedai', 'pelatihan', 'upload-kedai', 'upload-pelatihan', 'inovasi') ? 'bg-red-500' : '' }}">
                    Aktivitas
                </a>
            </li>
            <li>
                <a href="/member"
                    class="block py-2.5 px-4 rounded hover:bg-amber-500 transition duration-200 {{ request()->is('member', 'upload-member') ? 'bg-red-500 ' : '' }}">
                    Anggota
                </a>
            </li>
            <li>
                <a href="/timeline"
                    class="block py-2.5 px-4 rounded hover:bg-amber-500 transition duration-200 {{ request()->is('timeline', 'upload-timeline') ? 'bg-red-500 ' : '' }}">
                    Timeline
                </a>
            </li>
            <li>
                <a href="#" class="block py-2.5 px-4 rounded hover:bg-amber-500 transition duration-200">
                    Program
                </a>
            </li>
        </ul>
    </nav>

</div>
