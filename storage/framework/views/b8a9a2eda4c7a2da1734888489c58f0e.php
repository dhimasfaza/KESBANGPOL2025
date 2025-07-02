<?php $__env->startSection('title', 'Dashboard'); ?>


<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row g-3">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="info-box h-100">
                    <span class="info-box-icon bg-info elevation-1"><i class="fas fa-newspaper"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total Artikel</span>
                        <span class="info-box-number"><?php echo e($count); ?></span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="info-box h-100">
                    <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-dumbbell"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Program</span>
                        <span class="info-box-number"><?php echo e($count2); ?></span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="info-box h-100">
                    <span class="info-box-icon bg-success elevation-1"><i class="fas fa-university"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Ormas</span>
                        <span class="info-box-number"><?php echo e($count3); ?></span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="info-box h-100">
                    <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Total User</span>
                        <span class="info-box-number"><?php echo e($count4); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\TUBES IAE\KESBANGPOL2025\resources\views/dashboard/home.blade.php ENDPATH**/ ?>