<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepalaSekolahTanggapanController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'kepalaSekolah.tanggapan.index',
            'title' => 'Tanggapan'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
