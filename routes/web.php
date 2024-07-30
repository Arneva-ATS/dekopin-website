<?php

use App\Http\Controllers\PengajuanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('pages.beranda.index');
})->name('beranda');

Route::get('/tentang-rki', function () {
    return view('pages.tentang-rki.index');
})->name('tentang-rki');

Route::get('/berita', function () {
    return view('pages.berita.index');
})->name('berita');

Route::get('/kontak', function () {
    return view('pages.kontak.index');
})->name('kontak');

Route::get('/produk', function () {
    // return view('pages.produk.index');
    abort(404);
})->name('produk');

// Route::prefix('tentang-kami')->name('tentang-kami.')->group(function () {
//     Route::get('visi-misi', function () {
//         return view('pages.tentang-kami.visi-misi');
//     })->name('visi-misi');
