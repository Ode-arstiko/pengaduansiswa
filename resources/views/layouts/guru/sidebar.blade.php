<aside id="sidebar"
    class="w-64 bg-blue-900 text-white p-5 flex flex-col shadow-lg fixed inset-y-0 left-0 transform -translate-x-full sm:relative sm:translate-x-0 transition-transform duration-300 ease-in-out z-40">
    <div class="text-center mb-10">
        <img src="{{ asset('assets/logo/logo-smkn2kra.webp') }}" alt="Logo"
            class="w-16 h-16 mx-auto rounded-full mb-2" />
        <h1 class="text-sm font-bold leading-tight">PENGADUAN<br />SKANDAKRA</h1>
    </div>

    <nav class="space-y-2">
        <!-- Dashboard -->
        <a href="dashboard.html"
            class="flex items-center gap-2 bg-white text-blue-700 font-semibold p-3 rounded-lg shadow ring-2 ring-blue-400 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 12l9-9 9 9M4 10v10a1 1 0 001 1h4a1 1 0 001-1v-4h4v4a1 1 0 001 1h4a1 1 0 001-1V10" />
            </svg>
            Dashboard
        </a>

        <!-- Data Siswa -->
        <a href="tanggapan.html"
            class="flex items-center gap-2 hover:bg-blue-700 hover:text-white p-3 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5.121 17.804A4 4 0 017 17h10a4 4 0 011.879.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
            Data Siswa Pengguna
        </a>

        <!-- Data Guru -->
        <a href="riwayat_tanggapan.html"
            class="flex items-center gap-2 hover:bg-blue-700 hover:text-white p-3 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17 20h5v-2a3 3 0 00-3-3h-2M7 20H2v-2a3 3 0 013-3h2m3-6a3 3 0 100-6 3 3 0 000 6zm8 0a3 3 0 100-6 3 3 0 000 6z" />
            </svg>
            Data Guru Pengguna
        </a>

        <!-- Data Admin -->
        <a href="cetak-laporan.html"
            class="flex items-center gap-2 hover:bg-blue-700 hover:text-white p-3 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M6 9V4h12v5M6 18h12v-5H6v5zM6 14H4a2 2 0 01-2-2V9a2 2 0 012-2h2" />
            </svg>
            Data Admin
        </a>
    </nav>
</aside>
