<?php $__env->startSection('title', 'Edit Artikel'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow-sm rounded">
                        <div class="card-body">
                            <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>


                                <div class="col-md-6 mb-3 font-weight-bold">
                                    <label for="bidang_id">Bidang</label>
                                    <select name="bidang_id" id="bidang_id" class="form-control">
                                        <option value="" disabled>Pilih Bidang</option>
                                        <?php $__currentLoopData = $bidangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bidang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($bidang->id); ?>" <?php echo e($bidang->id == $post->bidang_id ? 'selected' : ''); ?>>
                                                <?php echo e($bidang->nama_bidang); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-3 font-weight-bold">
                                    <label for="program_id">Program Kegiatan</label>
                                        <select
                                            name="program_id"
                                            id="program_id"
                                            class="form-control"
                                            data-selected="<?php echo e($post->program_id); ?>"
                                            <?php echo e($post->bidang_id ? '' : 'disabled'); ?>>
                                            <option value="" disabled selected>Pilih Program</option>
                                        </select>

                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold">GAMBAR</label>
                                    <?php if($post->image): ?>
                                        <div>
                                            <img src="<?php echo e(asset('images/posts/' . $post->image)); ?>" alt="Gambar" class="img-thumbnail mb-2" width="150">
                                        </div>
                                    <?php endif; ?>
                                    <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
                                    <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
                                </div>
                            

                                <div class="form-group">
                                    <label class="font-weight-bold">JUDUL</label>
                                    <input type="text" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="title" value="<?php echo e(old('title', $post->title)); ?>" placeholder="Masukkan Judul Post">
                                
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

                                <div class="form-group">
                                    <label class="font-weight-bold">KONTEN</label>
                                    <textarea class="form-control <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="content" id="editor" rows="5" placeholder="Masukkan Konten Post"><?php echo e(old('content', $post->content)); ?></textarea>
                                
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

                                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>

                            </form> 
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

            // 2️⃣ Inisialisasi untuk EDIT: langsung load jika ada bidang & program terpilih
            const currentBidangId   = bidangSelect.value;                // misal: "3"
            const currentProgramId  = programSelect.dataset.selected;     // misal: "7"
            if (currentBidangId) {
                loadPrograms(currentBidangId, currentProgramId);
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

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\TUBES IAE\KESBANGPOL2025\resources\views/dashboard/posts/edit.blade.php ENDPATH**/ ?>