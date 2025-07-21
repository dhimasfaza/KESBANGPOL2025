<?php $__env->startSection('title', 'Potensi Konflik'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <a href="<?php echo e(route('potensi-konflik.create')); ?>" class="btn-tambah-konten">
                        <i class="fas fa-plus"></i> <span>Tambah Potensi Konflik</span>
                    </a>
                    <?php if(session('success')): ?>
                        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered program-table">
                            <thead class="table-light">
                                <tr>
                                    <th class="kolom-aksi">No.</th>
                                    <th class="kolom-nama_program">Nama Potensi</th>
                                    <th class="kolom-bidang">Kategori</th>
                                    <th class="kolom-bidang">Lokasi</th>
                                    <th class="kolom-bidang">Tanggal</th>
                                    <th class="kolom-bidang">Level Potensi</th>
                                    <th class="kolom-bidang">Status</th>
                                    <th class="kolom-aksi">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $potensiKonfliks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($potensiKonfliks->firstItem() + $index); ?></td>
                                        <td class="kolom-nama_program"><?php echo e($item->nama_potensi); ?></td>
                                        <td class="kolom-bidang"><?php echo e($item->kategori ?? '-'); ?></td>
                                        <td class="kolom-bidang">
                                            <?php echo ($item->alamat); ?>

                                            <?php echo e($item->lokasi_kecamatan); ?>

                                            <?php if($item->lokasi_kelurahan): ?>
                                                , <?php echo e($item->lokasi_kelurahan); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td class="kolom-bidang"><?php echo e(\Carbon\Carbon::parse($item->tanggal)->format('d/m/Y')); ?></td>
                                        <td class="kolom-bidang text-capitalize"><?php echo e($item->tingkat_potensi); ?></td>
                                        <td class="kolom-bidang text-capitalize"><?php echo e($item->status); ?></td>
                                        <td class="kolom-aksi">
                                            <a href="<?php echo e(route('potensi-konflik.edit', $item->id)); ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(route('potensi-konflik.destroy', $item->id)); ?>" method="POST" style="display: inline-block;">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus data ini?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="8" class="text-center">Data potensi konflik belum tersedia.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php echo e($potensiKonfliks->links('pagination::bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Tetap gunakan CSS yang sudah ada */
    .program-table {
        width: 100% !important;
        table-layout: fixed !important;
    }

    .program-table th.kolom-nama_program,
    .program-table td.kolom-nama_program {
        width: 50% !important;
        text-align: justify !important;
    }

    .program-table th.kolom-bidang,
    .program-table td.kolom-bidang {
        width: 30% !important;
    }

    .program-table th.kolom-aksi,
    .program-table td.kolom-aksi {
        width: 20% !important;
        text-align: center !important;
        vertical-align: middle !important;
    }

    .program-table td {
        padding: 12px 15px !important;
        white-space: normal !important;
        word-break: break-word !important;
        vertical-align: middle !important;
    }

    .program-table th {
        padding: 12px 15px !important;
        text-align: center !important;
        vertical-align: middle !important;
        font-weight: 600 !important;
    }

    .kolom-aksi .btn {
        margin: 0 2px !important;
    }

    .page-link {
        color: #B40D14 !important;
        background-color: #fff !important;
        border-color: #ddd !important;
    }

    .page-link:hover {
        color: #ffffff !important;
        background-color: #B40D14 !important;
        border-color: #B40D14 !important;
    }

    .page-item.active .page-link {
        color: #fff !important;
        background-color: #B40D14 !important;
        border-color: #B40D14 !important;
    }

    .page-item.disabled .page-link {
        color: #6c757d !important;
        background-color: #f8f9fa !important;
        border-color: #dee2e6 !important;
    }

    @media (max-width: 768px) {
        .program-table th.kolom-nama_program,
        .program-table td.kolom-nama_program {
            width: 50% !important;
        }
        .program-table th.kolom-bidang,
        .program-table td.kolom-bidang {
            width: 30% !important;
        }
        .program-table th.kolom-aksi,
        .program-table td.kolom-aksi {
            width: 20% !important;
        }
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

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/dashboard/potensi_konflik/index.blade.php ENDPATH**/ ?>