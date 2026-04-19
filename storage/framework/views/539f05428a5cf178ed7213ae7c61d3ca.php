

<?php $__env->startSection('content'); ?>

<style>
.detail-container {
    max-width: 1000px;
    margin: auto;
}

/* CARD */
.detail-card {
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    overflow: hidden;
    display: flex;
    align-items: stretch;
    min-height: 420px;
}

/* KIRI & KANAN */
.detail-card .col-md-6 {
    display: flex;
}

/* IMAGE */
.detail-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* CONTENT */
.detail-content {
    padding: 25px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* TITLE */
.detail-title {
    font-weight: bold;
    color: #333;
}

/* PRICE */
.price {
    color: #ff1493;
    font-size: 22px;
    font-weight: bold;
}

/* BADGE */
.badge-soft {
    background: #ffe4ec;
    color: #ff1493;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
}

/* BUTTON */
.btn-book {
    background: linear-gradient(90deg, #ff69b4, #ff1493);
    color: white;
    border-radius: 30px;
    padding: 10px 25px;
    text-decoration: none;
    transition: 0.3s;
}

.btn-book:hover {
    transform: scale(1.05);
    color: white;
}

.btn-back {
    border: 1px solid #ddd;
    border-radius: 30px;
    padding: 10px 25px;
    text-decoration: none;
    color: #555;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .detail-card {
        flex-direction: column;
    }

    .detail-img {
        height: 250px;
    }
}
</style>

<div class="container detail-container mt-5">

    <div class="row detail-card">

        <!-- IMAGE -->
        <div class="col-md-6 p-0">
            <div style="width:100%; height:100%;">
                <img src="https://media.istockphoto.com/id/914478746/id/foto/cantik-wanita-muda-dengan-kulit-bersih-dan-segar-menyentuh-wajah-sendiri-kosmetologi.jpg?s=1024x1024&w=is&k=20&c=dQG1Gh0Rr8-F_Wft_ic3dlkN4sFIXB7-lfglPk0CwVI=">
            </div>
        </div>

        <!-- CONTENT -->
        <div class="col-md-6 detail-content">

            <div>
                <h2 class="detail-title"><?php echo e($data->nama); ?> ✨</h2>

                <span class="badge-soft">Best Treatment</span>

                <p class="mt-3 text-muted">
                    <?php echo e($data->deskripsi); ?>

                </p>

                <hr>

                <p class="price">Rp <?php echo e(number_format($data->harga)); ?></p>

                <p><strong>Durasi:</strong> 60 menit</p>
                <p><strong>Rating:</strong> ⭐⭐⭐⭐☆ (4.5)</p>

                <h5 class="mt-3">Manfaat</h5>
                <ul>
                    <li>✨ Kulit lebih glowing</li>
                    <li>✨ Lebih sehat & bersih</li>
                    <li>✨ Percaya diri meningkat</li>
                </ul>
            </div>

            <!-- BUTTON -->
            <div class="mt-4">
                <a href="/kontak" class="btn-book">
                    Booking Sekarang 💖
                </a>

                <a href="/layanan" class="btn-back ms-2">
                    Kembali
                </a>
            </div>

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_kecantikan\klinik_kecantikan\resources\views/layanan/detail.blade.php ENDPATH**/ ?>