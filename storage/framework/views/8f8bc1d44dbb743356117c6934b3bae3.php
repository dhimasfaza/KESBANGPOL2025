<link rel="stylesheet" href="<?php echo e(asset('assets/css/articles.css')); ?>">

<?php if($posts->count()): ?>
    <div id="artikel-list" class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-4">
                <div class="card artikel-card h-100" onclick="window.location.href='<?php echo e(route('isi-artikel', $post->slug)); ?>'">
                    <div class="artikel-card-img-wrapper">
                        <img src="<?php echo e(asset('images/posts/' . $post->image)); ?>" class="card-img-top" alt="<?php echo e($post->title); ?>">
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo e($post->title); ?></h5>
                        <p class="card-text text-muted"><?php echo e($post->created_at->format('d M Y')); ?></p>
                        <p class="card-text artikel-desc">
                            <?php echo e(\Illuminate\Support\Str::limit(strip_tags($post->content), 200)); ?>

                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="mt-3">
        <?php echo e($posts->links('components.custom-pagination')); ?>


    </div>
<?php else: ?>
    <div class="alert alert-warning">Tidak ada artikel ditemukan.</div>
<?php endif; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Ambil semua card artikel
        const articleCards = document.querySelectorAll('.artikel-card');
        
        articleCards.forEach(card => {
            card.addEventListener('click', function(e) {
                // Cari link "Baca Selengkapnya" di dalam card
                const readMoreLink = this.querySelector('a[href*="isi-artikel"]');
                
                if (readMoreLink) {
                    // Redirect ke halaman artikel
                    window.location.href = readMoreLink.href;
                }
            });
            
            // Tambahkan efek hover untuk menunjukkan card bisa diklik
            card.addEventListener('mouseenter', function() {
                this.style.cursor = 'pointer';
            });
        });
    });
</script><?php /**PATH D:\KP Semester 6\KESBANGPOL2025\resources\views/landingpage/artikel/artikel-list.blade.php ENDPATH**/ ?>