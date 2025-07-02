<?php $__env->startSection('title', 'Tambah Artikel'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <!-- Manual Input Form -->
                        <div id="manual-input-form">
                        <form action="<?php echo e(route('posts.store')); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                
                                <div class="card mb-4">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="mb-0">Tambah Data Artikel</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 mb-3 font-weight-bold">
                                                <label for="bidang_id">Bidang</label>
                                                <select name="bidang_id" id="bidang_id" class="form-control">
                                                    <option value="" disabled selected>Pilih Bidang</option>
                                                    <?php $__currentLoopData = $bidangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($bidang->id); ?>"><?php echo e($bidang->nama_bidang); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3 font-weight-bold">
                                                <label for="program_id">Program Kegiatan</label>
                                                <select name="program_id" id="program_id" class="form-control" disabled>
                                                    <option value="" disabled selected>Pilih Program</option>
                                                </select>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Judul</label>
                                                <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title')); ?>" placeholder="Masukkan Judul Post">
                                                <!-- error message untuk title -->
                                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <div class="alert alert-danger mt-2">
                                                        <?php echo e($message); ?>

                                                    </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="font-weight-bold">Gambar</label>
                                            <input type="file" class="form-control <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="image" accept=".jpg,.jpeg,.png,.webp">
                                            
                                            <!-- error message untuk title -->
                                            <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger mt-2">
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <div class="mb-3">
                                            <label class="font-weight-bold">Konten</label>
                                            <textarea class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="content" id="editor" rows="10" placeholder="Masukkan Konten Post"><?php echo e(old('content')); ?></textarea>
                                        
                                            <!-- error message untuk content -->
                                            <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger mt-2">
                                                    <?php echo e($message); ?>

                                                </div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions d-flex gap-2">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-1"></i> Simpan
                                    </button>
                                    <button type="reset" class="btn btn-warning">
                                        <i class="fas fa-undo me-1"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .ck-editor__editable_inline {
            min-height: 400px; /* Atur sesuai keinginan */
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Program pada posts create dan edit
            const bidangSelect = document.getElementById('bidang_id');
            const programSelect = document.getElementById('program_id');

            // 1️⃣ Definisikan fungsi loadPrograms
            function loadPrograms(bidangId, selectedProgramId = null) {
                if (!bidangId) {
                    programSelect.innerHTML = '<option value="" disabled selected>Pilih Program</option>';
                    programSelect.disabled = true;
                    return;
                }

                $.ajax({
                    url: '/get-programs-by-bidang',
                    type: 'GET',
                    data: { bidang_id: bidangId },
                    success: function(data) {
                        // reset option
                        programSelect.innerHTML = '<option value="" disabled selected>Pilih Program</option>';
                        data.forEach(program => {
                        const opt = document.createElement('option');
                        opt.value = program.id;
                        opt.textContent = program.nama_program;
                        if (selectedProgramId && +selectedProgramId === program.id) {
                            opt.selected = true;
                        }
                        programSelect.appendChild(opt);
                        });
                        programSelect.disabled = false;
                    },
                    error: function(xhr, status, err) {
                        console.error('AJAX Error:', err);
                }
                });
            }


            // 3️⃣ Event saat bidang diubah
            bidangSelect.addEventListener('change', function() {
                // hapus data-selected agar tidak tetap memilih program lama
                programSelect.removeAttribute('data-selected');
                loadPrograms(this.value);
            });

        });

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Magang\KESBANGPOL2025\resources\views/dashboard/posts/create.blade.php ENDPATH**/ ?>