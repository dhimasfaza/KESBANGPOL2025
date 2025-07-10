<?php $__env->startSection('title', 'Galeri Kegiatan'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success"><?php echo e(session()->get('success')); ?></div>
                    <?php endif; ?>
                        <a href="<?php echo e(route('galeris.create')); ?>" class="btn-tambah-konten">
                            <i class="fas fa-plus fa-fw"></i> <span>Tambah Galeri Kegiatan</span>
                        </a>
                        <div class="table-responsive">
                            <table class="table table-hover align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th style="width: 50px;">Gambar</th>
                                        <th style="width: 50px;">Judul</th>
                                        <th style="width: 100px;">Kategori/Kegiatan</th>
                                        <th style="width: 50px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $galeris; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galeri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td>
                                                <img src="<?php echo e(asset('images/gallery/'.$galeri->gambar_upload)); ?>" alt="<?php echo e($galeri->judul); ?>" class="img-thumbnail" style="width: 120px; height: auto;">
                                            </td>
                                            <td class="fw-semibold"><?php echo e($galeri->judul); ?></td>
                                            <td class="text-start">
                                                <?php echo e($galeri->program->nama_program); ?>

                                            </td>
                                            <td class="kolom-aksi text-center">
                                                <a href="<?php echo e(route('galeris.edit', $galeri->id)); ?>" class="btn btn-sm btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="<?php echo e(route('galeris.destroy', $galeri->id)); ?>" method="POST" class="d-inline"
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
                                            <td colspan="4" class="text-center">
                                                <div class="alert alert-warning">Data Galeri belum tersedia.</div>
                                            </td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php echo e($galeris->links('pagination::bootstrap-5')); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Tombol normal */
        .page-link {
            color: #B40D14 !important;
            background-color: #fff !important;
            border-color: #ddd !important;
        }

        /* Hover */
        .page-link:hover {
            color: #ffffff !important;
            background-color: #B40D14 !important;
            border-color: #B40D14 !important;
        }

        /* Tombol aktif */
        .page-item.active .page-link {
            color: #fff !important;
            background-color: #B40D14 !important;
            border-color: #B40D14 !important;
        }

        /* Tombol disabled */
        .page-item.disabled .page-link {
            color: #6c757d !important;
            background-color: #f8f9fa !important;
            border-color: #dee2e6 !important;
        }

        .table thead th {
            text-align: center !important;
            vertical-align: middle !important;
        }


        .table tbody tr td:nth-child(2) {
            text-align: justify !important;
        }

        .table tbody tr td:nth-child(3) {
            text-align: justify !important;
        }
    </style>

    <script>
        //message with toastr
        <?php if(session()->has('success')): ?>
        
            toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!'); 

        <?php elseif(session()->has('error')): ?>

            toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!'); 
            
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\KP Semester 6\KESBANGPOL2025\resources\views/dashboard/galeris/index.blade.php ENDPATH**/ ?>