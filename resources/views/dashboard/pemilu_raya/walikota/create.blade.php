@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    {{-- Mengubah judul halaman --}}
    <h3>Tambah Pasangan Calon Wali Kota Baru</h3>
    
    <div class="card">
        <div class="card-body">
            {{-- Mengarahkan ke route walikota.store --}}
            <form action="{{ route('walikota.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                {{-- Data Umum Paslon --}}
                <div class="row">
                    <div class="col-md-4 form-group">
                        <label for="no_urut">Nomor Urut</label>
                        <input type="number" name="no_urut" class="form-control" required>
                    </div>
                    <div class="col-md-4 form-group">
                        <label for="tahun_pemilu">Tahun Pemilu</label>
                        <input type="number" name="tahun_pemilu" class="form-control" value="{{ date('Y') }}" required>
                    </div>
                     <div class="col-md-4 form-group">
                        <label for="partai_pengusung">Partai Pengusung</label>
                        <input type="text" name="partai_pengusung" class="form-control" required>
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    {{-- Data Calon 1 --}}
                    <div class="col-md-6">
                        {{-- Label diubah, tapi nama input tetap sama --}}
                        <h4>Data Calon Wali Kota</h4>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="capres_nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="capres_foto" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="capres_tempat_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="capres_tanggal_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="capres_jenis_kelamin" class="form-control" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pendidikan</label>
                            <textarea name="capres_riwayat_pendidikan" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pekerjaan</label>
                            <textarea name="capres_riwayat_pekerjaan" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    
                    {{-- Data Calon 2 --}}
                    <div class="col-md-6">
                        {{-- Label diubah, tapi nama input tetap sama --}}
                        <h4>Data Calon Wakil Wali Kota</h4>
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="cawapres_nama" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="cawapres_foto" class="form-control">
                        </div>
                         <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="cawapres_tempat_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="cawapres_tanggal_lahir" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="cawapres_jenis_kelamin" class="form-control" required>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pendidikan</label>
                            <textarea name="cawapres_riwayat_pendidikan" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Riwayat Pekerjaan</label>
                            <textarea name="cawapres_riwayat_pekerjaan" class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                </div>

                <hr>
                <h4>Visi & Misi</h4>
                <div class="form-group">
                    <label for="visi">Visi</label>
                    <textarea name="visi" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="misi">Misi</label>
                    <textarea name="misi" class="form-control" rows="8"></textarea>
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                    <a href="{{ route('walikota.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
    