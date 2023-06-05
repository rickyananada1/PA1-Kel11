<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisiMisiController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\StrukturDesaController;
use App\Http\Controllers\SejarahGaleriController;
use App\Http\Controllers\StrukturVisiMisiController;


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
    return view('home',compact('abouts','teams'));
});





// FRONTEND BEFORE LOGIN

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

// Profil Desa (Struktur Desa)
Route::get('home/struktur',[StrukturDesaController::class,'HomeStruktur'])->name('home.struktur');
Route::get('add/struktur',[StrukturDesaController::class,'AddStruktur'])->name('add.struktur');
Route::post('store/struktur',[StrukturDesaController::class,'StoreStruktur'])->name('store.struktur');
Route::get('struktur/edit/{id}',[StrukturDesaController::class,'Edit']);
Route::post('struktur/update/{id}',[StrukturDesaController::class,'Update']);
Route::get('struktur/delete/{id}',[StrukturDesaController::class,'Delete']);

// Profil Desa (Visi & Misi)
Route::get('home/visimisi',[VisiMisiController::class,'HomeVisiMisi'])->name('home.visimisi');
Route::get('add/visimisi',[VisiMisiController::class,'AddVisiMisi'])->name('add.visimisi');
Route::post('store/visimisi',[VisiMisiController::class,'StoreVisiMisi'])->name('store.visimisi');
Route::get('visimisi/edit/{id}',[VisiMisiController::class,'Edit']);
Route::post('visimisi/update/{id}',[VisiMisiController::class,'Update']);
Route::get('visimisi/delete/{id}',[VisiMisiController::class,'Delete']);

// Profil Desa (Galeri)
Route::get('home/galeri',[GaleriController::class,'HomeGaleri'])->name('home.galeri');
Route::get('add/galeri',[GaleriController::class,'AddGaleri'])->name('add.galeri');
Route::post('store/galeri',[GaleriController::class,'StoreGaleri'])->name('store.galeri');
Route::get('galeri/edit/{id}',[GaleriController::class,'Edit']);
Route::post('galeri/update/{id}',[GaleriController::class,'Update']);
Route::get('galeri/delete/{id}',[GaleriController::class,'Delete']);

// Destinasi Wisata
Route::get('home/destinasi',[DestinasiController::class,'HomeDestinasi'])->name('home.destinasi');
Route::get('add/destinasi',[DestinasiController::class,'AddDestinasi'])->name('add.destinasi');
Route::post('store/destinasi',[DestinasiController::class,'StoreDestinasi'])->name('store.destinasi');
Route::get('destinasi/edit/{id}',[DestinasiController::class,'Edit']);
Route::post('destinasi/update/{id}',[DestinasiController::class,'Update']);
Route::get('destinasi/delete/{id}',[DestinasiController::class,'Delete']);

// Sejarah Controller
Route::get('home/sejarah',[SejarahController::class,'HomeSejarah'])->name('home.sejarah');
Route::get('add/sejarah',[SejarahController::class,'AddSejarah'])->name('add.sejarah');
Route::post('store/sejarah',[SejarahController::class,'StoreSejarah'])->name('store.sejarah');
Route::get('sejarah/edit/{id}',[SejarahController::class,'Edit']);
Route::post('sejarah/update/{id}',[SejarahController::class,'Update']);
Route::get('sejarah/delete/{id}',[SejarahController::class,'Delete']);

// Pengelolaan Sampah (Lokasi TPA)
Route::get('home/lokasi',[PengelolaanSampahController::class,'HomeLokasi'])->name('home.pengelolaansampah');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        // Cek apakah user adalah admin atau bukan
        if (Auth::user()->is_admin) {
            // Jika user adalah admin, tampilkan admin.index
            $users = DB::table('users')->where('is_admin', true)->get();
            return view('admin.index', compact('users'));
        } else {
            // Jika user bukan admin, tampilkan user.index
            $users = DB::table('users')->get();
            return view('users.index', compact('users'));
        }
      
    
    })->name('home');


    Route::get('/destinasi',function(){
        $destinasis = DB::table('destinasis')->get();
        return view('users.destinasi',compact('destinasis'));
    })->name('destinasi');
  
    Route::get('/destinasi/pantai',function(){
        $destinasis = DB::table('destinasis')->get();
        return view('users.destinasi.pantai_destinasi',compact('destinasis'));
    })->name('destinasis');

    Route::get('/struktur/desa', function() {
        $struktur_desas = DB::table('struktur_desas')->get();
        return view('users.struktur_desa', compact('struktur_desas'));
    })->name('struktur_desas');

    Route::get('/visimisi/desa', function() {
        $visimisis = DB::table('visi_misis')->get();
        return view('users.visimisi', compact('visimisis'));
    })->name('visimisis');

    Route::get('/sejarah/desa', function() {
        $sejarahs = DB::table('sejarahs')->get();
        return view('users.sejarah', compact('sejarahs'));
    })->name('sejarahs');
 

    Route::get('/galeri/desa', function() {
        $galeris = DB::table('galeris')->get();
        return view('users.galeri', compact('galeris'));
    })->name('galeris');
 

    // Route Forums
    Route::get('/forum',[ForumController::class,'index'])->name('forums');
    Route::post('/forum/create',[ForumController::class,'create'])->name('forum.create');
    Route::get('/forum/{forum}/view', [ForumController::class, 'view'])->name('forum.view');
    Route::post('/forum/{forum}/view', [ForumController::class, 'postkomentar']);

    Route::delete('/komentar/{id}', [ForumController::class,'destroy'])->name('komentar.destroy');


    Route::get('/komentar/{id}/edit', [ForumController::class,'edit'])->name('komentar.edit');
    Route::put('/komentar/{id}', [ForumController::class,'update'])->name('komentar.update');


    Route::get('/forum/{forum}/edit', [ForumController::class,'editUtama'])->name('forum.edit');
    Route::put('/forum/{forum}', [ForumController::class,'updateUtama'])->name('forum.update');
    Route::delete('/forum/{forum}', [ForumController::class,'HapusUtama'])->name('forum.destroy');

    Route::get('/forums/{forum}/edit', [ForumController::class,'editFORUM'])->name('forum.edit.utama');
    Route::put('/forums/{forum}', [ForumController::class,'updateFORUM'])->name('forum.update.utama');



    // Contact Page
    Route::get('/contact',[ContactController::class,'Contact'])->name('contact');
    Route::post('/contact/form',[ContactController::class,'ContactForm'])->name('contact.form');






});

Route::view('/destinasi/pantai', 'users.destinasi.pantai_destinasi')->name('pantai_destinasi');
Route::view('/pengelolaan/sampah', 'users.pengelolaan_sampah')->name('pantai_destinasi');
// Route::view('/struktur/desa', 'users.struktur_desa')->name('struktur_desa');

// Admin contact
Route::get('/admin/contact',[ContactController::class,'AdminContact'])->name('admin.contact');
Route::get('/admin/add/contact',[ContactController::class,'AdminAddContact'])->name('add.contact');
Route::post('/admin/store/contact',[ContactController::class,'AdminStoreContact'])->name('store.contact');
Route::get('/admin/message',[ContactController::class,'AdminMessage'])->name('admin.message');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

});


 


