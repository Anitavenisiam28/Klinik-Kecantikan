<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('layanan.index');
    }

    public function show($id)
    {
        // contoh data dummy
        $data = (object)[
            'nama' => 'Facial Treatment',
            'deskripsi' => 'Perawatan wajah untuk membersihkan kulit.',
            'harga' => 150000,
            'gambar' => 'facial.jpg'
        ];

        return view('layanan.detail', compact('data'));
    }
}