<?php $__env->startSection('title', 'Daftar Bidang'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Daftar Bidang</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="<?php echo e(route('bidangs.create')); ?>" class="btn-tambah-konten">
                        <i class="fas fa-plus"></i> <span>Tambah Bidang</span>
                    </a>

                    <?php if(session('success')): ?>
                        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered align-middle text-center">
                            <thead class="table-light">
                                <tr>
                                    <th style="width: 5%">No</th>
                                    <th>Nama Bidang</th>
                                    <th style="width: 20%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $bidangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td class="text-start"><?php echo e($bidang->nama_bidang); ?></td>
                                        <td class="kolom-aksi text-center">
                                            <a href="<?php echo e(route('bidangs.edit', $bidang->id)); ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(route('bidangs.destroy', $bidang->id)); ?>" method="POST" class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="3">
                                            <div class="alert alert-warning text-center m-0">Belum ada data bidang.</div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

    
    <script>
        <?php if(session()->has('success')): ?>
            toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!');
        <?php elseif(session()->has('error')): ?>
            toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!');
        <?php endif; ?>
        toastr.options = {
            "progressBar": true,
            "closeButton": true,
            "positionClass": "toast-bottom-right"
        };

    </script>

    
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\KP Semester 6\KESBANGPOL2025\resources\views/dashboard/bidangs/index.blade.php ENDPATH**/ ?>