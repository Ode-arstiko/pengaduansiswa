<div class="max-w-7xl mx-auto bg-white p-6 mt-10 rounded-lg shadow-lg">
            <!-- Filter Bar -->
            <div class="flex flex-col sm:flex-row sm:items-center sm:space-x-4 space-y-4 sm:space-y-0 mb-6">
                <!-- Search -->
                <div class="flex items-center border rounded-lg px-3 py-2 w-full sm:w-64 bg-gray-100">
                    <svg class="w-5 h-5 text-gray-400 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <circle cx="11" cy="11" r="7"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                    </svg>
                    <input id="searchInput" type="text" placeholder="Cari laporan.."
                        class="bg-transparent outline-none w-full text-gray-700" />
                </div>

                <!-- Filter Status -->
                <select id="statusFilter"
                    class="border rounded-lg px-3 py-2 w-full sm:w-48 bg-white text-gray-700 focus:outline-blue-500">
                    <option value="">Semua Status</option>
                    <option value="Pending">Pending</option>
                    <option value="Proses">Proses</option>
                    <option value="Selesai">Selesai</option>
                    <option value="Ditolak">Ditolak</option>
                </select>

                <!-- Filter Tanggal -->
                <select id="dateFilter"
                    class="border rounded-lg px-3 py-2 w-full sm:w-48 bg-white text-gray-700 focus:outline-blue-500">
                    <option value="">Semua Tanggal</option>
                    <option value="today">Hari Ini</option>
                    <option value="week">Minggu Ini</option>
                    <option value="month">Bulan Ini</option>
                </select>
            </div>

            <!-- Table -->
            <div class="flex space-x-2 mb-4 px-2 lg:px-10 overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b border-gray-200 text-sm text-gray-500">
                            <th class="px-4 py-3">NO</th>
                            <th class="px-4 py-3">JUDUL</th>
                            <th class="px-4 py-3">PELAPOR</th>
                            <th class="px-4 py-3">STATUS</th>
                            <th class="px-4 py-3">TANGGAL</th>
                            <th class="px-4 py-3">DITUJUKAN</th>
                            <th class="px-4 py-3 text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="text-gray-700">


                        <!-- Row 1 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50" data-title="Permohonan Pindah Kelas"
                            data-status="Ditolak" data-date="2025-05-19T20:51:00">
                            <td class="px-4 py-3">1</td>
                            <td class="px-4 py-3">Permohonan Pindah Kelas</td>
                            <td class="px-4 py-3 flex items-center space-x-2">
                                <div
                                    class="w-7 h-7 rounded-full bg-blue-500 text-white flex items-center justify-center text-xs font-semibold">
                                    BS</div>
                                <span>Bayu Saputra</span>
                            </td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-red-100 text-red-700 text-xs font-semibold px-2.5 py-1 rounded-full">Ditolak</span>
                            </td>
                            <td class="px-4 py-3">19 May 2025 20:51</td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">BK</span>
                            </td>
                            <!-- Tombol untuk membuka modal -->
                            <!-- Tombol untuk membuka modal -->
                            <!-- Modal -->
                            <!-- Tombol untuk membuka modal -->
                            <td class="px-4 py-3 text-center">
                                <button
                                    onclick="document.getElementById('modalJawabDitolak').classList.remove('hidden')"
                                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1.5 rounded flex items-center space-x-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span>Jawab</span>
                                </button>
                            </td>
                            <div id="modalJawabDitolak"
                                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden overflow-y-auto">
                                <div class="bg-white rounded-lg w-full max-w-2xl mx-4 my-2 p-6 relative max-h-[90vh] h-fit overflow-y-auto"
                                    style="margin-top: 10px; margin-bottom: 10px;">
                                    <!-- Judul -->
                                    <h2 class="text-xl font-bold mb-4 text-center">Detail Laporan</h2>

                                    <!-- Gambar Kecil -->
                                    <!-- Thumbnail Gambar -->
                                    <div class="flex justify-center mb-4">
                                        <img src="../assets/image/Sejarah.webp"
                                            onclick="showFullImage('modalfotoDitolak', '../assets/image/Sejarah.webp')"
                                            class="cursor-pointer rounded-lg shadow-md w-48 h-48 object-cover hover:scale-105 duration-200">
                                    </div>

                                    <!-- Modal Gambar Besar di modalfotoDitolak -->
                                    <div id="modalfotoDitolak"
                                        class="hidden fixed inset-0 bg-black bg-opacity-70 z-50 flex items-center justify-center px-4 py-10">
                                        <div class="relative">
                                            <!-- Tombol Close -->
                                            <button onclick="closeImageModal('modalfotoDitolak')"
                                                class="absolute -top-4 -right-4 bg-white rounded-full p-1 shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                            <!-- Gambar Besar -->
                                            <img id="modalImage_modalfotoDitolak" src="" alt="Gambar Besar"
                                                class="max-w-full max-h-[90vh] rounded-lg shadow-lg">
                                        </div>
                                    </div>

                                    <!-- Isi Laporan -->
                                    <div class="mb-4 text-gray-700">
                                        <label class="block mb-1 font-medium text-gray-700">Deskripsi laporan</label>
                                        <textarea rows="3"
                                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-3"
                                            readonly>Permintaan pindah kelas saya ditolak karena alasan tidak memenuhi kriteria BK.</textarea>
                                    </div>

                                    <!-- Ikon Penolakan -->
                                    <div class="mb-4">
                                        <label class="block mb-1 font-medium text-gray-700">Status Laporan</label>
                                        <div class="flex items-center space-x-3">
                                            <!-- Gambar atau ikon penolakan -->
                                            <button onclick="setStatusTolak()"
                                                class="p-2 bg-red-100 hover:bg-red-200 rounded-full shadow-md transition duration-200">
                                                <!-- Ikon silang -->
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                            <span class="text-sm text-red-600 font-semibold">Laporan Ditolak</span>
                                        </div>
                                    </div>
                                    <!-- Alasan -->
                                    <div class="mb-6">
                                        <label class="block mb-1 font-medium text-gray-700">Alasan</label>
                                        <textarea rows="3" readonly
                                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-3"
                                            placeholder="Tulis alasan penolakan atau penerimaan laporan..."> Laporan sudah pernah diajukan sebelumnya dan sedang dalam proses penanganan.
                                    </textarea>
                                    </div>

                                    <!-- Tombol -->
                                    <div class="flex justify-end space-x-4">
                                        <button
                                            onclick="document.getElementById('modalJawabDitolak').classList.add('hidden')"
                                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg">
                                            Kembali
                                        </button>
                                        <button
                                            class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg">
                                            Selesai
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </tr>

                        <!-- Row 2 -->
                        <tr class="border-b border-gray-100 hover:bg-gray-50" data-title="Permintaan Konseling Pribadi"
                            data-status="Pending" data-date="2025-05-16T13:04:00">
                            <td class="px-4 py-3">2</td>
                            <td class="px-4 py-3">Permintaan Konseling Pribadi</td>
                            <td class="px-4 py-3 flex items-center space-x-2">
                                <div
                                    class="w-7 h-7 rounded-full bg-green-600 text-white flex items-center justify-center text-xs font-semibold">
                                    SL</div>
                                <span>Sinta Lestari</span>
                            </td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-amber-100 text-amber-500 text-xs font-semibold px-2.5 py-1 rounded-full">Pending</span>
                            </td>
                            <td class="px-4 py-3">16 May 2025 13:04</td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">BK</span>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <button
                                    onclick="document.getElementById('modalJawabPending').classList.remove('hidden')"
                                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1.5 rounded flex items-center space-x-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span>Jawab</span>
                                </button>
                            </td>

                            <!-- Modal -->
                            <div id="modalJawabPending"
                                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden overflow-y-auto">
                                <div class="bg-white rounded-lg w-full max-w-2xl mx-4 my-2 p-6 relative max-h-[90vh] h-fit overflow-y-auto"
                                    style="margin-top: 10px; margin-bottom: 10px;">
                                    <!-- Judul -->
                                    <h2 class="text-xl font-bold mb-4 text-center">Detail Laporan</h2>

                                    <div class="flex justify-center mb-4">
                                        <img src="image/admin.jpg"
                                            onclick="showFullImage('modalfotoPending', 'image/admin.jpg')"
                                            class="cursor-pointer rounded-lg shadow-md w-48 h-48 object-cover hover:scale-105 duration-200">
                                    </div>

                                    <!-- Modal Gambar Besar di modalfotoPending -->
                                    <div id="modalfotoPending"
                                        class="hidden fixed inset-0 bg-black bg-opacity-70 z-50 flex items-center justify-center px-4 py-10">
                                        <div class="relative">
                                            <!-- Tombol Close -->
                                            <button onclick="closeImageModal('modalfotoPending')"
                                                class="absolute -top-4 -right-4 bg-white rounded-full p-1 shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                            <!-- Gambar Besar -->
                                            <img id="modalImage_modalfotoPending" src="" alt="Gambar Besar"
                                                class="max-w-full max-h-[90vh] rounded-lg shadow-lg">
                                        </div>
                                    </div>

                                    <!-- Isi Laporan -->
                                    <div class="mb-4 text-gray-700">
                                        <label class="block mb-1 font-medium text-gray-700">Deskripsi laporan</label>
                                        <textarea rows="3"
                                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-3"
                                            readonly>Saya merasa cemas akhir-akhir ini dan ingin berkonsultasi dengan guru BK.</textarea>
                                    </div>

                                    <!-- Pilihan Aksi -->
                                    <div class="mb-4">
                                        <label class="block mb-1 font-medium text-gray-700">Status Laporan</label>
                                        <select
                                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-3">
                                            <option value="">Pilih Aksi</option>
                                            <option value="tolak">Tolak Laporan</option>
                                            <option value="terima">Terima Laporan</option>
                                        </select>
                                    </div>

                                    <!-- Alasan -->
                                    <div class="mb-6">
                                        <label class="block mb-1 font-medium text-gray-700">Alasan</label>
                                        <textarea rows="3"
                                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-3"
                                            placeholder="Tulis alasan penolakan atau penerimaan laporan...">Laporan kamu sedang diproses oleh admin.</textarea>
                                    </div>

                                    <!-- Tombol -->
                                    <div class="flex justify-end space-x-4">
                                        <button
                                            onclick="document.getElementById('modalJawabPending').classList.add('hidden')"
                                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg">
                                            Kembali
                                        </button>
                                        <button
                                            class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg">
                                            Kirim
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </tr>

                        <!-- Row 3 -->
                        <tr class="hover:bg-gray-50" data-title="Konseling Akademik" data-status="Selesai"
                            data-date="2025-05-16T12:56:00">
                            <td class="px-4 py-3">3</td>
                            <td class="px-4 py-3">Konseling Akademik</td>
                            <td class="px-4 py-3 flex items-center space-x-2">
                                <div
                                    class="w-7 h-7 rounded-full bg-blue-700 text-white flex items-center justify-center text-xs font-semibold">
                                    NA</div>
                                <span>Nur Aisyah</span>
                            </td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">Selesai</span>
                            </td>
                            <td class="px-4 py-3">16 May 2025 12:56</td>
                            <td class="px-4 py-3">
                                <span
                                    class="bg-green-100 text-green-700 text-xs font-semibold px-2.5 py-1 rounded-full">BK</span>
                            </td>
                            <td class="px-4 py-3 text-center">
                                <button
                                    onclick="document.getElementById('modalJawabSelesai').classList.remove('hidden')"
                                    class="bg-blue-600 hover:bg-blue-700 text-white text-sm px-3 py-1.5 rounded flex items-center space-x-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                                    </svg>
                                    <span>Jawab</span>
                                </button>
                            </td>
                            <div id="modalJawabSelesai"
                                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden overflow-y-auto">
                                <div class="bg-white rounded-lg w-full max-w-2xl mx-4 my-2 p-6 relative max-h-[90vh] h-fit overflow-y-auto"
                                    style="margin-top: 10px; margin-bottom: 10px;">
                                    <!-- Judul -->
                                    <h2 class="text-xl font-bold mb-4 text-center">Detail Laporan</h2>

                                    <div class="flex justify-center mb-4">
                                        <img src="image/user.jpg"
                                            onclick="showFullImage('modalfotoSelesai', 'image/user.jpg')"
                                            class="cursor-pointer rounded-lg shadow-md w-48 h-48 object-cover hover:scale-105 duration-200">
                                    </div>

                                    <!-- Modal Gambar Besar di modalfotoSelesai -->
                                    <div id="modalfotoSelesai"
                                        class="hidden fixed inset-0 bg-black bg-opacity-70 z-50 flex items-center justify-center px-4 py-10">
                                        <div class="relative">
                                            <!-- Tombol Close -->
                                            <button onclick="closeImageModal('modalfotoSelesai')"
                                                class="absolute -top-4 -right-4 bg-white rounded-full p-1 shadow-md">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-black"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                            <!-- Gambar Besar -->
                                            <img id="modalImage_modalfotoSelesai" src="" alt="Gambar Besar"
                                                class="max-w-full max-h-[90vh] rounded-lg shadow-lg">
                                        </div>
                                    </div>


                                    <!-- Isi Laporan -->
                                    <div class="mb-4 text-gray-700">
                                        <label class="block mb-1 font-medium text-gray-700">Deskripsi laporan</label>
                                        <textarea rows="3"
                                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-3"
                                            readonly>Saya sudah menerima arahan dari guru BK terkait pilihan jurusan saya. Terima kasih.</textarea>
                                    </div>

                                    <!-- Pilihan Aksi -->
                                    <div class="mb-4">
                                        <label class="block mb-1 font-medium text-gray-700">Status Laporan</label>
                                        <!-- Tombol Selesai -->
                                        <div class="flex items-center space-x-3">
                                            <button onclick="setStatus('selesai')" id="btnSelesai"
                                                class="p-2 bg-green-100 hover:bg-green-200 rounded-full shadow transition">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                    stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M5 13l4 4L19 7" />
                                                </svg>
                                            </button>
                                            <span class="text-green-600 font-semibold " id="labelSelesai">Laporan
                                                Selesai</span>
                                        </div>
                                    </div>

                                    <!-- Alasan -->
                                    <div class="mb-6">
                                        <label class="block mb-1 font-medium text-gray-700">Alasan</label>
                                        <textarea rows="3"
                                            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 text-sm py-2 px-3"
                                            readonly
                                            placeholder="Tulis alasan penolakan atau penerimaan laporan...">Laporan sudah kami tindak lanjuti, terima kasih.</textarea>
                                    </div>

                                    <!-- Tombol -->
                                    <div class="flex justify-end space-x-4">
                                        <button
                                            onclick="document.getElementById('modalJawabSelesai').classList.add('hidden')"
                                            class="bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-lg">
                                            Kembali
                                        </button>
                                        <button
                                            class="bg-green-600 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded-lg">
                                            Selesai
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <script>
        function showFullImage(modalId, src) {
            document.getElementById(modalId).classList.remove("hidden");
            document.getElementById("modalImage_" + modalId).src = src;
        }

        function closeImageModal(modalId) {
            document.getElementById(modalId).classList.add("hidden");
        }


        function toggleDropdown() {
            const menu = document.getElementById("dropdown-menu");
            menu.classList.toggle("hidden");
        }

        // Tutup dropdown saat klik di luar
        window.addEventListener("click", function (e) {
            const btn = document.querySelector("button[onclick='toggleDropdown()']");
            const menu = document.getElementById("dropdown-menu");

            if (!btn.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add("hidden");
            }
        });

        const searchInput = document.getElementById("searchInput");
        const statusFilter = document.getElementById("statusFilter");
        const dateFilter = document.getElementById("dateFilter");
        const rows = document.querySelectorAll("tbody tr");

        function filterTable() {
            const keyword = searchInput.value.toLowerCase();
            const status = statusFilter.value;
            const date = dateFilter.value;
            const now = new Date();

            rows.forEach(row => {
                const title = row.dataset.title.toLowerCase();
                const rowStatus = row.dataset.status;
                const rowDate = new Date(row.dataset.date);

                let matchKeyword = title.includes(keyword);
                let matchStatus = !status || rowStatus === status;
                let matchDate = true;

                if (date === "today") {
                    matchDate = isSameDay(rowDate, now);
                } else if (date === "week") {
                    const oneWeekAgo = new Date();
                    oneWeekAgo.setDate(now.getDate() - 7);
                    matchDate = rowDate >= oneWeekAgo;
                } else if (date === "month") {
                    const oneMonthAgo = new Date();
                    oneMonthAgo.setMonth(now.getMonth() - 1);
                    matchDate = rowDate >= oneMonthAgo;
                }

                if (matchKeyword && matchStatus && matchDate) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        function isSameDay(date1, date2) {
            return date1.getDate() === date2.getDate() &&
                date1.getMonth() === date2.getMonth() &&
                date1.getFullYear() === date2.getFullYear();
        }

        searchInput.addEventListener("input", filterTable);
        statusFilter.addEventListener("change", filterTable);
        dateFilter.addEventListener("change", filterTable);
    </script>
