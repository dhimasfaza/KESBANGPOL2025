@extends('landingpage.layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Data Pemilu {{ ucfirst($kategori) }}</h2>
    <div class="row justify-content-center">
        @forelse ($data as $paslon)
        <div class="col-md-4 mb-4 text-center">
            <a href="{{ route('pemilu.show', ['kategori' => $kategori, 'id' => $paslon['id']]) }}" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/pemilu/' . $paslon['foto']) }}" class="card-img-top" alt="Foto {{ $paslon['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title">#{{ $paslon['no_urut'] }} - {{ $paslon['nama'] }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @empty
        <p class="text-center">Tidak ada data untuk kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection@extends('landingpage.layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Data Pemilu {{ ucfirst($kategori) }}</h2>
    <div class="row justify-content-center">
        @forelse ($data as $paslon)
        <div class="col-md-4 mb-4">
            <a href="{{ route('pemilu.show', ['kategori' => $kategori, 'id' => $paslon['id']]) }}" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0">
                    <img src="{{ asset('images/pemilu/' . $paslon['foto']) }}" class="card-img-top" alt="Foto {{ $paslon['nama'] }}">
                </div>
            </a>
        </div>
        @empty
        <p class="text-center">Tidak ada data untuk kategori ini.</p>
        @endforelse
    </div>
</div>
@endsection