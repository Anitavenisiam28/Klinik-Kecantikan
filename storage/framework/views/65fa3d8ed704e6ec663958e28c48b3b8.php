

<?php $__env->startSection('content'); ?>

<style>
.card-layanan {
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(255,105,180,0.2);
    transition: 0.3s;
    background: #fff;
}

.card-layanan:hover {
    transform: translateY(-10px);
}

.card-layanan img {
    width: 100%;
    height: 220px;
    object-fit: cover;
}

.btn-pink {
    background: #ff69b4;
    color: white;
    border-radius: 20px;
}

.btn-pink:hover {
    background: #ff1493;
}
</style>

<h2 class="text-center text-danger">💎 List Layanan Glow Beauty</h2>

<div class="row mt-4">

<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<div class="col-md-4 mb-4">

    <div class="card-layanan">

        <img src="<?php echo e(asset('images/'.$item->gambar)); ?>">

        <div class="p-3 text-center">

            <h5><?php echo e($item->nama); ?></h5>
            <p>Rp <?php echo e($item->harga); ?></p>

            <a href="/layanan/<?php echo e($item->id); ?>/detail" class="btn btn-pink btn-sm">
                Lihat Detail
            </a>

        </div>

    </div>

</div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_kecantikan\klinik_kecantikan\resources\views/layanan/index.blade.php ENDPATH**/ ?>