<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\admin\ProdukController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middlseware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'Home']);

Route::group(['prefix' => 'user/'], function () {
    Route::get("daftar", [UserController::class, "Daftar"]);
    Route::post("Proses-Daftar", [UserController::class, "ProsesDaftar"]);
    Route::get("login", [UserController::class, "Login"]);
    Route::post("Proses-Login", [UserController::class, "ProsesLogin"]);
    Route::get("logout", [UserController::class, "Logout"]);
    Route::get('user',[UserController::class, 'UserView']);


});

Route::group(['prefix' => 'Barang/'], function () {
    Route::get("Detail/{id}", [DetailController::class, "Detail"]);
    Route::post("pesan/{id}", [DetailController::class, "PesananDetail"]);
    Route::get("cekout", [DetailController::class, "CekOut"]);
    Route::delete("delete/{id}", [DetailController::class, "DeleteKeranjang"]);
    Route::get("konfirmasi", [DetailController::class, "Konfirmasi"]);
});


//untuk tabel barang
Route::group(['prefix' => 'Produk/'], function () {
    Route::get("view", [ProdukController::class, "ProdukView"])->name('produk.view');
    Route::get("tambah", [ProdukController::class, "ProdukAdd"])->name('produk.add');
    Route::post("proses-tambah", [ProdukController::class, "ProdukStore"])->name('produk.store');
    Route::get("edit/{id}", [ProdukController::class, "ProdukEdit"])->name('produk.edit');
    Route::post("proses-edit/{id}", [ProdukController::class, "ProdukUpdate"])->name('produk.store');
    Route::get("delete/{id}", [ProdukController::class, "ProdukDelete"])->name('produk.delete');


});


