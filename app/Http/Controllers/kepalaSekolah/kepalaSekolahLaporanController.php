<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepalaSekolahLaporanController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'KepalaSekolah.laporan.index',
            'title' => 'Laporan'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
