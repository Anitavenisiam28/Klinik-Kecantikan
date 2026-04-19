

<?php $__env->startSection('content'); ?>

<style>

/* BACKGROUND */
.about-section {
    margin-top: 40px;
}

/* GLASS CARD */
.about-card {
    background: rgba(255,255,255,0.8);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(255,105,180,0.2);
}

/* IMAGE */
.about-img {
    width: 100%;
    border-radius: 20px;
    transition: 0.5s;
}

.about-img:hover {
    transform: scale(1.05);
}

/* TITLE */
.about-title {
    font-weight: bold;
    color: #d63384;
}

/* LIST ICON */
.about-list p {
    margin: 8px 0;
    font-size: 16px;
}

/* ANIMASI */
.fade-in {
    animation: fadeIn 1.5s ease;
}

.slide-left {
    animation: slideLeft 1.5s ease;
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes slideLeft {
    from {transform: translateX(50px); opacity: 0;}
    to {transform: translateX(0); opacity: 1;}
}

</style>

<div class="container about-section">

    <div class="row align-items-center">

        <!-- GAMBAR -->
        <div class="col-md-6 fade-in">
           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRCoT9NmXnre5HdnjN9-84N-Z9gIF1w2OM1fw&s"
     class="about-img"
     alt="Beauty Woman">
     
        </div>

        <!-- TEKS -->
        <div class="col-md-6 slide-left">
            <div class="about-card">

               <h2 class="about-title">✨ About Glow Beauty</h2>

<p>
    Di Glow Beauty, kita bantu kamu buat tampil lebih glowing tanpa ribet ✨  
    Mulai dari perawatan wajah sampai body care, semuanya ada di sini!
</p>

<div class="about-list">
    <p>💖 Berdiri sejak 2024, trusted banget 👍</p>
    <p>💖 Tim profesional, bukan kaleng-kaleng 😎</p>
    <p>💖 Teknologi modern & pastinya aman</p>
    <p>💖 Suasana nyaman, cocok buat self-care time 💆‍♀️</p>

            </div>
        </div>

    </div>

    <!-- VISI MISI -->
    <div class="row mt-5">

        <div class="col-md-6 fade-in">
            <div class="about-card text-center">
                <h4>🌸 Visi</h4>
                <p>Menjadi klinik kecantikan terbaik dengan pelayanan berkualitas tinggi.</p>
            </div>
        </div>

        <div class="col-md-6 slide-left">
            <div class="about-card text-center">
                <h4>💎 Misi</h4>
                <p>Memberikan perawatan terbaik dengan teknologi modern dan harga terjangkau.</p>
            </div>
        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_kecantikan\klinik_kecantikan\resources\views/about.blade.php ENDPATH**/ ?>