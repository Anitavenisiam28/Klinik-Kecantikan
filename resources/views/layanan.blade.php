@extends('layouts.layout')

@section('content')

<style>
.layanan {
    margin-top: 40px;
}

.card-layanan {
    background: white;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(255,105,180,0.2);
    transition: 0.4s;
    height: 100%;
}

.card-layanan:hover {
    transform: translateY(-10px);
}

/* GAMBAR */
.card-layanan img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    transition: 0.4s;
}

.card-layanan:hover img {
    transform: scale(1.1);
}

.card-body {
    padding: 20px;
    text-align: center;
    display: flex;
    flex-direction: column;
}

.card-body h4 {
    color: #d63384;
}

.title {
    text-align: center;
    color: #d63384;
    font-weight: bold;
}

/* BUTTON */
.btn-pink {
    background: linear-gradient(90deg, #ff69b4, #ff1493);
    color: white;
    border-radius: 25px;
    padding: 8px 20px;
    text-decoration: none;
    margin-top: auto;
}

.btn-pink:hover {
    transform: scale(1.05);
    color: white;
}
</style>

<h2 class="title">💎 Layanan Kecantikan Kami</h2>

<div class="row layanan">

    <!-- FACIAL -->
    <div class="col-md-4 mb-4">
        <div class="card-layanan d-flex flex-column">
            <img src="data:image/jpeg;base64,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" alt="Facial">
            <div class="card-body">
                <h4>Facial Treatment</h4>
                <p>Perawatan wajah untuk kulit bersih dan glowing ✨</p>
                <a href="/layanan/1" class="btn btn-pink">🔍 Lihat Detail</a>
            </div>
        </div>
    </div>

    <!-- ACNE -->
    <div class="col-md-4 mb-4">
        <div class="card-layanan d-flex flex-column">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSd0bwHazwaG1Q2qNRjSCmKEq9MgjpCnJCIw&s" alt="Acne">
            <div class="card-body">
                <h4>Acne Treatment</h4>
                <p>Mengatasi jerawat dan bekasnya secara efektif</p>
                <a href="/layanan/2" class="btn btn-pink">🔍 Lihat Detail</a>
            </div>
        </div>
    </div>

    <!-- WHITENING -->
    <div class="col-md-4 mb-4">
        <div class="card-layanan d-flex flex-column">
            <img src="https://images.alodokter.com/dk0z4ums3/image/upload/v1657252656/attached_image/7-cara-membuat-wajah-glowing-dengan-bahan-alami.jpg" alt="Whitening">
            <div class="card-body">
                <h4>Whitening Treatment</h4>
                <p>Kulit cerah glowing alami 💖</p>
                <a href="/layanan/3" class="btn btn-pink">🔍 Lihat Detail</a>
            </div>
        </div>
    </div>

    <!-- LASER -->
    <div class="col-md-4 mb-4">
        <div class="card-layanan d-flex flex-column">
            <img src="https://calystaskincare.co.id/wp-content/uploads/2025/11/Artboard-2.jpg" alt="Laser">
            <div class="card-body">
                <h4>Laser Treatment</h4>
                <p>Menghilangkan noda hitam dan memperbaiki kulit</p>
                <a href="/layanan/4" class="btn btn-pink">🔍 Lihat Detail</a>
            </div>
        </div>
    </div>

    <!-- ANTI AGING -->
    <div class="col-md-4 mb-4">
        <div class="card-layanan d-flex flex-column">
            <img src="data:image/jpeg;base64,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" alt="Anti Aging">
            <div class="card-body">
                <h4>Anti Aging</h4>
                <p>Mengurangi kerutan dan menjaga kulit tetap muda</p>
                <a href="/layanan/5" class="btn btn-pink">🔍 Lihat Detail</a>
            </div>
        </div>
    </div>

    <!-- SPA -->
    <div class="col-md-4 mb-4">
        <div class="card-layanan d-flex flex-column">
            <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874" alt="Spa">
            <div class="card-body">
                <h4>Body Spa</h4>
                <p>Relaksasi tubuh untuk kesehatan dan kecantikan</p>
                <a href="/layanan/6" class="btn btn-pink">🔍 Lihat Detail</a>
            </div>
        </div>
    </div>

</div>

@endsection