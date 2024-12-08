<?php

use App\Http\Controllers\AdminRouteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserRouteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/hello', function () {
    return view('home');
});

Route::get('/world', function () {
    return view('welcome');
});

//Route::get('/private/{filename}', function ($filename) {})->name('private.image');
Route::get('/private/{filename}', [ImageController::class, 'show'])->name('private.image');

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'user.access:admin'])->group(function () {

    Route::get('/home', function () {
        return redirect('/admin');
    });

    Route::get('/admin', [AdminRouteController::class, 'index'])->name('admin.index');

    Route::get('/admin/pendaftar', [PendaftarController::class, 'index'])->name('admin.pendaftar');
    Route::get('/admin/pendaftar/detail/{id}', [PendaftarController::class, 'show'])->name('admin.pendaftar.detail');

    Route::post('/admin/pendaftar/refused/{nik}', [PendaftarController::class, 'destroy'])->name('admin.pendaftar.refused');

    Route::get('/admin/siswa', [SiswaController::class, 'index'])->name('admin.siswa');
    Route::get('/admin/siswa/detail/{id}', [SiswaController::class, 'show'])->name('admin.siswa.detail');

    Route::post('/admin/siswa/store/{nik}', [SiswaController::class, 'store'])->name('admin.siswa.store');

});

Route::middleware(['auth', 'user.access:user'])->group(function () {

    Route::get('/home', function () {
        return redirect('/dashboard');
    });

    Route::get('/dashboard', [UserRouteController::class, 'index'])->name('user.index');
    Route::get('/pemberitahuan/{status}', [UserRouteController::class, 'pemberitahuan'])->name('user.pemberitahuan');
    Route::get('/pendaftaran', [UserRouteController::class, 'pendaftaran'])->name('user.pendaftaran');

    Route::post('/pendaftaran/store', [PendaftarController::class, 'store'])->name('user.pendaftar.store');
    Route::get('/pendaftaran/edit', [PendaftarController::class, 'edit'])->name('user.pendaftar.edit');
    Route::put('/pendaftaran/update', [PendaftarController::class, 'update'])->name('user.pendaftar.update');
});
