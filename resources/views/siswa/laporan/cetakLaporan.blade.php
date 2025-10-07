<div class="bg-blue-50  flex flex-col justify-center items-center p-6">
    <div class="container mx-auto px-4 pt-10">
        <div class="w-full max-w-4xl bg-white rounded-2xl shadow-lg p-8 mx-auto">
            <h1 class="text-2xl font-bold text-gray-800 mb-8 text-center">Cetak Laporan</h1>

            <form action="cetak-laporan.php" method="GET" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Pilih Bulan -->
                <div>
                    <label for="bulan" class="block text-gray-700 font-semibold mb-2">Bulan</label>
                    <select id="bulan" name="bulan"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Pilih Bulan</option>
                        <option value="01">Januari</option>
                        <option value="02">Februari</option>
                        <option value="03">Maret</option>
                        <option value="04">April</option>
                        <option value="05">Mei</option>
                        <option value="06">Juni</option>
                        <option value="07">Juli</option>
                        <option value="08">Agustus</option>
                        <option value="09">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                    </select>
                </div>

                <!-- Pilih Tahun -->
                <div>
                    <label for="tahun" class="block text-gray-700 font-semibold mb-2">Tahun</label>
                    <select id="tahun" name="tahun"
                        class="w-full px-4 py-3 border border-gray-300 rounded-xl shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Pilih Tahun</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>

                <!-- Tombol Cetak -->
                <div class="flex items-end">
                    <button onclick="window.open('cetak.html', '_blank')"
                        class="w-full bg-blue-900 hover:bg-blue-500 text-white font-semibold py-3 rounded-xl shadow transition">
                        Cetak Laporan
                    </button>
                </div>
            </form>
        </div>

    </div>