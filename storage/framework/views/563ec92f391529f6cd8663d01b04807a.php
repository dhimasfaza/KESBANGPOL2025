<?php $__env->startSection('title', 'Kumpulan Artikel'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/articles.css')); ?>">
<?php $__env->startSection('content'); ?>
<div id="semua-artikel" class="container py-5">
    <h2>Semua Artikel</h2>
    
    <div class="row g-2 align-items-end artikel-filter-bar">
        <div class="col-lg-3 col-md-6">
            <label class="form-label fw-semibold">
                <i class="fa-solid fa-layer-group me-1 text-danger"></i> Bidang
            </label>
            <select id="filter-bidang" class="form-select">
                <option value="">Semua Bidang</option>
                <?php $__currentLoopData = $bidangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($bidang->id); ?>" <?php echo e(request('bidang_id') == $bidang->id ? 'selected' : ''); ?>>
                        <?php echo e($bidang->nama_bidang); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-lg-3 col-md-6">
            <label class="form-label fw-semibold">
                <i class="fa-solid fa-magnifying-glass me-1 text-danger"></i> Pencarian
            </label>
            <input type="text" id="search-input" class="form-control" placeholder="Cari artikel..." autocomplete="off">
        </div>
        <div class="col-lg-3 col-md-6">
            <label class="form-label fw-semibold">
                <i class="fa-solid fa-sort me-1 text-danger"></i> Urutkan
            </label>
            <select id="filter-sort" class="form-select">
                <option value="">Urutkan</option>
                <option value="created_desc">Terbaru</option>
                <option value="created_asc">Terlama</option>
                <option value="title_asc">Judul A-Z</option>
                <option value="title_desc">Judul Z-A</option>   
            </select>
        </div>
        <div class="col-lg-3 col-md-6 d-grid">
            <button id="reset-filter" class="btn btn-outline-danger">
                <i class="fa-solid fa-rotate-left me-1"></i> Reset Filter
            </button>
        </div>
    </div>
    

    <div id="artikel-list">
        <?php echo $__env->make('landingpage.artikel.artikel-list', ['posts' => $posts], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('landingpage.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/landingpage/artikel/semua-artikel.blade.php ENDPATH**/ ?>