@extends('landingpage.layouts.app')

@section('content')
<div class="container py-5">
    {{-- PERBAIKAN: Menggunakan variabel $kategori yang dikirim dari controller --}}
    <h2 class="mb-4 text-center">Data Pemilu {{ ucfirst($kategori) }}</h2>
    <div class="row justify-content-center">
        {{-- PERBAIKAN: Mengganti $data menjadi $paslons --}}
        @forelse ($paslons as $paslon)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm text-center">
                <div class="card-header bg-dark text-white">
                    {{-- PERBAIKAN: Menggunakan $paslon->no_urut --}}
                    <h4>Nomor Urut <strong>{{ $paslon->no_urut }}</strong></h4>
                </div>
                {{-- PERBAIKAN: Menggunakan path foto yang benar --}}
                <img src="{{ asset('storage/' . str_replace('public/', '', $paslon->capres_foto)) }}" class="card-img-top" alt="Foto {{ $paslon->capres_nama }}" style="height: 300px; object-fit: cover; object-position: top;">
                <div class="card-body">
                    <h5 class="card-title">{{ $paslon->capres_nama }}</h5>
                    <p class="card-text text-muted">&</p>
                    <h5 class="card-title">{{ $paslon->cawapres_nama }}</h5>
                </div>
                <div class="card-footer">
                    {{-- PERBAIKAN: Menggunakan $paslon->id --}}
                    <a href="{{ route('pemilu.detail', ['kategori' => $kategori, 'id' => $paslon->id]) }}" class="btn btn-primary w-100">Lihat Detail Profil</a>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center">Tidak ada data untuk kategori ini.</p>
        @endforelse
    </div>
    <div class="text-center mt-4">
        <a href="{{ route('pemilu.index') }}" class="btn btn-outline-secondary">Kembali ke Pilihan Pemilu</a>
    </div>
</div>
@endsection
