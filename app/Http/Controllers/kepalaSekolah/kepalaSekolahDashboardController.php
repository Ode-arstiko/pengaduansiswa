<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepalaSekolahDashboardController extends Controller
{
    public function index()
    {
        $data = [
            'content' => 'kepalaSekolah.dashboard.index',
            'title' => 'Dashboard'
        ];

        return view('layouts.kepalaSekolah.wrapper', $data);
    }
}
