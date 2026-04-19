

<?php $__env->startSection('content'); ?>

<style>
.detail-box {
    max-width: 700px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 10px 25px rgba(255,105,180,0.2);
    text-align: center;
}

.detail-box img {
    width: 100%;
    border-radius: 15px;
    margin-bottom: 20px;
}

.badge {
    background: #ff69b4;
    color: white;
    padding: 5px 10px;
    border-radius: 10px;
}
</style>

<div class="detail-box">

    <span class="badge"><?php echo e($item['kategori']); ?></span>

    <h2 class="mt-3"><?php echo e($item['nama']); ?></h2>

    <img src="<?php echo e(asset($item['gambar'])); ?>" alt="">

    <p><?php echo e($item['detail']); ?></p>

    <a href="/layanan" class="btn btn-secondary mt-3">
        ← Kembali
    </a>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_kecantikan\klinik_kecantikan\resources\views/detail-layanan.blade.php ENDPATH**/ ?>