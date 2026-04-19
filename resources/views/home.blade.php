@extends('layouts.layout')

@section('content')

<style>

/* BACKGROUND */
body {
    background: linear-gradient(135deg, #ffe4ec, #fff0f5);
}

/* HERO */
.hero {
    padding: 80px;
    border-radius: 25px;
    background: linear-gradient(135deg, #ff9ecb, #ff69b4);
    color: white;
    text-align: center;
}

/* TITLE (GLOW + ANIMASI) */
.hero-title {
    font-size: 45px;
    font-weight: bold;

    text-shadow: 0 0 10px rgba(255,255,255,0.8),
                 0 0 20px rgba(255,105,180,0.8),
                 0 0 40px rgba(255,20,147,0.8);

    min-height: 60px;
}

/* SUBTITLE */
.hero-subtitle {
    font-size: 20px;
    margin-top: 10px;
    animation: fadeIn 2s ease;
}

/* BUTTON */
.btn-anime {
    background: white;
    color: #ff69b4;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: bold;
    transition: 0.3s;
    animation: pulse 2s infinite;
}

.btn-anime:hover {
    background: #ff1493;
    color: white;
    transform: scale(1.1);
}

/* CURSOR */
.cursor {
    display: inline-block;
    width: 3px;
    background: white;
    margin-left: 5px;
    animation: blink 1s infinite;
}

/* CARD */
.card-anime {
    background: rgba(255,255,255,0.7);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    padding: 25px;
    transition: 0.4s;
    text-align: center;
}

.card-anime:hover {
    transform: translateY(-15px) scale(1.03);
}

/* TITLE SECTION */
.section-title {
    text-align: center;
    margin-top: 60px;
    font-weight: bold;
    color: #d63384;
}

/* ANIMASI */
@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes pulse {
    0% {box-shadow: 0 0 0 0 rgba(255,255,255,0.7);}
    70% {box-shadow: 0 0 0 20px rgba(255,255,255,0);}
    100% {box-shadow: 0 0 0 0 rgba(255,255,255,0);}
}

@keyframes blink {
    0% {opacity: 1;}
    50% {opacity: 0;}
    100% {opacity: 1;}
}

</style>

<!-- HERO -->
<div class="hero">

    <!-- TEXT GERAK -->
    <h1 class="hero-title">
        <span id="typing"></span>
    </h1>

    <p class="hero-subtitle">
        Discover your glow, elevate your beauty ✨
    </p>

    <a href="/layanan" class="btn btn-anime mt-3">
        Jelajahi Kecantikan
    </a>

</div>

<!-- LAYANAN -->
<h2 class="section-title">💎 Layanan Premium</h2>

<div class="row mt-4">

    <div class="col-md-4">
        <div class="card-anime">
            <h4>Facial Glow</h4>
            <p>Kulit bersih dan bercahaya ✨</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-anime">
            <h4>Acne Treatment</h4>
            <p>Mengatasi jerawat secara efektif</p>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card-anime">
            <h4>Whitening</h4>
            <p>Kulit cerah glowing alami</p>
        </div>
    </div>

</div>

<!-- TESTIMONI -->
<h2 class="section-title">🌟 Testimoni</h2>

<div class="mt-4">

    <div class="card-anime mb-3">
        "Kulit saya jadi glowing banget 😍" - Siti
    </div>

    <div class="card-anime">
        "Pelayanan terbaik dan tempatnya aesthetic!" - Rina
    </div>

</div>

<!-- CTA -->
<div class="hero mt-5">

    <h2>💖 Yuk Glow Up Sekarang!</h2>
    <p>Perawatan terbaik menunggu kamu</p>

    <a href="/kontak" class="btn btn-anime">
        Booking Sekarang
    </a>

</div>
<div class="text-center mt-4">

    <a href="/layanan" class="btn btn-primary">
        📋 List Layanan
    </a>

    <a href="/layanan/1" class="btn btn-danger">
        🔍 Detail Layanan
    </a>

</div>

<!-- JAVASCRIPT TEXT ANIMATION -->
<script>
const text = "Glow Beyond Beauty ✨";
let i = 0;

function typingEffect() {
    if (i < text.length) {
        document.getElementById("typing").innerHTML += text.charAt(i);
        i++;
        setTimeout(typingEffect, 80);
    } else {
        document.getElementById("typing").innerHTML += '<span class="cursor"></span>';
    }
}

typingEffect();
</script>

@endsection
