<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepalaSekolahTanggapanController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'KepalaSekolah.tanggapan.index',
            'title' => 'Tanggapan'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
