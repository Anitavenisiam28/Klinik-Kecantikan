

<?php $__env->startSection('content'); ?>

<style>
.kontak-box {
    display: flex;
    gap: 30px;
}

.kontak-info {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 10px #ddd;
}

.kontak-form {
    flex: 1;
    background: white;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 10px #ddd;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 10px;
    border-radius: 10px;
    border: 1px solid #ccc;
}

button {
    margin-top: 15px;
    padding: 10px;
    width: 100%;
    background: #ff69b4;
    color: white;
    border: none;
    border-radius: 10px;
}

@media(max-width:768px){
    .kontak-box {
        flex-direction: column;
    }
}
</style>

<h2>Kontak Kami</h2>

<div class="kontak-box">

    <!-- INFO -->
    <div class="kontak-info">
        <p><b>Alamat:</b> Jl. Cantik No.1</p>
        <p><b>WhatsApp:</b> 08123456789</p>
        <p><b>Email:</b> glowbeauty@gmail.com</p>
    </div>

    <!-- FORM -->
    <div class="kontak-form">
        <form>
            <input type="text" placeholder="Nama">
            <input type="email" placeholder="Email">
            <textarea rows="5" placeholder="Pesan"></textarea>
            <button type="submit">Kirim</button>
        </form>
    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\klinik_kecantikan\klinik_kecantikan\resources\views/kontak.blade.php ENDPATH**/ ?>