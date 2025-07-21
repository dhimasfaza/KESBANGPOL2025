

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="m-0">Manajemen Pilpres</h3>
        <a href="<?php echo e(route('pilpres.create')); ?>" class="btn btn-primary">
            <i class="fas fa-plus-circle me-1"></i> Tambah Paslon Baru
        </a>
    </div>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    
    <?php if($paslons->isNotEmpty()): ?>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Daftar Pasangan Calon Presiden</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 10px">No Urut</th>
                                <th>Foto</th>
                                <th>Calon Presiden</th>
                                <th>Calon Wakil Presiden</th>
                                <th>Partai Pengusung</th>
                                <th style="width: 150px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $paslons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paslon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="text-center"><h4><?php echo e($paslon->no_urut); ?></h4></td>
                                <td>
                                    
                                   <?php if($paslon->capres_foto): ?>
                                        <img src="<?php echo e(asset('storage/' . $paslon->capres_foto)); ?>" alt="Foto capres" width="70" class="img-thumbnail mb-1">
                                    <?php endif; ?>
                                    
                                    <?php if($paslon->cawapres_foto): ?>
                                        <img src="<?php echo e(asset('storage/' . $paslon->cawapres_foto)); ?>" alt="Foto cawapres" width="70" class="img-thumbnail">
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($paslon->capres_nama); ?></td>
                                <td><?php echo e($paslon->cawapres_nama); ?></td>
                                <td><?php echo e($paslon->partai_pengusung); ?></td>
                                <td>
                                    <a href="<?php echo e(route('pilpres.show', $paslon->id)); ?>" class="btn btn-sm btn-info" title="Detail"><i class="fas fa-eye"></i></a>
                                    <a href="<?php echo e(route('pilpres.edit', $paslon->id)); ?>" class="btn btn-sm btn-warning" title="Edit"><i class="fas fa-edit"></i></a>
                                    <form action="<?php echo e(route('pilpres.destroy', $paslon->id)); ?>" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    <?php else: ?>
        
        <div class="card">
            <div class="card-body text-center p-5">
                <i class="fas fa-folder-open fa-4x text-muted mb-3"></i>
                <h5 class="text-muted">Belum Ada Data Pasangan Calon</h5>
                <p class="text-muted">Silakan tambahkan data baru melalui tombol "Tambah Paslon Baru" di pojok kanan atas.</p>
            </div>
        </div>

    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
    .main-wrapper .dashboard-content {
        padding-top: 1rem !important;
    }
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/dashboard/pemilu_raya/pilpres/index.blade.php ENDPATH**/ ?>