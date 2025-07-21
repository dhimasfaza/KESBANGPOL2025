<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PilpresController extends Controller
{
    // 🔹 BACKEND (Dashboard)

    public function index()
    {
        $paslons = Paslon::where('jenis_pemilu', 'pilpres')
                         ->orderBy('no_urut', 'asc')
                         ->get();

        return view('dashboard.pemilu_raya.pilpres.index', compact('paslons'));
    }

    public function create()
    {
        return view('dashboard.pemilu_raya.pilpres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'no_urut' => 'required|integer|unique:paslons,no_urut',
            'tahun_pemilu' => 'required|digits:4',
            'partai_pengusung' => 'required|string|max:255',
            'capres_nama' => 'required|string|max:255',
            'cawapres_nama' => 'required|string|max:255',
            'capres_foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'cawapres_foto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'visi' => 'nullable|string',
            'misi' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['jenis_pemilu'] = 'pilpres';

        if ($request->hasFile('capres_foto')) {
            $data['capres_foto'] = $request->file('capres_foto')->store('public/pemilu');
        }
        if ($request->hasFile('cawapres_foto')) {
            $data['cawapres_foto'] = $request->file('cawapres_foto')->store('public/pemilu');
        }

        Paslon::create($data);
        return redirect()->route('pilpres.index')->with('success', 'Data Paslon Pilpres berhasil ditambahkan.');
    }

    public function show($id)
    {
        $paslon = Paslon::findOrFail($id);
        return view('dashboard.pemilu_raya.pilpres.show', compact('paslon'));
    }

    public function edit($id)
    {
        $paslon = Paslon::findOrFail($id);
        return view('dashboard.pemilu_raya.pilpres.edit', compact('paslon'));
    }

    public function update(Request $request, $id)
    {
        $paslon = Paslon::findOrFail($id);

        $request->validate([
            'no_urut' => 'required|integer|unique:paslons,no_urut,' . $paslon->id,
            // tambahkan validasi lain jika dibutuhkan
        ]);

        $data = $request->all();

        if ($request->hasFile('capres_foto')) {
            if ($paslon->capres_foto) Storage::delete($paslon->capres_foto);
            $data['capres_foto'] = $request->file('capres_foto')->store('public/pemilu');
        }

        if ($request->hasFile('cawapres_foto')) {
            if ($paslon->cawapres_foto) Storage::delete($paslon->cawapres_foto);
            $data['cawapres_foto'] = $request->file('cawapres_foto')->store('public/pemilu');
        }

        $paslon->update($data);
        return redirect()->route('pilpres.index')->with('success', 'Data Paslon Pilpres berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $paslon = Paslon::findOrFail($id);

        if ($paslon->capres_foto) Storage::delete($paslon->capres_foto);
        if ($paslon->cawapres_foto) Storage::delete($paslon->cawapres_foto);

        $paslon->delete();
        return redirect()->route('pilpres.index')->with('success', 'Data Paslon Pilpres berhasil dihapus.');
    }

    // 🔹 FRONTEND (Landing Page)

    public function listPublic()
    {
        $paslons = Paslon::where('jenis_pemilu', 'pilpres')->orderBy('no_urut', 'asc')->get();

        // SESUAIKAN nama folder & case: resources/views/landingpage/informasi/Pilpres/list.blade.php
        return view('landingpage.informasi.Pilpres.list', compact('paslons'));
    }

    public function detailPublic($id)
    {
        $paslon = Paslon::findOrFail($id);

        // SESUAIKAN juga case & struktur folder-nya
        return view('landingpage.informasi.Pilpres.detail', compact('paslon'));
    }
}
