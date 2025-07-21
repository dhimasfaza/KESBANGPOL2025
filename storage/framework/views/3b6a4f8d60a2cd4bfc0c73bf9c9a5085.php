<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0" style="color: #B40D14;">Detail Paslon #<?php echo e($paslon['no_urut']); ?></h2>
        <a href="<?php echo e(route('pemilu.show', ['kategori' => $kategori])); ?>" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Kembali
        </a>
    </div>

    <!-- Kandidat Utama -->
    <div class="card shadow-lg mb-4">
        <div class="card-header text-white" style="background-color: #B40D14;">
            <h4 class="mb-0">
                <i class="fas fa-user me-2"></i>
                <?php if($kategori == 'presiden'): ?>
                    Kandidat Presiden
                <?php elseif($kategori == 'kepala-daerah'): ?>
                    Kandidat Walikota
                <?php else: ?>
                    Kandidat Utama
                <?php endif; ?>
            </h4>
        </div>
        <div class="row g-0">
            <div class="col-md-4">
                <div class="p-3">
                    <img src="<?php echo e(asset('images/pemilu/' . $paslon['foto'])); ?>"
                         class="img-fluid rounded shadow"
                         alt="Foto <?php echo e($paslon['nama']); ?>"
                         style="width: 100%; height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title mb-4" style="color: #B40D14;"><?php echo e($paslon['nama']); ?></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-hashtag me-2"></i>No Urut
                                    </th>
                                    <td>
                                        <span class="badge fs-6" style="background-color: #B40D14;"><?php echo e($paslon['no_urut']); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-user me-2"></i>Nama Lengkap
                                    </th>
                                    <td><?php echo e($paslon['nama']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-map-marker-alt me-2"></i>Tempat Lahir
                                    </th>
                                    <td><?php echo e($paslon['tempat_lahir']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-calendar me-2"></i>Tanggal Lahir
                                    </th>
                                    <td><?php echo e(date('d F Y', strtotime($paslon['tanggal_lahir']))); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-graduation-cap me-2"></i>Riwayat Pendidikan
                                    </th>
                                    <td><?php echo e($paslon['pendidikan']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-briefcase me-2"></i>Riwayat Pekerjaan
                                    </th>
                                    <td><?php echo e($paslon['pekerjaan']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-venus-mars me-2"></i>Jenis Kelamin
                                    </th>
                                    <td><?php echo e($paslon['jenis_kelamin']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-flag me-2"></i>Partai Pengusung
                                    </th>
                                    <td>
                                        <span class="badge" style="background-color: #B40D14;"><?php echo e($paslon['partai']); ?></span>
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
                                        <span class="fw-bold fs-5" style="color: #B40D14;"><?php echo e(number_format($paslon['suara_sah'])); ?></span>
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
    <?php if(isset($paslon['nama_wakil'])): ?>
    <div class="card shadow-lg mb-4">
        <div class="card-header text-white" style="background-color: #B40D14;">
            <h4 class="mb-0">
                <i class="fas fa-user-tie me-2"></i>
                <?php if($kategori == 'presiden'): ?>
                    Kandidat Wakil Presiden
                <?php elseif($kategori == 'kepala-daerah'): ?>
                    Kandidat Wakil Walikota
                <?php else: ?>
                    Kandidat Wakil
                <?php endif; ?>
            </h4>
        </div>
        <div class="row g-0">
            <div class="col-md-4">
                <div class="p-3">
                    <img src="<?php echo e(asset('images/pemilu/' . $paslon['foto_wakil'])); ?>"
                         class="img-fluid rounded shadow"
                         alt="Foto <?php echo e($paslon['nama_wakil']); ?>"
                         style="width: 100%; height: 300px; object-fit: cover;">
                </div>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title mb-4" style="color: #B40D14;"><?php echo e($paslon['nama_wakil']); ?></h3>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-hashtag me-2"></i>No Urut
                                    </th>
                                    <td>
                                        <span class="badge fs-6" style="background-color: #B40D14;"><?php echo e($paslon['no_urut']); ?></span>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-user me-2"></i>Nama Lengkap
                                    </th>
                                    <td><?php echo e($paslon['nama_wakil']); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-map-marker-alt me-2"></i>Tempat Lahir
                                    </th>
                                    <td><?php echo e($paslon['tempat_lahir_wakil'] ?? '-'); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-calendar me-2"></i>Tanggal Lahir
                                    </th>
                                    <td><?php echo e(isset($paslon['tanggal_lahir_wakil']) ? date('d F Y', strtotime($paslon['tanggal_lahir_wakil'])) : '-'); ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="40%" class="text-muted">
                                        <i class="fas fa-graduation-cap me-2"></i>Riwayat Pendidikan
                                    </th>
                                    <td><?php echo e($paslon['pendidikan_wakil'] ?? '-'); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-briefcase me-2"></i>Riwayat Pekerjaan
                                    </th>
                                    <td><?php echo e($paslon['pekerjaan_wakil'] ?? '-'); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-venus-mars me-2"></i>Jenis Kelamin
                                    </th>
                                    <td><?php echo e($paslon['jenis_kelamin_wakil'] ?? '-'); ?></td>
                                </tr>
                                <tr>
                                    <th class="text-muted">
                                        <i class="fas fa-flag me-2"></i>Partai Pengusung
                                    </th>
                                    <td>
                                        <span class="badge" style="background-color: #B40D14;"><?php echo e($paslon['partai']); ?></span>
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
                                        <span class="fw-bold fs-5" style="color: #B40D14;"><?php echo e(number_format($paslon['suara_sah'])); ?></span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <?php if(isset($paslon['visi']) || isset($paslon['misi'])): ?>
    <div class="card shadow-lg mt-4">
        <div class="card-header text-white" style="background-color: #B40D14;">
            <h4 class="mb-0">
                <i class="fas fa-lightbulb me-2"></i>Visi & Misi
            </h4>
        </div>
        <div class="card-body">
            <?php if(!empty($paslon['visi'])): ?>
            <div class="mb-4">
                <h5 class="text-danger"><i class="fas fa-eye me-2"></i>Visi</h5>
                <p class="mb-0"><?php echo e($paslon['visi']); ?></p>
            </div>
            <?php endif; ?>

            <?php if(!empty($paslon['misi']) && is_array($paslon['misi'])): ?>
            <div>
                <h5 class="text-danger"><i class="fas fa-bullseye me-2"></i>Misi</h5>
                <ul class="mb-0">
                    <?php $__currentLoopData = $paslon['misi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $misi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($misi); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/landingpage/informasi/pemilu/detail.blade.php ENDPATH**/ ?>