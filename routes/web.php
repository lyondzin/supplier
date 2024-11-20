<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\barang_masukController;
use App\http\Controllers\barang_keluarController;
use App\http\Controllers\barang_pinjamController;

Route::get('/', function () {
   return view('home');
});
// Rute untuk menampilkan semua data suplier
Route::get('/suplier', [SuplierController::class, 'index'])->name('suplier.index');
// Rute untuk menampilkan form membuat suplier baru

Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
// Rute untuk menambahkan data suplier baru
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
// Route untuk menampilkan form edit
Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');
// Route untuk mengupdate data supplier
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
// Route untuk menghapus data supplier
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');

// barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/{barang}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/{barang}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/{barang}', [BarangController::class, 'destroy'])->name('barang.destroy');

Route::get('/barang_masuk', [barang_masukController::class, 'index'])->name('barang_masuk.index');
Route::get('/barang_masuk/create', [barang_masukController::class, 'create'])->name('barang_masuk.create');
Route::post('/barang_masuk', [barang_masukController::class, 'store'])->name('barang_masuk.store');
Route::get('/barang_masuk/{barang_masuk}', [barang_masukController::class, 'edit'])->name('barang_masuk.edit');
Route::put('/barang_masuk/{barang_masuk}', [barang_masukController::class, 'update'])->name('barang_masuk.update');
Route::delete('/barang_masuk/{barang_masuk}', [barang_masukController::class, 'destroy'])->name('barang_masuk.destroy');

Route::get('/barang_keluar', [barang_keluarController::class, 'index'])->name('barang_keluar.index');
Route::get('/barang_keluar/create', [barang_keluarController::class, 'create'])->name('barang_keluar.create');
Route::post('/barang_keluar', [barang_keluarController::class, 'store'])->name('barang_keluar.store');
Route::get('/barang_keluar/{barang_keluar}', [barang_keluarController::class, 'edit'])->name('barang_keluar.edit');
Route::put('/barang_keluar/{barang_keluar}', [barang_keluarController::class, 'update'])->name('barang_keluar.update');
Route::delete('/barang_keluar/{barang_keluar}', [barang_keluarController::class, 'destroy'])->name('barang_keluar.destroy');

Route::get('/barang_pinjam', [barang_pinjamController::class, 'index'])->name('barang_pinjam.index');
Route::get('/barang_pinjam/create', [barang_pinjamController::class, 'create'])->name('barang_pinjam.create');
Route::post('/barang_pinjam', [barang_pinjamController::class, 'store'])->name('barang_pinjam.store');
Route::get('/barang_pinjam/{barang_pinjam}', [barang_pinjamController::class, 'edit'])->name('barang_pinjam.edit');
Route::put('/barang_pinjam/{barang_pinjam}', [barang_pinjamController::class, 'update'])->name('barang_pinjam.update');
Route::delete('/barang_pinjam/{barang_pinjam}', [barang_pinjamController::class, 'destroy'])->name('barang_pinjam.destroy');