<?php

use App\Http\Controllers\ArtikelController;
use App\Models\Artikel;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ArtikelController::class, 'index']);
Route::get('/artikel/{artikel:slug}', [ArtikelController::class, 'show']);

Route::get('/donor', function () {
    return view('donor', [
        "tittle" => "Donor Darah"
    ]);
});
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
Route::get('/sign-in', function () {
    return view('sign-in', [
        "tittle" => "Sign-in"
    ]);
});

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
