<?php $__env->startSection('title', 'Program'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/share-page.css')); ?>">

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section class="visimisi-hero">
        <div class="floating-elements">
            <div class="float-element float-1"></div>
            <div class="float-element float-2"></div>
            <div class="float-element float-3"></div>
            <div class="float-element float-4"></div>
        </div>
        <div class="visimisi-hero-overlay"></div>
        <div class="visimisi-hero-content">
            <div class="hero-badge">Programs & Activities</div>
            <h1 class="visimisi-title">PROGRAM DAN KEGIATAN</h1>
            <p class="visimisi-subtitle">Badan Kesatuan Bangsa dan Politik Kota Bandung</p>

        </div>
        <div class="hero-shape"></div>
    </section>

    <!-- Program Section -->
    <section class="program-section">
        <div class="container">
            <?php $__currentLoopData = $groupedPrograms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang => $programs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="program-bidang-box">
                    <h3 class="program-bidang-title"><?php echo e($bidang); ?></h3>
                    <ul class="program-list">
                        <?php $__currentLoopData = $programs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $program): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="program-item">
                                <span class="program-number"><?php echo e($key + 1); ?></span>
                                <a href="<?php echo e(route('semua-artikel', ['program_id' => $program->id])); ?>">
                                    <?php echo e($program->nama_program); ?>

                                </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>


    <!-- Bagian Share -->
    <section class="share-section py-4">
        <div class="container">
            <div class="page-share p-3 rounded shadow-sm" style="background: #ffffff;">
                <h3 class="share-title mb-3">
                    <i class="fas fa-share-alt"></i>
                    Bagikan Halaman Ini
                </h3>
                <div class="share-options d-flex gap-3">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(urlencode(request()->fullUrl())); ?>" 
                        target="_blank" class="share-icon facebook" title="Bagikan ke Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url=<?php echo e(urlencode(request()->fullUrl())); ?>&text=<?php echo e(urlencode('Program dan Kegiatan Badan Kesatuan Bangsa dan Politik Kota Bandung')); ?>" 
                        target="_blank" class="share-icon twitter" title="Bagikan ke Twitter">
                        <i class="fab fa-x-twitter"></i>
                    </a>
                    <a href="https://api.whatsapp.com/send?text=<?php echo e(urlencode('Program dan Kegiatan Badan Kesatuan Bangsa dan Politik Kota Bandung')); ?>%20<?php echo e(urlencode(request()->fullUrl())); ?>" 
                        target="_blank" class="share-icon whatsapp" title="Bagikan ke WhatsApp">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="mailto:?subject=<?php echo e(urlencode('Program dan Kegiatan Badan Kesatuan Bangsa dan Politik Kota Bandung')); ?>&body=<?php echo e(urlencode('Saya ingin berbagi halaman menarik ini: ' . request()->fullUrl())); ?>" 
                        class="share-icon email" title="Bagikan via Email">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="javascript:void(0)" onclick="copyToClipboard()" 
                        class="share-icon copy" title="Salin Link">
                        <i class="fas fa-link"></i>
                    </a>
                </div>
            </div>

            <!-- Toast Notification -->
            <div id="copyToast" class="copy-toast hidden">
                <i class="fas fa-check-circle"></i>
                Link berhasil disalin!
            </div>
        </div>
    </section>

        <!-- Script Share -->
    <script>
        function copyToClipboard() {
            if (navigator.clipboard && window.isSecureContext) {
                navigator.clipboard.writeText(window.location.href).then(() => {
                    showToast();
                }).catch(() => {
                    fallbackCopyToClipboard();
                });
            } else {
                fallbackCopyToClipboard();
            }
        }

        function fallbackCopyToClipboard() {
            const tempInput = document.createElement('input');
            tempInput.value = window.location.href;
            document.body.appendChild(tempInput);
            tempInput.select();
            tempInput.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            showToast();
        }

        function showToast() {
            const toast = document.getElementById('copyToast');
            toast.classList.remove('hidden');
            toast.classList.add('show');
            
            setTimeout(() => {
                toast.classList.remove('show');
                setTimeout(() => {
                    toast.classList.add('hidden');
                }, 300);
            }, 3000);
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 80, // Offset for fixed header if needed
                            behavior: 'smooth'
                        });
                    }
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('landingpage.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/landingpage/profile/program.blade.php ENDPATH**/ ?>