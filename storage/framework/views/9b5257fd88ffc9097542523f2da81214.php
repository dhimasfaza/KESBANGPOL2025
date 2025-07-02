<aside class="dashboard-sidebar">
    <a href="<?php echo e(url('/home')); ?>" class="dashboard-sidebar-brand d-flex align-items-center justify-content-center py-3">
        <img src="<?php echo e(asset('images/component/logo1-2.png')); ?>" alt="Logo" class="sidebar-logo" width="35" height="35">
        <span class="sidebar-title">BAKESBANGPOL</span>
    </a>
    <hr class="sidebar-divider">
    <nav class="dashboard-sidebar-menu mt-2">
        <ul class="nav flex-column">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manage-blog')): ?>
            <li class="nav-item">
                <a href="<?php echo e(url('admin/blog')); ?>" class="nav-link">
                    <i class="fas fa-blog me-2"></i> <span class="sidebar-text">Blog</span>
                </a>
            </li>
            <?php endif; ?>

            <li class="nav-item mt-2">
                <span class="sidebar-heading">Beranda</span>
                <a href="<?php echo e(url('/posts')); ?>" class="nav-link <?php echo e(Request::is('posts*') ? 'active' : ''); ?>">
                    <i class="fas fa-newspaper me-2"></i> <span class="sidebar-text">Artikel</span>
                </a>

                <a href="<?php echo e(url('/banners')); ?>" class="nav-link <?php echo e(Request::is('banners*') ? 'active' : ''); ?>">
                    <i class="fas fa-image me-2"></i> <span class="sidebar-text">Banner</span>
                </a>

                <a href="<?php echo e(url('/galeris')); ?>" class="nav-link <?php echo e(Request::is('galeris*') ? 'active' : ''); ?>">
                    <i class="fas fa-images me-2"></i> <span class="sidebar-text">Galeri</span>
                </a>
            </li>
            

            <li class="nav-item mt-2">
                <span class="sidebar-heading">Profil</span>
                <li class="nav-item">
                    <a href="<?php echo e(url('/bidangs')); ?>" class="nav-link <?php echo e(Request::is('bidangs*') ? 'active' : ''); ?>">
                        <i class="fas fa-sitemap me-2"></i> <span class="sidebar-text">Bidang</span>
                    </a>

                    <a href="<?php echo e(url('/visimisis')); ?>" class="nav-link <?php echo e(Request::is('visimisis*') ? 'active' : ''); ?>">
                        <i class="fas fa-eye me-2"></i> <span class="sidebar-text">Profil Organisasi</span>
                    </a>

                    <a href="<?php echo e(url('/strukturors')); ?>" class="nav-link <?php echo e(Request::is('strukturors*') ? 'active' : ''); ?>">
                        <i class="fas fa-project-diagram me-2"></i> <span class="sidebar-text">Struktur Organisasi</span>
                    </a>

                    <a href="<?php echo e(url('/landasanhukum')); ?>" class="nav-link <?php echo e(Request::is('landasanhukum*') ? 'active' : ''); ?>">
                        <i class="fas fa-gavel me-2"></i> <span class="sidebar-text">Dasar Hukum</span>
                    </a>

                    <a href="<?php echo e(url('/programs')); ?>" class="nav-link <?php echo e(Request::is('programs*') ? 'active' : ''); ?>">
                        <i class="fas fa-list-alt me-2"></i> <span class="sidebar-text">Program</span>
                    </a>
                </li>
            </li>

            <li class="nav-item mt-2">
                <span class="sidebar-heading">Sakip</span>
                <li class="nav-item">
                    <a href="<?php echo e(url('/iku')); ?>" class="nav-link <?php echo e(Request::is('iku*') ? 'active' : ''); ?>">
                        <i class="fas fa-chart-line me-2"></i> <span class="sidebar-text">Indikator Kinerja</span>
                    </a>

                    <a href="<?php echo e(url('/renja')); ?>" class="nav-link <?php echo e(Request::is('renja*') ? 'active' : ''); ?>">
                        <i class="fas fa-calendar-alt me-2"></i> <span class="sidebar-text">RENJA</span>
                    </a>

                    <a href="<?php echo e(url('/renstra')); ?>" class="nav-link <?php echo e(Request::is('renstra*') ? 'active' : ''); ?>">
                        <i class="fas fa-bullseye me-2"></i> <span class="sidebar-text">RENSTRA</span>
                    </a>

                    <a href="<?php echo e(url('/ukurkerja')); ?>" class="nav-link <?php echo e(Request::is('ukurkerja*') ? 'active' : ''); ?>">
                        <i class="fas fa-tasks me-2"></i> <span class="sidebar-text">Pengukuran Kerja</span>
                    </a>

                    <a href="<?php echo e(url('/lakip')); ?>" class="nav-link <?php echo e(Request::is('lakip*') ? 'active' : ''); ?>">
                        <i class="fas fa-file-alt me-2"></i> <span class="sidebar-text">Laporan AKIP</span>
                    </a>
                </li>
            </li>

            <li class="nav-item mt-2">
                <span class="sidebar-heading">Mitra</span>
                <li class="nav-item">
                    <a href="<?php echo e(url('/mitras')); ?>" class="nav-link <?php echo e(Request::is('mitras*') ? 'active' : ''); ?>">
                        <i class="fas fa-handshake me-2"></i> <span class="sidebar-text">Mitra</span>
                    </a>
                </li>
            </li>

            <li class="nav-item mt-2">
                <span class="sidebar-heading">Informasi</span>
                <li class="nav-item">
                    <a href="<?php echo e(url('/ormass')); ?>" class="nav-link <?php echo e(Request::is('ormass*') ? 'active' : ''); ?>">
                        <i class="fas fa-users me-2"></i> <span class="sidebar-text">Organisasi Masyarakat</span>
                    </a>
                    <a href="<?php echo e(url('/potensi-konflik')); ?>" class="nav-link <?php echo e(Request::is('potensi-konflik*') ? 'active' : ''); ?>">
                        <i class="fas fa-magnifying-glass-chart me-2"></i> <span class="sidebar-text">Potensi Konflik</span>
                    </a>
                    <a href="#" class="nav-link">
                        <i class="fas fa-square-poll-vertical me-2"></i> <span class="sidebar-text">Pemilukada</span>
                    </a>
                </li>
            </li>

        </ul>
    </nav>
</aside>

<style>
    .dashboard-sidebar {
        overflow-y: auto;
        scrollbar-width: none; /* Firefox */
        -ms-overflow-style: none; /* IE and Edge */
    }

    .dashboard-sidebar::-webkit-scrollbar {
        display: none; /* Chrome, Safari, Opera */
    }

    /* Ensure the sidebar has a fixed height or max-height */
    .dashboard-sidebar {
        max-height: 100vh; /* Or set a specific height like 100vh or 800px */
    }

    /* Optional: Add some padding to the bottom of the sidebar menu for better spacing */
    .dashboard-sidebar-menu {
        padding-bottom: 20px;
    }
</style><?php /**PATH D:\TUBES IAE\KESBANGPOL2025\resources\views/dashboard/layouts/partials/sidebar.blade.php ENDPATH**/ ?>