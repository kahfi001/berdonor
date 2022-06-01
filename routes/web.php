<?php

use App\Models\User;
use App\Models\Donor;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardArtikelController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Riwayat;
use App\Models\Stokdarah;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show']);

Route::get('/', [HomeController::class, 'index']);
// Route::get('/', [HomeController::class, 'show']);

// Route::get('/', function (Stokdarah $stokdarah) {
//     return view('home', [
//         "tittle" => "Home",
//         "stokdarah" => $stokdarah
//     ]);
// });
// Route::get('/donor', function () {
//     return view('donor', [
//         "tittle" => "Donor Darah",
//         "active" => "donor"
//     ]);
// });
// Route::get('/artikel', function () {
//     return view('artikel', [
//         "tittle" => "Artikel"
//     ]);
// });

Route::get('/tentangkami', function () {
    return view('tentangkami', [
        "tittle" => "Tentang Kami",
        "active" => "Tentang kami"
    ]);
});
Route::get('/faq', function () {
    return view('faq', [
        "tittle" => "FAQ",
        "active" => "FAQ"
    ]);
});
// Route::get('/riwayat', function () {
//     return view('riwayat', [
//         "tittle" => "riwayat",
//         "active" => "riwayat"
//     ]);
// });

// Route::get('/transfusi', function () {
//     return view('transfusi', [
//         "tittle" => "Transfusi",
//         "active" => "Transfusi"
//     ]);
// });

Route::get('/riwayat/{donor:id}', [DonorController::class, 'show']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/authors/{author:username}', function (User $author) {
    return view('artikel', [
        "tittle" => "User Artikel",
        "active" => "artikel",
        'artikel' => $author->artikel->load('author')
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/artikel/checkSlug', [DashboardArtikelController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/artikel', DashboardArtikelController::class)->middleware('auth');

// Route::get('/riwayat', function (Donor $donor) {
//     return view('riwayat', [
//         "tittle" => "Riwayat",
//         "active" => "Riwayat",
//         'donor' => $donor
//     ]);
// });



Route::resource('donor', DonorController::class)->middleware('auth');
