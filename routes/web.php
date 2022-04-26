<?php

use App\Models\User;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});
Route::get('/donor', function () {
    return view('donor', [
        "tittle" => "Donor Darah"
    ]);
});
// Route::get('/artikel', function () {
//     return view('artikel', [
//         "tittle" => "Artikel"
//     ]);
// });

Route::get('/tentangkami', function () {
    return view('tentangkami', [
        "tittle" => "Tentang Kami"
    ]);
});
Route::get('/faq', function () {
    return view('faq', [
        "tittle" => "FAQ"
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/authors/{author:username}', function (User $author) {
    return view('artikel', [
        "tittle" => "User Artikel",
        'artikel' => $author->artikel->load('author')
    ]);
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');



$blog_posts = [
    [
        "tittle" => "Judul Artikel Pertama",
        "author" => "M. Kahfi",
        "slug" => "judul-artikel-pertama",
        "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo animi quia vero? Cum natus eligendi quaerat, placeat veniam debitis nesciunt rerum culpa consectetur asperiores repellat nostrum. Cum eveniet rem quia placeat in totam dignissimos, modi voluptates fugit labore molestiae? Reiciendis, velit aliquam nisi pariatur molestias eaque ipsa odit non dolores nemo repellat vitae officiis magnam ex perferendis recusandae vero voluptas iure assumenda? Iure error quasi numquam exercitationem ex quibusdam odit molestiae accusamus explicabo. Ducimus sint ad ratione quam possimus! Dolorum ipsam numquam at eum consequatur nulla excepturi possimus ab nemo qui nihil nostrum error perspiciatis voluptatem, similique modi! Provident, asperiores?"
    ],
    [
        "tittle" => "Judul Artikel Kedua",
        "slug" => "judul-artikel-kedua",
        "author" => "Wikan",
        "body" => " Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo animi quia vero? Cum natus eligendi quaerat, placeat veniam debitis nesciunt rerum culpa consectetur asperiores repellat nostrum. Cum eveniet rem quia placeat in totam dignissimos, modi voluptates fugit labore molestiae? Reiciendis, velit aliquam nisi pariatur molestias eaque"
    ],
];
