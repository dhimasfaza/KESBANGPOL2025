<?php $__env->startSection('title', 'Organisasi Masyarakat'); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <a href="<?php echo e(route('ormass.create')); ?>" class="btn-tambah-konten">
                            <i class="fas fa-plus"></i> <span>Tambah Organisasi</span>
                        </a>
                        
                        <!-- Search Form -->
                        <div class="search-container">
                            <form method="GET" action="<?php echo e(route('ormass.index')); ?>" class="d-flex">
                                <div class="input-group" style="width: 300px;">
                                    <input type="text" 
                                            class="form-control" 
                                            name="search" 
                                            value="<?php echo e(request('search')); ?>" 
                                            placeholder="Cari nama organisasi..."
                                            aria-label="Search" autocomplete="off">
                                    <button class="btn btn-outline-secondary" type="submit" id="search-button">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <?php if(request('search')): ?>
                                        <a href="<?php echo e(route('ormass.index')); ?>" class="btn btn-outline-danger" title="Clear search">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </form>
                        </div>
                    </div>

                    <?php if(session('success')): ?>
                        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
                    <?php endif; ?>

                    <!-- Search Results Info -->
                    <?php if(request('search')): ?>
                        <div class="mb-3">
                            <div class="alert alert-info mb-0">
                                <i class="fas fa-info-circle"></i>
                                Menampilkan hasil pencarian untuk: "<strong><?php echo e(request('search')); ?></strong>"
                                (<?php echo e($ormass->total()); ?> hasil ditemukan)
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="table-responsive">
                        <table class="table table-hover table-bordered program-table">
                            <thead class="table-light">
                                <tr>
                                    <th class="kolom-nama"><div class="text-wrap">NAMA ORGANISASI</div></th>
                                    <th class="kolom-alamat"><div class="text-wrap">ALAMAT</div></th>
                                    <th class="kolom-ketua"><div class="text-wrap">KETUA</div></th>
                                    <th class="kolom-akta"><div class="text-wrap">NO. TGL AKTA NOTARIS</div></th>
                                    <th class="kolom-ahu"><div class="text-wrap">NO. AHU/SKT/TGL</div></th>
                                    <th class="kolom-bidang"><div class="text-wrap">BIDANG</div></th>
                                    <th class="kolom-aksi"><div class="text-wrap">AKSI</div></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__empty_1 = true; $__currentLoopData = $ormass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $o): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php
                                        $ketua      = $o->pengurus->firstWhere('jabatan', 'Ketua');
                                        $dok        = $o->dokumen->first();
                                    ?>
                                    <tr>
                                        <td class="kolom-nama">
                                            <?php if(request('search')): ?>
                                                <?php echo str_ireplace(request('search'), '<mark>' . request('search') . '</mark>', e($o->nama_organisasi)); ?>

                                            <?php else: ?>
                                                <?php echo e($o->nama_organisasi); ?>

                                            <?php endif; ?>
                                        </td>
                                        <td class="kolom-alamat"><?php echo $o->alamat ?? '-'; ?></td>
                                        <td class="kolom-ketua"><?php echo e($ketua->nama ?? '-'); ?></td>

                                        <td class="kolom-akta">
                                            <?php if(!empty($dok->akta_notaris)): ?>
                                                <?php echo e($dok->akta_notaris); ?>

                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td class="kolom-ahu">
                                            <?php if(!empty($dok->ahu_skt)): ?>
                                                <?php echo e($dok->ahu_skt); ?>

                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>

                                        <td class="kolom-bidang"><?php echo e($o->bidang ?? '-'); ?></td>

                                        <td class="kolom-aksi text-center">
                                            <a href="<?php echo e(route('ormass.edit', $o->id)); ?>" class="btn btn-sm btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="<?php echo e(route('ormass.destroy', $o->id)); ?>" method="POST" class="d-inline"
                                                onsubmit="return confirm('Yakin ingin menghapus <?php echo e($o->nama_organisasi); ?>?')">
                                                <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="7" class="text-center">
                                            <?php if(request('search')): ?>
                                                Tidak ada organisasi yang ditemukan dengan kata kunci "<?php echo e(request('search')); ?>".
                                                <br>
                                                <a href="<?php echo e(route('ormass.index')); ?>" class="btn btn-sm btn-primary mt-2">
                                                    <i class="fas fa-arrow-left"></i> Kembali ke semua data
                                                </a>
                                            <?php else: ?>
                                                Belum ada data organisasi.
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-3">
                        <?php echo e($ormass->appends(request()->query())->links('pagination::bootstrap-5')); ?>

                    </div>

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

    .table tbody tr td:nth-child(1) {
        text-align: center !important;
    }

    .table tbody tr td:nth-child(2) {
        text-align: justify !important;
    }

    .table tbody tr td:nth-child(3) {
        text-align: justify !important;
    }

    .table tbody tr td:nth-child(4) {
        align-items: center !important;
    }

    /* Search container styles */
    .search-container {
        flex-shrink: 0;
    }

    .search-container .input-group {
        min-width: 250px;
    }

    .search-container .form-control:focus {
        border-color: #B40D14;
        box-shadow: 0 0 0 0.2rem rgba(180, 13, 20, 0.25);
    }

    .search-container .btn-outline-secondary {
        border-color: #6c757d;
        color: #6c757d;
    }

    .search-container .btn-outline-secondary:hover {
        background-color: #6c757d;
        border-color: #6c757d;
        color: #fff;
    }

    .search-container .btn-outline-danger:hover {
        background-color: #dc3545;
        border-color: #dc3545;
        color: #fff;
    }

    /* Highlight search results */
    mark {
        background-color: #fff3cd;
        color: #856404;
        padding: 1px 2px;
        border-radius: 2px;
    }

    /* Responsive search */
    @media (max-width: 768px) {
        .d-flex.justify-content-between {
            flex-direction: column;
            gap: 15px;
        }
        
        .search-container .input-group {
            width: 100% !important;
            min-width: unset;
        }
    }
</style>

<script>
    <?php if(session()->has('success')): ?>
        toastr.success('<?php echo e(session('success')); ?>', 'BERHASIL!');
    <?php elseif(session()->has('error')): ?>
        toastr.error('<?php echo e(session('error')); ?>', 'GAGAL!');
    <?php endif; ?>

    // Auto-focus search input when page loads if there's a search query
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.querySelector('input[name="search"]');
        const urlParams = new URLSearchParams(window.location.search);
        
        if (urlParams.get('search') && searchInput) {
            searchInput.focus();
            // Move cursor to end of input
            searchInput.setSelectionRange(searchInput.value.length, searchInput.value.length);
        }
    });

    // Handle Enter key for search
    document.querySelector('input[name="search"]').addEventListener('keypress', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            this.closest('form').submit();
        }
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/dashboard/ormass/index.blade.php ENDPATH**/ ?>