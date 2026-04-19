@extends('layouts.app')

@section('content')

<div class="card shadow">
    <img src="{{ asset('images/' . $article['gambar']) }}" class="card-img-top">

    <div class="card-body">
        <h2>{{ $article['judul'] }}</h2>

        <p>{{ $article['isi'] }}</p>

        <a href="/artikel" class="btn btn-secondary">Kembali</a>
    </div>
</div>

@endsection