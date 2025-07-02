<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    <link rel="icon" href="<?php echo e(asset('images/component/logoremovebg2.png')); ?>" type="image/png">
    <title>
        <?php if (! empty(trim($__env->yieldContent('title')))): ?>
            <?php echo $__env->yieldContent('title'); ?> - Badan Kesatuan Bangsa dan Politik Kota Bandung 
        <?php else: ?>
            Bakesbangpol Kota Bandung
        <?php endif; ?>
    </title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php echo $__env->yieldPushContent('css'); ?>
    <?php echo $__env->yieldContent('css'); ?>
</head>
<style>
    html, body {
    height: 100vh;
    background: linear-gradient(135deg, #B40D14 0%, #8C0A0F 100%);
    overflow: hidden;
    }

    /* Option 1: Floating Squares/Rectangles */
    body::before {
        content: '';
        position: fixed;
        top: -80px;
        right: -40px;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 4px;
        transform: rotate(15deg);
        animation: float-square1 18s ease-in-out infinite;
        z-index: 1;
    }

    body::after {
        content: '';
        position: fixed;
        bottom: -120px;
        left: -60px;
        width: 400px;
        height: 250px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 4px;
        transform: rotate(-10deg);
        animation: float-square2 15s ease-in-out infinite reverse;
        z-index: 1;
    }

    /* Additional floating elements */
    /* body::before, body::after {} */

    /* Add additional floating elements */
    .bg-element-1 {
        content: '';
        position: fixed;
        top: 20%;
        right: 15%;
        width: 180px;
        height: 180px;
        background: rgba(255, 255, 255, 0.03);
        border-radius: 4px;
        transform: rotate(25deg);
        animation: float-square3 20s ease-in-out infinite;
        z-index: 1;
    }

    .bg-element-2 {
        content: '';
        position: fixed;
        bottom: 30%;
        left: 20%;
        width: 140px;
        height: 220px; 
        background: rgba(255, 255, 255, 0.04);
        border-radius: 4px;
        transform: rotate(-20deg);
        animation: float-square4 22s ease-in-out infinite;
        z-index: 1;
    }

    @keyframes float-square1 {
        0%, 100% {
            transform: translate(0, 0) rotate(15deg) scale(1);
        }
        25% {
            transform: translate(30px, 40px) rotate(20deg) scale(1.05);
        }
        50% {
            transform: translate(15px, 20px) rotate(10deg) scale(0.98);
        }
        75% {
            transform: translate(-20px, 30px) rotate(18deg) scale(1.02);
        }
    }

    @keyframes float-square2 {
        0%, 100% {
            transform: translate(0, 0) rotate(-10deg) scale(1);
        }
        33% {
            transform: translate(40px, -30px) rotate(-15deg) scale(1.1);
        }
        66% {
            transform: translate(-30px, -15px) rotate(-5deg) scale(0.95);
        }
    }

    @keyframes float-square3 {
        0%, 100% {
            transform: translate(0, 0) rotate(25deg) scale(1);
        }
        30% {
            transform: translate(-20px, 25px) rotate(30deg) scale(1.08);
        }
        60% {
            transform: translate(25px, -15px) rotate(20deg) scale(0.92);
        }
    }

    @keyframes float-square4 {
        0%, 100% {
            transform: translate(0, 0) rotate(-20deg) scale(1);
        }
        40% {
            transform: translate(15px, -30px) rotate(-25deg) scale(1.06);
        }
        80% {
            transform: translate(-25px, 10px) rotate(-15deg) scale(0.94);
        }
    }

</style>
<body class="auth-page <?php echo $__env->yieldContent('body_class'); ?>">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">

                
                <div>
                    
                    <div class="card-body">
                        <?php echo $__env->yieldContent('auth_body'); ?>
                    </div>

                    
                    <?php if (! empty(trim($__env->yieldContent('auth_footer')))): ?>
                        <div class="card-footer text-center">
                            <?php echo $__env->yieldContent('auth_footer'); ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldPushContent('js'); ?>
    <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
<?php /**PATH D:\Magang\KESBANGPOL2025\resources\views/auth/auth-page.blade.php ENDPATH**/ ?>