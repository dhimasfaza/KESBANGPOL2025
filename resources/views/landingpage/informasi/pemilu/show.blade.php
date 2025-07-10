@extends('landingpage.layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Data Pemilu {{ ucfirst(str_replace('-', ' ', $kategori)) }}</h2>
    <div class="row justify-content-center">
        @forelse ($data as $paslon)
        <div class="col-md-3 mb-4">
            <a href="{{ route('pemilu.detail', ['kategori' => $kategori, 'id' => $paslon['no_urut']]) }}" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/pemilu/' . $paslon['foto']) }}" class="card-img-top" alt="Foto {{ $paslon['nama'] }}">
                    <div class="card-footer bg-white text-center">
                        <h5 class="card-title mb-0">#{{ $paslon['no_urut'] }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <p class="text-center">Tidak ada data untuk kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection