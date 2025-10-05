<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepalaSekolahLaporanController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'kepalaSekolah.laporan.index',
            'title' => 'Laporan'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
