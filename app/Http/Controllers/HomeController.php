<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "Data mahasiswa";
        $data['mahasiswa'] = array(
            'nim' => '1915101046',
            'nama' => 'I Nyoman Putra Yoga',
            'kelas' => 'Ilmu Komputer 4B'
        );
        return view('admin.beranda', compact('title', 'data'));
    }

    public function dasboard()
    {
        $title = "Data Dashboard";

        return view('admin.dasboard', compact('title'));
    }
}