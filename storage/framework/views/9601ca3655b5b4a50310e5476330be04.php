<?php $__env->startSection('content'); ?>
<div class="container py-5">
    <h2 class="mb-4 text-center">Data Pemilu <?php echo e(ucfirst(str_replace('-', ' ', $kategori))); ?></h2>
    <div class="row justify-content-center">
        <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paslon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="col-md-3 mb-4">
            <a href="<?php echo e(route('pemilu.detail', ['kategori' => $kategori, 'id' => $paslon['no_urut']])); ?>" class="text-decoration-none">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?php echo e(asset('images/pemilu/' . $paslon['foto'])); ?>" class="card-img-top" alt="Foto <?php echo e($paslon['nama']); ?>">
                    <div class="card-footer bg-white text-center">
                        <h5 class="card-title mb-0">#<?php echo e($paslon['no_urut']); ?></h5>
                    </div>
                </div>
            </a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <p class="text-center">Tidak ada data untuk kategori ini.</p>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('landingpage.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/landingpage/informasi/pemilu/show.blade.php ENDPATH**/ ?>