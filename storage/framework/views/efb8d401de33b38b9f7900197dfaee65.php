

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Detail Paslon #<?php echo e($paslon->no_urut); ?></h3>
        <a href="<?php echo e(route('pilpres.index')); ?>" class="btn btn-secondary">
            <i class="fas fa-arrow-left me-1"></i> Kembali ke Daftar
        </a>
    </div>

    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Kandidat Presiden</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 text-center">
                    <?php if($paslon->calon_1_foto): ?>
                        <img src="<?php echo e(Storage::url($paslon->calon_1_foto)); ?>" class="img-fluid rounded img-thumbnail" alt="Foto calon_1">
                    <?php else: ?>
                        <img src="https://placehold.co/300x400/e2e8f0/e2e8f0?text=Foto" class="img-fluid rounded img-thumbnail" alt="Foto tidak tersedia">
                    <?php endif; ?>
                </div>
                <div class="col-md-9">
                    <h4><?php echo e($paslon->calon_1_nama); ?></h4>
                    <table class="table table-sm table-borderless">
                        <tr>
                            <td style="width: 200px;"><strong>No Urut</strong></td>
                            <td>: <?php echo e($paslon->no_urut); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tempat, Tanggal Lahir</strong></td>
                            <td>: <?php echo e($paslon->calon_1_tempat_lahir); ?>, <?php echo e(\Carbon\Carbon::parse($paslon->calon_1_tanggal_lahir)->format('d F Y')); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin</strong></td>
                            <td>: <?php echo e($paslon->calon_1_jenis_kelamin); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Partai Pengusung</strong></td>
                            <td>: <?php echo e($paslon->partai_pengusung); ?></td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pendidikan</strong></td>
                            <td class="align-top">: <?php echo nl2br(e($paslon->calon_1_riwayat_pendidikan)); ?></td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pekerjaan</strong></td>
                            <td class="align-top">: <?php echo nl2br(e($paslon->calon_1_riwayat_pekerjaan)); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <div class="card">
        <div class="card-header bg-danger text-white">
            <h5 class="mb-0">Kandidat Wakil Presiden</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 text-center">
                     <?php if($paslon->calon_2_foto): ?>
                        <img src="<?php echo e(Storage::url($paslon->calon_2_foto)); ?>" class="img-fluid rounded img-thumbnail" alt="Foto calon_2">
                    <?php else: ?>
                        <img src="https://placehold.co/300x400/e2e8f0/e2e8f0?text=Foto" class="img-fluid rounded img-thumbnail" alt="Foto tidak tersedia">
                    <?php endif; ?>
                </div>
                <div class="col-md-9">
                    <h4><?php echo e($paslon->calon_2_nama); ?></h4>
                    <table class="table table-sm table-borderless">
                         <tr>
                            <td style="width: 200px;"><strong>No Urut</strong></td>
                            <td>: <?php echo e($paslon->no_urut); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Tempat, Tanggal Lahir</strong></td>
                            <td>: <?php echo e($paslon->calon_2_tempat_lahir); ?>, <?php echo e(\Carbon\Carbon::parse($paslon->calon_2_tanggal_lahir)->format('d F Y')); ?></td>
                        </tr>
                        <tr>
                            <td><strong>Jenis Kelamin</strong></td>
                            <td>: <?php echo e($paslon->calon_2_jenis_kelamin); ?></td>
                        </tr>
                         <tr>
                            <td><strong>Partai Pengusung</strong></td>
                            <td>: <?php echo e($paslon->partai_pengusung); ?></td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pendidikan</strong></td>
                            <td class="align-top">: <?php echo nl2br(e($paslon->calon_2_riwayat_pendidikan)); ?></td>
                        </tr>
                        <tr>
                            <td class="align-top"><strong>Riwayat Pekerjaan</strong></td>
                            <td class="align-top">: <?php echo nl2br(e($paslon->calon_2_riwayat_pekerjaan)); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
    
<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/dashboard/pemilu_raya/pilpres/show.blade.php ENDPATH**/ ?>