<?php

use Illuminate\Support\Facades\Route;

/* DATA LAYANAN (GLOBAL) */
$layanan = [
    'facial' => [
        'nama' => 'Facial Treatment',
        'deskripsi' => 'Membersihkan wajah dari kotoran dan komedo.',
        'detail' => 'Facial Treatment membantu mengangkat komedo, mengurangi minyak berlebih, serta membuat kulit wajah lebih segar dan cerah.'
    ],
    'acne' => [
        'nama' => 'Acne Treatment',
        'deskripsi' => 'Perawatan kulit berjerawat.',
        'detail' => 'Acne Treatment fokus mengurangi jerawat aktif, meredakan peradangan, dan memperbaiki tekstur kulit.'
    ],
    'whitening' => [
        'nama' => 'Whitening Treatment',
        'deskripsi' => 'Mencerahkan kulit wajah.',
        'detail' => 'Whitening Treatment membantu meratakan warna kulit dan membuat wajah tampak lebih glowing dan sehat.'
    ],
    'body' => [
        'nama' => 'Body Treatment',
        'deskripsi' => 'Perawatan seluruh tubuh.',
        'detail' => 'Body Treatment membuat kulit tubuh lebih halus, lembut, dan sehat secara menyeluruh.'
    ],
];

/* HOME */
Route::get('/', function () {
    return view('home');
});

/* ABOUT */
Route::get('/about', function () {
    return view('about');
});

/* LIST LAYANAN */
Route::get('/layanan', function () use ($layanan) {
    return view('layanan', compact('layanan'));
});

/* DETAIL LAYANAN */
Route::get('/layanan/detail/{key}', function ($key) use ($layanan) {

    if (!isset($layanan[$key])) {
        abort(404);
    }

    return view('detail-layanan', [
        'item' => $layanan[$key]
    ]);
});

/* KONTAK */
Route::get('/kontak', function () {
    return view('kontak');
});




use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ServiceController;

Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/layanan/{id}', [ServiceController::class, 'show']);

