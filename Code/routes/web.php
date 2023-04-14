<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\UpdateProfilInformationController;

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

//Menampilkan apa yang bisa dilihat oleh user sebelum login
Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// proses login
Auth::routes();
// Menampilkan apa yang bisa dilihat setelah user login 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home_login'])->name('home_login');

// Menampilkan Profil Desa
Route::get('/profildesa', [App\Http\Controllers\ProfilDesaController::class, 'profil_desa'])->name('profil_desa');

// Menampilkan Settings Profile
Route::get('/profiluser', [App\Http\Controllers\ProfilController::class, 'profil'])->name('profil');

// Menampilkan Contact Us Controller
Route::get('/contactus',[ContactUsController::class, 'contactus'])->name('contactus');

// Edit Profile

Route::get('/profile',[UpdateProfilInformationController::class,'show_profile'])->name('show_profile');
Route::post('/profile',[UpdateProfilInformationController::class,'edit_profile'])->name('edit_profile');

