<div class="flex space-x-4 mb-4 lg:px-10">
    <button onclick="filterLaporan('all', this)" id="btn-all"
        class="filter-button text-green-600 border-b-2 border-green-600 pb-2 font-medium">
        Riwayat
    </button>
    <button onclick="filterLaporan('pending', this)" id="btn-pending"
        class="filter-button text-gray-500 pb-2 hover:text-black">
        Pending
    </button>
    <button onclick="filterLaporan('proses', this)" id="btn-proses"
        class="filter-button text-gray-500 pb-2 hover:text-black">
        Proses
    </button>
    <button onclick="filterLaporan('selesai', this)" id="btn-selesai"
        class="filter-button text-gray-500 pb-2 hover:text-black">
        Selesai
    </button>
    <button onclick="filterLaporan('ditolak', this)" id="btn-ditolak"
        class="filter-button text-gray-500 pb-2 hover:text-black">
        Ditolak
    </button>
</div>

<!-- Laporan Items -->
<div id="laporan-container" class="space-y-4 lg:px-10">

    <!-- KESISWAAN -->
    <div onclick="window.location.href='detail-riwayat-selesai.html'" data-status="selesai"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Siti Aminah</div>
            <div class="font-medium text-gray-900">Toilet Belakang Gedung B</div>
            <div class="text-xs text-gray-600">Toilet bagian belakang rusak dan air tidak mengalir, sudah
                diperbaiki sekarang. Terima kasih.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : Kesiswaan</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">16 Juli 2025, 08:10</div>
            <button
                class="text-xs font-semibold bg-blue-100 text-blue-600 px-2 py-1 rounded-full">Selesai</button>
        </div>
    </div>

    <!-- TATA USAHA -->
    <div onclick="window.location.href='detail-riwayat-ditolak.html'" data-status="ditolak"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Nur Hasanah</div>
            <div class="font-medium text-gray-900">Kantin Sekolah</div>
            <div class="text-xs text-gray-600">Banyak sampah menumpuk di sekitar kantin dan belum dibersihkan
                sejak pagi. Harap ditindak.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : Tata Usaha (TU)</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">19 Juli 2025, 09:00</div>
            <button
                class="text-xs font-semibold bg-red-100 text-red-600 px-2 py-1 rounded-full">Ditolak</button>
        </div>
    </div>

    <!-- BK -->
    <div onclick="window.location.href='detail-riwayat-pending.html'" data-status="pending"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Aldo Saputra</div>
            <div class="font-medium text-gray-900">Tindakan Bullying di Kelas</div>
            <div class="text-xs text-gray-600">Terjadi dugaan bullying terhadap siswa baru di kelas XI TKJ.
                Mohon ditindaklanjuti.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : BK</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">19 Juli 2025, 12:30</div>
            <button
                class="text-xs font-semibold bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">Pending</button>
        </div>
    </div>

    <!-- WAKA KURIKULUM -->
    <div onclick="window.location.href='detail-riwayat-proses.html'" data-status="proses"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Intan Wulandari</div>
            <div class="font-medium text-gray-900">Jadwal Kelas Tidak Sinkron</div>
            <div class="text-xs text-gray-600">Jadwal pelajaran kelas X RPL tidak sinkron dengan guru yang
                mengajar. Perlu penyesuaian agar tidak bentrok.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : Waka Kurikulum</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">18 Juli 2025, 15:20</div>
            <button
                class="text-xs font-semibold bg-green-100 text-green-600 px-2 py-1 rounded-full">Proses</button>
        </div>
    </div>
    <!-- BK -->
    <div onclick="window.location.href='detail-riwayat-selesai.html'" data-status="selesai"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Rendi Pratama</div>
            <div class="font-medium text-gray-900">Permasalahan Pribadi Siswa</div>
            <div class="text-xs text-gray-600">Ada siswa yang mengalami tekanan emosional dan butuh pendampingan
                segera.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : BK</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">14 Juli 2025, 10:15</div>
            <button
                class="text-xs font-semibold bg-blue-100 text-blue-600 px-2 py-1 rounded-full">Selesai</button>
        </div>
    </div>

    <!-- Kesiswaan -->
    <div onclick="window.location.href='detail-riwayat-proses.html'" data-status="proses"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Vania Destiara</div>
            <div class="font-medium text-gray-900">Terlambat Masuk Sekolah</div>
            <div class="text-xs text-gray-600">Banyak siswa terlambat masuk kelas tanpa tindakan. Mohon
                pengawasan lebih lanjut.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : Kesiswaan</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">18 Juli 2025, 06:50</div>
            <button
                class="text-xs font-semibold bg-green-100 text-green-600 px-2 py-1 rounded-full">Proses</button>
        </div>
    </div>

    <!-- Tata Usaha -->
    <div onclick="window.location.href='detail-riwayat-pending.html'" data-status="pending"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Rika Ayu</div>
            <div class="font-medium text-gray-900">Kesalahan Data Nilai Rapor</div>
            <div class="text-xs text-gray-600">Nilai pada rapor semester genap tidak sesuai dengan hasil ujian.
                Mohon klarifikasi.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : Tata Usaha (TU)</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">20 Juli 2025, 13:40</div>
            <button
                class="text-xs font-semibold bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">Pending</button>
        </div>
    </div>

    <!-- Waka Kurikulum -->
    <div onclick="window.location.href='detail-riwayat-selesai.html'" data-status="selesai"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Dini Karlina</div>
            <div class="font-medium text-gray-900">Ketidaksesuaian Jadwal Guru</div>
            <div class="text-xs text-gray-600">Guru Matematika tidak masuk sesuai jadwal karena konflik jadwal
                antar kelas.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : Waka Kurikulum</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">13 Juli 2025, 09:05</div>
            <button
                class="text-xs font-semibold bg-blue-100 text-blue-600 px-2 py-1 rounded-full">Selesai</button>
        </div>
    </div>

    <!-- BK -->
    <div onclick="window.location.href='detail-riwayat-ditolak.html'" data-status="ditolak"
        class="laporan-card bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
        <img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
        <div class="flex-1">
            <div class="text-sm text-gray-500 mb-1">Nama Pengadu: Rafi Nurhadi</div>
            <div class="font-medium text-gray-900">Permintaan Surat Rekomendasi</div>
            <div class="text-xs text-gray-600">Mengajukan surat rekomendasi untuk lomba debat namun belum
                ditanggapi oleh BK.</div>
            <div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : BK</div>
        </div>
        <div class="flex flex-col items-end">
            <div class="text-sm font-semibold text-gray-800 mb-2">12 Juli 2025, 14:25</div>
            <button
                class="text-xs font-semibold bg-red-100 text-red-600 px-2 py-1 rounded-full">Ditolak</button>
        </div>
    </div>


</div>