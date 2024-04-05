<?php

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

/* ---------- LOGIN ---------- */

// Route::get('/login', [AuthController::class, 'index'])->name('login');
// Route::post('/loginuser', [AuthController::class, 'loginuser'])->name('loginuser');

/* ---------- REGISTER ---------- */
// Route::get('/register', [AuthController::class, 'register'])->name('register');
// Route::post('/registeruser', [AuthController::class, 'registeruser'])->name('registeruser');

/* ---------- LOGOUT ---------- */
// Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

/* ---------- HALAMAN DEPAN ADMIN ---------- */

Route::get('/', function () {
    return view('halaman_depan_admin.index');
})->name('halaman_depan');

/* ---------- MIDDLEWARE ---------- */
Route::group(['prefix' => 'admin', 'middleware' => ['auth'], 'as' => 'admin.'], function () {
    /* ---------- DASHBOARD ADMIN ---------- */
    // Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});


// Route::get('/', function () {
//     return view('welcome');
// });

/* ------------------------------------------------
---------------- HALAMAN PENGUNJUNG ----------------
--------------------------------------------------- */

/* ---------- Halaman Awal ---------- */
Route::get('/Home', function () {
    return view('halaman_pengunjung.halaman-awal');
});

/* ---------- Halaman Info Wisata ---------- */
Route::get('/Info-Wisata', function () {
    return view('halaman_pengunjung.info-wisata');
});

/* ---------- Info Wisata Pantai Pangandaran ---------- */
Route::get('/Pantai-Pangandaran', function () {
    return view('halaman_pengunjung.pantai-pangandaran');
});
