<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\obat\ObatController;

Route::get('/', [HomeController::class,'index'])->name('/');
Route::get('register',[AuthController::class,'daftar'])->name('register');
Route::post('register.post',[AuthController::class,'register'])->name('register.post');
Route::get('Hapus',[AuthController::class,'Hapus'])->name('Hapus');

// Route::get('Home', [HomeController::class,'index'])->name('Home');
Route::get('login',[AuthController::class, 'loginpage'])->name('login');
Route::post('login.post',[AuthController::class, 'login'])->name('login.post');
Route::get('Hapus',[AuthController::class,'Hapus'])->name('Hapus');

Route::get('/',[ObatController::class,'index'])->name('/');
Route::get('obat',[AuthController::class, 'obat'])->name('obat');
Route::post('obat.post',[AuthController::class, 'obat'])->name('obat.post');
Route::post('tambah.save',[HomeController::class, 'save'])->name('tambah.save');
Route::get('Hapus',[AuthController::class,'Hapus'])->name('Hapus');



Route::get('home',[HomeController::class,'index'])->name('home');
Route::get('tambah',[HomeController::class,'tambah'])->name('tambah');
// Route::post('tambah.save',[HomeController::class, 'save'])->name('save');
Route::get('edit.data/{id}',[HomeController::class, 'edit'])->name('edit');
Route::post('update.data/{id}',[HomeController::class, 'update'])->name('update');
Route::get('hapus.data/{id}',[HomeController::class, 'hapus'])->name('hapus');


