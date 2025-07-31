<?php

use App\Http\Controllers\Api\ArtikelDesaController;
use App\Http\Controllers\Api\GaleriController;
use App\Http\Controllers\Api\KategoriController;
use App\Models\ArtikelDesa;
use App\Models\Kategori;
use App\Models\PerangkatDesa;
use App\Models\ProfilDesa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $profil = ProfilDesa::first();
    $categories = Kategori::all(['name']);

    // Kirim data kategori ke view menggunakan compact()
    return view('index', compact(['categories', 'profil']));
})->name('home');

Route::get('/profil', function () {
    $profil_umum = ProfilDesa::first();
    $list_perangkat = PerangkatDesa::all();
    return view('profil', compact(['profil_umum', 'list_perangkat']));
})->name('profil');

Route::get('/potensi-desa-pertanian', function () {
    return view('potensi-pertanian');
})->name('potensi.pertanian');

Route::get('/potensi-desa-UMKM', function () {
    return view('potensi-umkm');
})->name('potensi.umkm');

Route::get('/potensi-desa-wisata', function () {
    return view('potensi-wisata');
})->name('potensi.wisata');

Route::get('/artikel-desa', function () {
    $kategori_all = Kategori::get('name');
    return view('blog', compact('kategori_all'));
})->name('artikel.index');

// Route::get('/artikel-details', function () {
//     $artikel = ArtikelDesa::first();
//     return view('blog-details', compact('artikel'));
// })->name('artikel-details');

// Route untuk detail artikel berdasarkan slug
Route::get('/artikel/{slug}', function ($slug) {
    // Mengambil satu artikel berdasarkan slug
    $artikel = ArtikelDesa::where('slug', '=', $slug)->first();

    // Ambil kategori beserta jumlah artikel yang ada di masing-masing kategori
    $kategori_all = Kategori::withCount('artikelDesas')->get(['name']);

    $artikel_recent = ArtikelDesa::orderBy('date', 'desc')->where('status', '=', 'published')->take(5)->get();

    // Mengecek apakah artikel ditemukan
    if (!$artikel) {
        abort(404); // Mengembalikan 404 jika artikel tidak ditemukan
    }

    return view('blog-details', compact(['artikel', 'kategori_all', 'artikel_recent']));
})->name('artikel.detail');

Route::get('/galeri', function () {
    $categories = Kategori::all(['name']);

    // Kirim data kategori ke view menggunakan compact()
    return view('galeri', compact('categories'));
})->name('galeri');

Route::get('/galeri-details', function () {
    return view('galeri-details');
})->name('galeri-details');

Route::get('/budaya-bakalan', function () {
    return view('budaya-bakalan');
})->name('budaya.bakalan');

Route::get('/budaya-senden', function () {
    return view('budaya-senden');
})->name('budaya.senden');

Route::get('/budaya-ngadisari', function () {
    return view('budaya-ngadisari');
})->name('budaya.ngadisari');

Route::get('//budaya-wringin', function () {
    return view('budaya-wringin');
})->name('budaya.wringin');

Route::get('/kontak', function () {
    $profil_umum = ProfilDesa::first();
    return view('kontak', compact('profil_umum'));
})->name('kontak');


// Routing API
Route::prefix('api')->group(function () {
    Route::get('artikel-desa', [ArtikelDesaController::class, 'index']);
    Route::get('artikel-desa/{slug}', [ArtikelDesaController::class, 'show']);

    Route::get('galeri', [GaleriController::class, 'index']);
});
