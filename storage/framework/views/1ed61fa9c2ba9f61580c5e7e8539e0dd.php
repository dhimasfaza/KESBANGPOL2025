<?php $__env->startSection('title', 'Tambah Pengukuran Kerja'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="<?php echo e(route('ukurkerja.store')); ?>" method="POST" enctype="multipart/form-data">   
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="title-ukurkerja" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title-ukurkerja" name="title" required autocomplete="off">
                            </div>

                            <div class="mb-3">
                                <label for="tahun" class="form-label">Tahun</label>
                                <input type="text" class="form-control" id="tahun" name="tahun" required autocomplete="off">
                            </div>

                            <div class="mb-3">
                                <label for="file_upload" class="form-label">Upload File</label>
                                <input type="file" class="form-control" id="file_upload" name="file_upload" required accept=".pdf">
                            </div>

                            <div class="mb-3">
                                <label for="file_upload_wm" class="form-label">Upload File Watermark</label>
                                <input type="file" class="form-control" id="file_upload_wm" name="file_upload_wm" required accept=".pdf">
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Dhimas Faza\Documents\Kuliah\Semester 6\MAGANG\WEBSITE-KESBANGPOL\KESBANGPOL2025\resources\views/dashboard/ukurkerja/create.blade.php ENDPATH**/ ?>