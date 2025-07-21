<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Paslon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WalikotaController extends Controller
{
    /**
     * Menampilkan daftar Paslon Wali Kota.
     */
    public function index()
    {
        // Mengambil data dengan jenis_pemilu 'walikota'
        $paslons = \App\Models\Paslon::where('jenis_pemilu', 'walikota')
                                    ->orderBy('no_urut', 'asc')
                                    ->get();
        return view('dashboard.pemilu_raya.walikota.index', compact('paslons'));
    }

    /**
     * Menampilkan form untuk membuat Paslon Wali Kota baru.
     */
    public function create()
    {
        return view('dashboard.pemilu_raya.walikota.create');
    }

    /**
     * Menyimpan Paslon Wali Kota baru ke database.
     */
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
        // Mengatur jenis pemilu menjadi 'walikota' secara otomatis
        $data['jenis_pemilu'] = 'walikota';

        if ($request->hasFile('capres_foto')) {
            $data['capres_foto'] = $request->file('capres_foto')->store('public/pemilu');
        }
        if ($request->hasFile('cawapres_foto')) {
            $data['cawapres_foto'] = $request->file('cawapres_foto')->store('public/pemilu');
        }

        Paslon::create($data);
        return redirect()->route('walikota.index')->with('success', 'Data Paslon Wali Kota berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail satu Paslon Wali Kota.
     */
    public function show($id)
    {
        $paslon = Paslon::findOrFail($id);
        return view('dashboard.pemilu_raya.walikota.show', compact('paslon'));
    }

    /**
     * Menampilkan form untuk mengedit Paslon Wali Kota.
     */
    public function edit($id)
    {
        $paslon = Paslon::findOrFail($id);
        return view('dashboard.pemilu_raya.walikota.edit', compact('paslon'));
    }

    /**
     * Mengupdate data Paslon Wali Kota di database.
     */
    public function update(Request $request, $id)
    {
        $paslon = Paslon::findOrFail($id);
        
        $request->validate([
            'no_urut' => 'required|integer|unique:paslons,no_urut,' . $paslon->id,
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
        return redirect()->route('walikota.index')->with('success', 'Data Paslon Wali Kota berhasil diperbarui.');
    }

    /**
     * Menghapus data Paslon Wali Kota.
     */
    public function destroy($id)
    {
        $paslon = Paslon::findOrFail($id);

        if ($paslon->capres_foto) Storage::delete($paslon->capres_foto);
        if ($paslon->cawapres_foto) Storage::delete($paslon->cawapres_foto);
        
        $paslon->delete();
        return redirect()->route('walikota.index')->with('success', 'Data Paslon Wali Kota berhasil dihapus.');
    }
}
