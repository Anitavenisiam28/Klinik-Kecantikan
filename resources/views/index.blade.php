@extends('layouts.layout')

@section('content')

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

@foreach($data as $item)

<div class="col-md-4 mb-4">

    <div class="card-layanan">

        <img src="{{ asset('images/'.$item->gambar) }}">

        <div class="p-3 text-center">

            <h5>{{ $item->nama }}</h5>
            <p>Rp {{ $item->harga }}</p>

            <a href="/layanan/{{ $item->id }}/detail" class="btn btn-pink btn-sm">
                Lihat Detail
            </a>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection
