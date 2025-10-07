<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepalaSekolahRiwayatController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'KepalaSekolah.riwayat.index',
            'title' => 'Riwayat'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
