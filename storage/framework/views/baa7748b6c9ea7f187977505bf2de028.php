

<?php $__env->startSection('content'); ?>

<div class="container mt-4">

    <h2 class="mb-4">Daftar Artikel</h2>

    <div class="row">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-3">

            <div class="card shadow">

                <?php if($article->gambar): ?>
                    <img src="<?php echo e(asset('images/' . $article->gambar)); ?>" class="card-img-top">
                <?php endif; ?>

                <div class="card-body">
                    <h5><?php echo e($article->judul); ?></h5>

                    <p>
                        <?php echo e(Str::limit($article->isi, 100)); ?>

                    </p>

                    <a href="<?php echo e(url('/artikel/'.$article->id)); ?>" class="btn btn-primary btn-sm">
                        Baca Selengkapnya
                    </a>
                </div>

            </div>

        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_kecantikan\klinik_kecantikan\resources\views/artikel/index.blade.php ENDPATH**/ ?>