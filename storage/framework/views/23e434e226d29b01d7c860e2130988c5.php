<?php $__env->startSection('title', 'Login'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login-form.css')); ?>">
<?php $__env->startSection('auth_body'); ?>

<?php
    $loginUrl = route('login');
    $registerUrl = Route::has('register') ? route('register') : null;
    $passResetUrl = Route::has('password.request') ? route('password.request') : null;
?>

<div class="login-wrapper d-flex align-items-center justify-content-center">
    <div class="login-card">
        
        <div class="login-logo">
            <img src="<?php echo e(asset('images/component/logo1-2.png')); ?>" alt="Logo Kesbangpol" class="logo-img me-2">
            <h2 class="logo-text m-0">BAKESBANGPOL</h2>
        </div>
        <h3 class="text-center mb-0">Sign in to start your session</h3>
        <form action="<?php echo e($loginUrl); ?>" method="POST" class="login-form">
            <?php echo csrf_field(); ?>
            
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email"
                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    value="<?php echo e(old('email')); ?>" placeholder="Masukkan email" required autofocus>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"
                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Masukkan password" required autocomplete="off">
                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback"><?php echo e($message); ?></div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                    <?php echo e(old('remember') ? 'checked' : ''); ?>>
                <label class="form-check-label" for="remember">
                    Remember Me
                </label>
            </div>

            
            <button type="submit" class="btn-login w-100">

                <span class="btn-text">Sign In</span>
                <span class="btn-icon">
                    
                    <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M10 17l5-5-5-5v10zM4 4h2v16H4V4z"/>
                    </svg>
                </span>
            </button>

            
            <?php if($passResetUrl): ?>
                <div class="text-center mt-3">
                    <a href="<?php echo e($passResetUrl); ?>" class="link-secondary">Lupa password?</a>
                </div>
            <?php endif; ?>
            
            <?php if($registerUrl): ?>
                <div class="text-center mt-2">
                    <a href="<?php echo e($registerUrl); ?>" class="link-secondary">Belum punya akun? Daftar</a>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.auth-page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Magang\KESBANGPOL2025\resources\views/auth/login.blade.php ENDPATH**/ ?>