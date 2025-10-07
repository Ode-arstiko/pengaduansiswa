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
        <div id="laporan-container" class="space-y-4 lg:px-10">
			<!-- DITERIMA - BK -->
			<div onclick="window.location.href='detail-riwayat-pending.html'" data-status="pending"
				class="laporan-card cursor-pointer bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
				<img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
				<div class="flex-1">
					<div class="text-sm text-gray-500 mb-1">Nama Pengadu: Sinta Lestari</div>
					<div class="font-medium text-gray-900">Permintaan Konseling Pribadi</div>
					<div class="text-xs text-gray-600">Saya merasa cemas akhir-akhir ini dan ingin berkonsultasi dengan
						guru BK.</div>
					<div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : BK</div>
				</div>
				<div class="flex flex-col items-end">
					<div class="text-sm font-semibold text-gray-800 mb-2">21 Juli 2025, 14:20</div>
					<button
						class="text-xs font-semibold bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">Pending</button>
				</div>
			</div>


			<!-- PROSES - BK -->
			<div onclick="window.location.href='detail-riwayat-proses.html'" data-status="proses"
				class="laporan-card cursor-pointer bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
				<img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
				<div class="flex-1">
					<div class="text-sm text-gray-500 mb-1">Nama Pengadu: Riko Prasetyo</div>
					<div class="font-medium text-gray-900">Masalah Pergaulan</div>
					<div class="text-xs text-gray-600">Saya ingin membicarakan tentang tekanan dari teman sebaya yang
						saya alami.</div>
					<div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : BK</div>
				</div>
				<div class="flex flex-col items-end">
					<div class="text-sm font-semibold text-gray-800 mb-2">20 Juli 2025, 11:00</div>
					<button
						class="text-xs font-semibold bg-green-100 text-green-600 px-2 py-1 rounded-full">Proses</button>
				</div>
			</div>


			<!-- SELESAI - BK -->
			<div onclick="window.location.href='detail-riwayat-selesai.html'" data-status="selesai"
				class="laporan-card cursor-pointer bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
				<img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
				<div class="flex-1">
					<div class="text-sm text-gray-500 mb-1">Nama Pengadu: Nur Aisyah</div>
					<div class="font-medium text-gray-900">Konseling Akademik</div>
					<div class="text-xs text-gray-600">Saya sudah menerima arahan dari guru BK terkait pilihan jurusan
						saya. Terima kasih.</div>
					<div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : BK</div>
				</div>
				<div class="flex flex-col items-end">
					<div class="text-sm font-semibold text-gray-800 mb-2">19 Juli 2025, 10:30</div>
					<button
						class="text-xs font-semibold bg-blue-100 text-blue-600 px-2 py-1 rounded-full">Selesai</button>
				</div>
			</div>


			<!-- DITOLAK - BK -->
			<div onclick="window.location.href='detail-riwayat-ditolak.html'" data-status="ditolak"
				class="laporan-card cursor-pointer bg-white rounded-xl shadow-lg border px-4 py-3 flex items-start space-x-4 hover:bg-gray-50 transition">
				<img src="image/logo-smkn2kra.webp" alt="Logo" class="w-16 h-16 rounded-lg object-cover" />
				<div class="flex-1">
					<div class="text-sm text-gray-500 mb-1">Nama Pengadu: Bayu Saputra</div>
					<div class="font-medium text-gray-900">Permohonan Pindah Kelas</div>
					<div class="text-xs text-gray-600">Permintaan pindah kelas saya ditolak karena alasan tidak memenuhi
						kriteria BK.</div>
					<div class="text-sm text-gray-500 mb-1">Ditujukan Kepada : BK</div>
				</div>
				<div class="flex flex-col items-end">
					<div class="text-sm font-semibold text-gray-800 mb-2">18 Juli 2025, 08:40</div>
					<button
						class="text-xs font-semibold bg-red-100 text-red-600 px-2 py-1 rounded-full">Ditolak</button>
				</div>
			</div>


		</div>
        <script>
		document.addEventListener("DOMContentLoaded", function () {
			const laporanCards = document.querySelectorAll(".laporan-card");

			laporanCards.forEach(card => {
				card.addEventListener("click", function () {
					const status = card.getAttribute("data-status");
					localStorage.setItem("statusLaporan", status); // Simpan status
				});
			});
		});

		function filterLaporan(status, clickedButton) {
			// Ganti border aktif hanya pada tombol yang diklik
			document.querySelectorAll('.filter-button').forEach(btn => {
				btn.classList.remove('text-green-600', 'border-b-2', 'border-green-600', 'font-medium');
				btn.classList.add('text-gray-500');
			});

			clickedButton.classList.remove('text-gray-500');
			clickedButton.classList.add('text-green-600', 'border-b-2', 'border-green-600', 'font-medium');

			const cards = document.querySelectorAll('.laporan-card');
			cards.forEach(card => {
				const cardStatus = card.getAttribute('data-status');
				if (status === 'all' || cardStatus === status) {
					card.classList.remove('hidden');
				} else {
					card.classList.add('hidden');
				}
			});
		}

		window.addEventListener("click", function (e) {
			const btn = document.querySelector("button[onclick='toggleDropdown()']");
			const menu = document.getElementById("dropdown-menu");

			if (!btn.contains(e.target) && !menu.contains(e.target)) {
				menu.classList.add("hidden");
			}
		});
	</script>
