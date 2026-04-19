@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-4">Daftar Artikel</h2>

    <div class="row">
        @foreach ($articles as $article)
        <div class="col-md-4 mb-3">

            <div class="card shadow">

                @if($article->gambar)
                    <img src="{{ asset('images/' . $article->gambar) }}" class="card-img-top">
                @endif

                <div class="card-body">
                    <h5>{{ $article->judul }}</h5>

                    <p>
                        {{ Str::limit($article->isi, 100) }}
                    </p>

                    <a href="{{ url('/artikel/'.$article->id) }}" class="btn btn-primary btn-sm">
                        Baca Selengkapnya
                    </a>
                </div>

            </div>

        </div>
        @endforeach
    </div>

</div>

@endsection