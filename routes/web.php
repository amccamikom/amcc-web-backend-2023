<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Models\Buku;
use app\Models\Test;

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
    return view('welcome');
});
Route::get('/halaman-kamu', function () {
    return 'Ahoy! Ini halaman kamu!';
});

Route::get('/hello/{name}', function ($name) {
    return 'Hello ' . $name . ', selamat datang di pulau misteri kami!';
});

Route::get('/welcome', function () {
    //
})->name('welcome');

Route::get('/buku', function () {
    return view('buku', [
        'books' => Buku::get_all()
    ]);
});

Route::get('/test', [TestController::class, 'index']);
