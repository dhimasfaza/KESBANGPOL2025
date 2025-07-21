<?php $__env->startPush('styles'); ?>
<style>
    .candidate-card {
        border: 2px solid #dee2e6;
        border-radius: 8px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        background-color: #ffffff;
    }

    .candidate-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .candidate-card .card-header {
        background: linear-gradient(90deg, #002147, #8b0000);
        color: #fff;
        font-size: 1.1rem;
        font-weight: 600;
    }

    .candidate-card .card-img-top {
        height: 300px;
        object-fit: cover;
        object-position: top;
        border-bottom: 1px solid #dee2e6;
    }

    .candidate-card .card-body h5 {
        color: #002147;
    }

    .btn-detail {
        background-color: #002147;
        color: #fff;
        border: none;
        transition: background 0.3s ease;
    }

    .btn-detail:hover {
        background-color: #8b0000;
        color: #fff;
    }

    .btn-back {
        color: #002147;
        border-color: #002147;
    }

    .btn-back:hover {
        background-color: #002147;
        color: #fff;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <div class="row text-center mb-5">
        <div class="col">
            <h2 class="display-5 fw-bold text-uppercase text-primary">Data Pemilu <?php echo e(ucfirst($kategori)); ?></h2>
            <p class="lead text-muted">Tahun <?php echo e($paslons->first()->tahun_pemilu ?? 'Tidak Diketahui'); ?></p>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <?php $__empty_1 = true; $__currentLoopData = $paslons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paslon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card candidate-card h-100">
                <div class="card-header text-center">
                    Nomor Urut <strong><?php echo e($paslon->no_urut); ?></strong>
                </div>

                <img src="<?php echo e(asset('storage/' . str_replace('public/', '', $paslon->capres_foto))); ?>" class="card-img-top" alt="Foto <?php echo e($paslon->capres_nama); ?>">

                <div class="card-body text-center">
                    <h5 class="fw-bold mb-1"><?php echo e($paslon->capres_nama); ?></h5>
                    <p class="text-muted mb-1">&</p>
                    <h5 class="fw-bold"><?php echo e($paslon->cawapres_nama); ?></h5>
                </div>

                <div class="card-footer text-center bg-light">
                    <a href="<?php echo e(route('pemilu.detail', ['kategori' => $kategori, 'id' => $paslon->id])); ?>" class="btn btn-detail w-100">
                        <i class="fas fa-search-plus me-1"></i> Lihat Detail Profil
                    </a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div class="col-12 text-center">
            <div class="alert alert-warning">
                <p>Tidak ada data pasangan calon untuk kategori ini.</p>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="text-center mt-4">
        <a href="<?php echo e(route('pemilu.index')); ?>" class="btn btn-back">
            <i class="fas fa-arrow-left me-1"></i> Kembali ke Pilihan Pemilu
        </a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('landingpage.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/landingpage/informasi/pemilu/list.blade.php ENDPATH**/ ?>