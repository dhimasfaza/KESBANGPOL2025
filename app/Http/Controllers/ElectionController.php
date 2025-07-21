<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;

class ElectionController extends Controller
{
    /**
     * Menampilkan halaman menu utama Pemilu.
     */
    public function index()
    {
        return view('landingpage.informasi.pemilu.index');
    }

    /**
     * Menampilkan daftar kandidat berdasarkan kategori.
     */
    public function show($kategori)
    {
        $paslons = Paslon::where('jenis_pemilu', $kategori)
                        ->orderBy('no_urut', 'asc')
                        ->get();

        return view('landingpage.informasi.pemilu.list', compact('paslons', 'kategori'));
    }

    /**
     * Menampilkan detail dari satu pasangan calon.
     */
    public function detail($kategori, $id)
    {
        $paslon = Paslon::findOrFail($id);

        // PERBAIKAN: Sekarang kita kirim variabel $paslon DAN $kategori
        return view('landingpage.informasi.pemilu.detail', compact('paslon', 'kategori'));
    }
}
