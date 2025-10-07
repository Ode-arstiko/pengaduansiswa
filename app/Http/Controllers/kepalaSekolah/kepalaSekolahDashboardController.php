<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KepalaSekolahDashboardController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'KepalaSekolah.dashboard.index',
            'title' => 'Dashboard'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
