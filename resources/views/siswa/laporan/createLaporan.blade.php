<div class="w-full bg-white p-4 rounded-lg shadow-md border border-gray-200">
    <div class="text-center mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600 mx-auto mb-1" fill="none"
            viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 20h9M12 4h9M3 4h.01M3 20h.01M4 12h16M4 12l4-4m0 8l-4-4" />
        </svg>
        <h2 class="text-lg font-semibold text-gray-800">Form Aduan</h2>
    </div>

    <form class="space-y-3">
        <!-- Nama -->
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-600 mb-1">Nama Pengadu</label>
            <input type="text" id="nama" name="nama" placeholder="Nama lengkap"
                class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:ring-blue-200" />
        </div>

        <!-- Judul -->
        <div>
            <label for="judul" class="block text-sm font-medium text-gray-600 mb-1">Judul </label>
            <input type="text" id="judul" name="judul" placeholder="Judul singkat aduan"
                class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:ring-blue-200" />
        </div>

        <!-- Aduan -->
        <div>
            <label for="aduan" class="block text-sm font-medium text-gray-600 mb-1">Isi Aduan</label>
            <textarea id="aduan" name="aduan" rows="2" placeholder="Tuliskan aduan singkat..."
                class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm resize-none focus:outline-none focus:ring focus:ring-blue-200"></textarea>
        </div>

        <!-- Upload Foto dan Tujuan Aduan (1 baris) -->
        <div class="flex flex-col md:flex-row gap-4">
            <!-- Upload Foto -->
            <div class="flex-1">
                <label for="foto" class="block text-sm font-medium text-gray-600 mb-1">Upload Foto</label>
                <input type="file" id="foto" name="foto" class="block w-full text-sm text-gray-700 border border-gray-300 rounded-lg bg-white file:mr-3 file:py-2 file:px-4
                         file:rounded-md file:border-0 file:text-sm file:font-medium
                         file:bg-blue-50 file:text-blue-700
                         hover:file:bg-blue-100 transition duration-200" />
            </div>

            <!-- Tujuan Aduan -->
            <div class="flex-1">
                <label for="jenis" class="block text-sm font-medium text-gray-600 mb-1">Tujuan Aduan</label>
                <select id="jenis" name="jenis"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:ring-blue-200">
                    <option value="">-- Pilih --</option>
                    <option value="BK">BK</option>
                    <option value="Kesiswaan">Kesiswaan</option>
                    <option value="Kurikulum">Kurikulum</option>
                    <option value="TU">Tata Usaha</option>
                </select>
            </div>
        </div>

        <!-- Tombol -->
        <div class="text-right pt-2">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-md transition">
                Kirim
            </button>
        </div>
    </form>
</div>