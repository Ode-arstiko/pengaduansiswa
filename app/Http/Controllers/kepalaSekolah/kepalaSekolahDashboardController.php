<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepalaSekolahController extends Controller
{
    public function index() {
        $data = [
            'content' => 'guru.dashboard.index',
            'title' => 'Dashboard'
        ];
        return view('layouts.guru.wrapper', $data);
    }
}
