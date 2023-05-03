<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SejarahGaleriController;
use App\Http\Controllers\StrukturVisiMisiController;
use App\Http\Controllers\contactuscontroller;


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
    $abouts = DB::table('home_abouts')->first(); 
    
    $teams = DB::table('teams')->get();

    $news = DB::table('news')->get();
    
    return view('home',compact('abouts','teams','news'));
});

// FRONT END BEFORE LOGIN

// Slider
Route::get('home/slider',[SliderController::class,'HomeSlider'])->name('home.slider');
Route::get('add/slider',[SliderController::class,'AddSlider'])->name('add.slider');
Route::post('store/slider',[SliderController::class,'StoreSlider'])->name('store.slider');
Route::get('slider/edit/{id}',[SliderController::class,'Edit']);
Route::post('slider/update/{id}',[SliderController::class,'Update']);
Route::get('slider/delete/{id}',[SliderController::class,'Delete']);

// About
Route::get('home/about',[AboutController::class,'HomeAbout'])->name('home.about');
Route::get('add/about',[AboutController::class,'AddAbout'])->name('add.about');
Route::post('store/about',[AboutController::class,'StoreAbout'])->name('store.about');
Route::get('about/edit/{id}',[AboutController::class,'EditAbout']);
Route::post('about/update/{id}',[AboutController::class,'UpdateAbout']);
Route::get('about/delete/{id}',[AboutController::class,'DeleteAbout']);


// Destination
Route::get('home/team',[TeamController::class,'HomeTeam'])->name('home.team');
Route::get('add/team',[TeamController::class,'AddTeam'])->name('add.team');
Route::post('store/team',[TeamController::class,'StoreTeam'])->name('store.team');
Route::get('team/edit/{id}',[TeamController::class,'Edit']);
Route::post('team/update/{id}',[TeamController::class,'Update']);
Route::get('team/delete/{id}',[TeamController::class,'Delete']);



// News
Route::get('home/news',[NewsController::class,'HomeNews'])->name('home.news');
Route::get('add/ news',[NewsController::class,'AddNews'])->name('add.news');
Route::post('store/news',[NewsController::class,'StoreNews'])->name('store.news');
Route::get('news/edit/{id}',[NewsController::class,'Edit']);
Route::post('news/update/{id}',[NewsController::class,'Update']);
Route::get('news/delete/{id}',[NewsController::class,'Delete']);

// Tampilan User Setelah login

// Profil Desa (Sejarah)
Route::get('home/sejarahgaleri',[SejarahGaleriController::class,'HomeSejarah'])->name('home.profildesa');


// Profil Desa (Struktur)
Route::get('home/struktur',[StrukturVisiMisiController::class,'HomeStruktur'])->name('home.strukturvisimisi');



// Pengelolaan Sampah (Lokasi TPA)
Route::get('home/lokasi',[PengelolaanSampahController::class,'HomeLokasi'])->name('home.pengelolaansampah');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
    
        // Cek apakah user adalah admin atau bukan
        if (Auth::user()->is_admin) {
            // Jika user adalah admin, tampilkan admin.index
            $users = DB::table('users')->where('is_admin', true)->get();
            return view('admin.index',compact('users'));
        } else {
            // Jika user bukan admin, tampilkan user.index
            $users = DB::table('users')->get();
            return view('users.index', compact('users'));
        }
    
    })->name('home');
});

// Admin contactus
Route::get('/admin/contactus',[contactuscontroller::class,'Admincontactus'])->name('admin.contact');

 


