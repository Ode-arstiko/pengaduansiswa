<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaLaporanController extends Controller
{
    public function index()
    {
        $data = [
            'content' => 'siswa.laporan.index',
            'title'   => 'Laporan',
        ];

        return view('layouts.siswa.wrapper', $data);
    }

    public function create()
    {
        $data = [
            'content' => 'siswa.laporan.createLaporan',
            'title'   => 'Buat Laporan',
        ];

        return view('layouts.siswa.wrapper', $data);
    }

    public function cetak()
    {
        $data = [
            'content' => 'siswa.laporan.cetakLaporan',
            'title'   => 'Cetak Laporan',
        ];

        return view('layouts.siswa.wrapper', $data);
    }
}
