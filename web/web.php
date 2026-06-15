<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PengarangController;
use App\Http\Controllers\PenerbitContoller;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route dengan value
Route::get('/hello', function () {
    return "Hello World!";
});

//Route dengan parameter
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi) {
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
});

//Route redirect views
Route::get('/kabar', function () {
    return view('p3.kondisi');
});

//Route to UserController
Route::get("/user",[UserController::class, 'index']);

//Route to SantriController
Route::get("/santri",[SantriController::class, 'dataSantri']);

// Route untuk halaman profil
Route::get('/profil', [ProfilController::class, 'profil']);

// Route untuk halaman mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');

// Route untuk form tambah mahasiswa
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');


// Route untuk menyimpan data mahasiswa
Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');


// Route untuk halaman kelas
Route::get('/kelas', [KelasController::class, 'kelas']);

// Route untuk nilai
Route::view('/nilai', 'p4.nilai');

// Route untuk daftar_nilai
Route::view('/daftar_nilai', 'p4.daftar_nilai');

// Route untuk app
Route::view('/laravel', 'p4.layout.index');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get(
    '/pegawai', [PegawaiController::class, 'index']
);

Route::resource('pengarang', PengarangController::class);
Route::resource('penerbit', PenerbitController::class);
Route::resource('kategori', KategoriController::class);
Route::resource('buku', BukuController::class);
