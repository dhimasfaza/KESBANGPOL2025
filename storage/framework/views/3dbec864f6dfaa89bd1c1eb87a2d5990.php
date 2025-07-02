<!doctype html>
<html lang="en">
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

  <style>
    html, body{
      /* overflow-y: hidden !important; */
    }
    body, .main-wrapper, .main-content {
        background: transparent !important; /* atau sesuai background hero */
        margin: 0 !important;
        padding: 0 !important;
        
    }
  </style>
  </head>

  <body>
  	<div id="app" class="main-wrapper">
  			<?php echo $__env->make('landingpage.shared.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
	  		<div class="main-content">
	  			<?php echo $__env->yieldContent('content'); ?>
	  		</div>
	  		<?php echo $__env->make('landingpage.shared.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
		</div>
    <!-- Overlay loading -->
    <div id="loading-overlay">
      <div class="loading-spinner"></div>
    </div>
    <button id="scrollTopBtn" class="scroll-top-btn" title="Kembali ke atas">
      <i class="fas fa-arrow-up"></i>
    </button>
  

  </body>
</html><?php /**PATH D:\Magang\KESBANGPOL2025\resources\views/landingpage/layouts/app.blade.php ENDPATH**/ ?>