@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Detail Paslon #{{ $paslon->no_urut }}</h3>
        <a href="{{ route('walikota.index') }}" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar
        </a>
    </div>

    {{-- KARTU CALON PRESIDEN --}}
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Kandidat Presiden</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 text-center">
                    @if($paslon->capres_foto)
                        <img src="{{ Storage::url($paslon->capres_foto) }}" class="img-fluid rounded img-thumbnail" alt="Foto capres">
                    @else
                        <img src="https://placehold.co/300x400/e2e8f0/e2e8f0?text=Foto" class="img-fluid rounded img-thumbnail" alt="Foto tidak tersedia">
                    @endif
                </div>
                <div class="col-md-9">
                    <h4>{{ $paslon->capres_nama }}</h4>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td style="width: 200px;"><strong>No Urut</strong></td>
                            <td>: {{ $paslon->no_urut }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tempat, Tanggal Lahir</strong></td>
                            <td>: {{ $paslon->capres_tempat_lahir }}, {{ \Carbon\Carbon::parse($paslon->capres_tanggal_lahir)->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin</strong></td>
                            <td>: {{ $paslon->capres_jenis_kelamin }}</td>
                        </tr>
                        <tr>
                            <td><strong>Partai Pengusung</strong></td>
                            <td>: {{ $paslon->partai_pengusung }}</td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pendidikan</strong></td>
                            <td class="align-top">: {!! nl2br(e($paslon->capres_riwayat_pendidikan)) !!}</td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pekerjaan</strong></td>
                            <td class="align-top">: {!! nl2br(e($paslon->capres_riwayat_pekerjaan)) !!}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- KARTU CALON WAKIL PRESIDEN --}}
    <div class="card">
        <div class="card-header bg-danger text-white">
            <h5 class="mb-0">Kandidat Wakil Presiden</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 text-center">
                     @if($paslon->cawapres_foto)
                        <img src="{{ Storage::url($paslon->cawapres_foto) }}" class="img-fluid rounded img-thumbnail" alt="Foto cawapres">
                    @else
                        <img src="https://placehold.co/300x400/e2e8f0/e2e8f0?text=Foto" class="img-fluid rounded img-thumbnail" alt="Foto tidak tersedia">
                    @endif
                </div>
                <div class="col-md-9">
                    <h4>{{ $paslon->cawapres_nama }}</h4>
                    <table class="table table-sm table-borderless">
                         <tr>
                            <td style="width: 200px;"><strong>No Urut</strong></td>
                            <td>: {{ $paslon->no_urut }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tempat, Tanggal Lahir</strong></td>
                            <td>: {{ $paslon->cawapres_tempat_lahir }}, {{ \Carbon\Carbon::parse($paslon->cawapres_tanggal_lahir)->format('d F Y') }}</td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin</strong></td>
                            <td>: {{ $paslon->cawapres_jenis_kelamin }}</td>
                        </tr>
                         <tr>
                            <td><strong>Partai Pengusung</strong></td>
                            <td>: {{ $paslon->partai_pengusung }}</td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pendidikan</strong></td>
                            <td class="align-top">: {!! nl2br(e($paslon->cawapres_riwayat_pendidikan)) !!}</td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pekerjaan</strong></td>
                            <td class="align-top">: {!! nl2br(e($paslon->cawapres_riwayat_pekerjaan)) !!}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
    