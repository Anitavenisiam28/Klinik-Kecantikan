@extends('layouts.layout')

@section('content')

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

    <span class="badge">{{ $item['kategori'] }}</span>

    <h2 class="mt-3">{{ $item['nama'] }}</h2>

    <img src="{{ asset($item['gambar']) }}" alt="">

    <p>{{ $item['detail'] }}</p>

    <a href="/layanan" class="btn btn-secondary mt-3">
        ← Kembali
    </a>

</div>

@endsection