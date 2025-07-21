@extends('landingpage.layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0" style="color: #B40D14;">Detail Paslon #{{ $paslon['no_urut'] }}</h2>
        <a href="{{ route('pemilu.show', ['kategori' => $kategori]) }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Kembali
        </a>
    </div>

    <!-- Kandidat Utama -->
    <div class="card shadow-lg mb-4">
        <div class="card-header text-white" style="background-color: #B40D14;">
            <h4 class="mb-0">
                <i class="fas fa-user me-2"></i>
                @if($kategori == 'presiden')
                    Kandidat Presiden
                @elseif($kategori == 'kepala-daerah')
                    Kandidat Walikota
                @else
                    Kandidat Utama
                @endif
            </h4>
        </div>
        <div class="row g-0">
            <div class="col-md-4">
                <div class="p-3">
                    <img src="{{ asset('images/pemilu/' . $paslon['foto']) }}"
                         class="img-fluid rounded shadow"
                         alt="Foto {{ $paslon['nama'] }}"
                         style="width: 100%; height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title mb-4" style="color: #B40D14;">{{ $paslon['nama'] }}</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-hashtag me-2"></i>No Urut
                                    </th>
                                    <td>
                                        <span class="badge fs-6" style="background-color: #B40D14;">{{ $paslon['no_urut'] }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-user me-2"></i>Nama Lengkap
                                    </th>
                                    <td>{{ $paslon['nama'] }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-map-marker-alt me-2"></i>Tempat Lahir
                                    </th>
                                    <td>{{ $paslon['tempat_lahir'] }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-calendar me-2"></i>Tanggal Lahir
                                    </th>
                                    <td>{{ date('d F Y', strtotime($paslon['tanggal_lahir'])) }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-graduation-cap me-2"></i>Riwayat Pendidikan
                                    </th>
                                    <td>{{ $paslon['pendidikan'] }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-briefcase me-2"></i>Riwayat Pekerjaan
                                    </th>
                                    <td>{{ $paslon['pekerjaan'] }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-venus-mars me-2"></i>Jenis Kelamin
                                    </th>
                                    <td>{{ $paslon['jenis_kelamin'] }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-flag me-2"></i>Partai Pengusung
                                    </th>
                                    <td>
                                        <span class="badge" style="background-color: #B40D14;">{{ $paslon['partai'] }}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="20%" class="text-muted">
                                        <i class="fas fa-vote-yea me-2"></i>Suara Sah (Kota Bandung)
                                    </th>
                                    <td>
                                        <span class="fw-bold fs-5" style="color: #B40D14;">{{ number_format($paslon['suara_sah']) }}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kandidat Wakil -->
    @if(isset($paslon['nama_wakil']))
    <div class="card shadow-lg mb-4">
        <div class="card-header text-white" style="background-color: #B40D14;">
            <h4 class="mb-0">
                <i class="fas fa-user-tie me-2"></i>
                @if($kategori == 'presiden')
                    Kandidat Wakil Presiden
                @elseif($kategori == 'kepala-daerah')
                    Kandidat Wakil Walikota
                @else
                    Kandidat Wakil
                @endif
            </h4>
        </div>
        <div class="row g-0">
            <div class="col-md-4">
                <div class="p-3">
                    <img src="{{ asset('images/pemilu/' . $paslon['foto_wakil']) }}"
                         class="img-fluid rounded shadow"
                         alt="Foto {{ $paslon['nama_wakil'] }}"
                         style="width: 100%; height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title mb-4" style="color: #B40D14;">{{ $paslon['nama_wakil'] }}</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-hashtag me-2"></i>No Urut
                                    </th>
                                    <td>
                                        <span class="badge fs-6" style="background-color: #B40D14;">{{ $paslon['no_urut'] }}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-user me-2"></i>Nama Lengkap
                                    </th>
                                    <td>{{ $paslon['nama_wakil'] }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-map-marker-alt me-2"></i>Tempat Lahir
                                    </th>
                                    <td>{{ $paslon['tempat_lahir_wakil'] ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-calendar me-2"></i>Tanggal Lahir
                                    </th>
                                    <td>{{ isset($paslon['tanggal_lahir_wakil']) ? date('d F Y', strtotime($paslon['tanggal_lahir_wakil'])) : '-' }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-graduation-cap me-2"></i>Riwayat Pendidikan
                                    </th>
                                    <td>{{ $paslon['pendidikan_wakil'] ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-briefcase me-2"></i>Riwayat Pekerjaan
                                    </th>
                                    <td>{{ $paslon['pekerjaan_wakil'] ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-venus-mars me-2"></i>Jenis Kelamin
                                    </th>
                                    <td>{{ $paslon['jenis_kelamin_wakil'] ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-flag me-2"></i>Partai Pengusung
                                    </th>
                                    <td>
                                        <span class="badge" style="background-color: #B40D14;">{{ $paslon['partai'] }}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="20%" class="text-muted">
                                        <i class="fas fa-vote-yea me-2"></i>Suara Sah (Kota Bandung)
                                    </th>
                                    <td>
                                        <span class="fw-bold fs-5" style="color: #B40D14;">{{ number_format($paslon['suara_sah']) }}</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Visi & Misi Gabungan --}}
    @if(isset($paslon['visi']) || isset($paslon['misi']))
    <div class="card shadow-lg mt-4">
        <div class="card-header text-white" style="background-color: #B40D14;">
            <h4 class="mb-0">
                <i class="fas fa-lightbulb me-2"></i>Visi & Misi
            </h4>
        </div>
        <div class="card-body">
            @if(!empty($paslon['visi']))
            <div class="mb-4">
                <h5 class="text-danger"><i class="fas fa-eye me-2"></i>Visi</h5>
                <p class="mb-0">{{ $paslon['visi'] }}</p>
            </div>
            @endif

            @if(!empty($paslon['misi']) && is_array($paslon['misi']))
            <div>
                <h5 class="text-danger"><i class="fas fa-bullseye me-2"></i>Misi</h5>
                <ul class="mb-0">
                    @foreach($paslon['misi'] as $misi)
                        <li>{{ $misi }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
    </div>
    @endif
    @endif
</div>

<style>
.card {
    border: none;
    border-radius: 15px;
    overflow: hidden;
}

.card-header {
    border-bottom: none;
    padding: 1rem 1.5rem;
}

.table th {
    font-weight: 600;
    border: none;
    padding: 0.5rem 0;
}

.table td {
    border: none;
    padding: 0.5rem 0;
    font-weight: 500;
}

.badge {
    font-size: 0.9rem;
    padding: 0.5rem 1rem;
}

.shadow-lg {
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
}
</style>
@endsection
