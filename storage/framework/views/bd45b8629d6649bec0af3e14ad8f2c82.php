<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <?php echo $__env->yieldContent('title'); ?> - Badan Kesatuan Bangsa dan Politik Kota Bandung
        <?php else: ?>
            Bakesbangpol Kota Bandung 
        <?php endif; ?>
    </title>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link rel="icon" href="<?php echo e(asset('images/component/logoremovebg2.png')); ?>" type="image/png">
    
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-navbar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-sidebar.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-home.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-artikel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-bidang.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-visimisi.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-strukturors.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-program.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard-ormas.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/bagan-strukturors.css')); ?>">



    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <div class="d-flex">
        <?php echo $__env->make('dashboard.layouts.partials.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

        <div class="main-wrapper flex-grow-1">
            <?php echo $__env->make('dashboard.layouts.partials.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <main class="dashboard-content p-3">
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>


    <!-- Letakkan paling bawah -->
    <?php echo $__env->yieldPushContent('scripts'); ?>

</body>
</html>
<?php /**PATH D:\Magang\KESBANGPOL2025\resources\views/dashboard/layouts/app.blade.php ENDPATH**/ ?>