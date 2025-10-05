<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepalaSekolahDashboardController extends Controller
{
    public function index()
    {
        $data = [
           'content' => 'layouts.guru.content',
            'title' => 'Dashboard'
        ];

        return view('layouts.guru.wrapper', $data);
    }
}
