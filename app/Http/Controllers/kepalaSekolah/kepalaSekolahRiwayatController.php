<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepalaSekolahRiwayatController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'kepalaSekolah.riwayat.index',
            'title' => 'Riwayat'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
