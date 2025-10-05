<?php

namespace App\Http\Controllers\kepalaSekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class kepalaSekolahController extends Controller
{
    public function index() {
        $data = [
            'content' => 'admin.dashboard.index',
            'title' => 'Dashboard'
        ];
        return view('layouts.admin.wrapper', $data);
    }
}
