<?php $__env->startSection('title', 'Tambah Mitra'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="<?php echo e(route('mitras.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            
                            <div class="card mb-4">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Tambah Data Mitra</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 mb-3 font-weight-bold">
                                            <label for="kategori_mitra">Kategori Mitra</label>
                                            <select name="kategori_mitra" id="kategori_mitra" class="form-control">
                                                <option value="" disabled selected>Pilih Mitra</option>
                                                <option value="FORKOPIMDA" <?php echo e(old('kategori_mitra') == 'FORKOPIMDA' ? 'selected' : ''); ?>>FORKOPIMDA</option>
                                                <option value="KPU" <?php echo e(old('kategori_mitra') == 'KPU' ? 'selected' : ''); ?>>KPU</option>
                                                <option value="BAWASLU" <?php echo e(old('kategori_mitra') == 'BAWASLU' ? 'selected' : ''); ?>>BAWASLU</option>
                                                <option value="BNN" <?php echo e(old('kategori_mitra') == 'BNN' ? 'selected' : ''); ?>>BNN</option>
                                                <option value="PARPOL" <?php echo e(old('kategori_mitra') == 'PARPOL' ? 'selected' : ''); ?>>PARPOL</option>
                                                <option value="FKDM" <?php echo e(old('kategori_mitra') == 'FKDM' ? 'selected' : ''); ?>>FKDM</option>
                                                <option value="FKUB" <?php echo e(old('kategori_mitra') == 'FKUB' ? 'selected' : ''); ?>>FKUB</option>
                                                <option value="FPK" <?php echo e(old('kategori_mitra') == 'FPK' ? 'selected' : ''); ?>>FPK</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="font-weight-bold">Nama Lembaga</label>
                                            
                                            <input type="text" class="form-control <?php $__errorArgs = ['nama_lembaga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama_lembaga" value="<?php echo e(old('nama_lembaga')); ?>" placeholder="Masukkan Nama Lembaga">
                                            <?php $__errorArgs = ['nama_lembaga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="col-md-6 mb-3 font-weight-bold">
                                            <label class="font-weight-bold">Logo</label>
                                            <input type="file" class="form-control <?php $__errorArgs = ['logo_lembaga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="logo_lembaga" accept=".jpg,.jpeg,.png,.webp">
                                            <?php $__errorArgs = ['logo_lembaga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="font-weight-bold">Nama Ketua</label>
                                            
                                            <input type="text" class="form-control <?php $__errorArgs = ['ketua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="ketua" value="<?php echo e(old('ketua')); ?>" placeholder="Masukkan Nama Ketua">
                                            <?php $__errorArgs = ['ketua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>

                                        <div class="col-md-6 mb-3 font-weight-bold">
                                            <label class="font-weight-bold">Foto Ketua</label>
                                            <input type="file" class="form-control <?php $__errorArgs = ['foto_ketua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="foto_ketua" accept=".jpg,.jpeg,.png,.webp">
                                            <?php $__errorArgs = ['foto_ketua'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label class="font-weight-bold">Kontak</label>
                                        
                                        <input type="text" class="form-control <?php $__errorArgs = ['kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="kontak" value="<?php echo e(old('kontak')); ?>" placeholder="Masukkan Kontak">
                                        <?php $__errorArgs = ['kontak'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label class="font-weight-bold">Alamat</label>
                                        
                                        <textarea class="form-control <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="alamat" id="editor1" rows="10" placeholder="Masukkan Alamat Lembaga"><?php echo e(old('alamat')); ?></textarea>
                                        <?php $__errorArgs = ['alamat'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>

                                    <div class="mb-3">
                                        <label class="font-weight-bold">Deskripsi Lembaga</label>
                                        
                                        <textarea class="form-control <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="deskripsi" id="editor2" rows="10" placeholder="Masukkan Deskripsi Lembaga"><?php echo e(old('deskripsi')); ?></textarea>
                                        <?php $__errorArgs = ['deskripsi'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <div class="alert alert-danger mt-2"><?php echo e($message); ?></div>
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
    <style>
        .ck-editor__editable_inline{
            min-height: 200px;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Magang\KESBANGPOL2025\resources\views/dashboard/mitras/create.blade.php ENDPATH**/ ?>