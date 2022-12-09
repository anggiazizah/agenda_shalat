<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalenderController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\PenggunaController;
// use App\Http\Controllers\SiswaController;
// use App\Http\Controllers\AdminController;
use App\Http\Middleware\Admin;
use App\Http\Middleware\Siswa;






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
    return view('login');
});

// Route::get('/login', function () {
//     return view('login');
// });

Route::post('/postlogin', [ LoginController::class, 'PostLogin'])->name('postlogin');


Route::middleware(['siswa'])->group(function(){
    Route::get('/kalender', [KalenderController::class, 'kalender'])->name('kalender');
    Route::get('/beranda', 'App\Http\Controllers\BerandaController@index');
    Route::get('/beranda', [AgendaController::class, 'beranda'])->name('beranda');
    Route::post('/beranda', [AgendaController::class, 'post'])->name('beranda.post');   
    Route::post('/agenda', [AgendaController::class, 'post'])->name('agenda.post');
    // Route::get('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    // Route::get('/layouts.dashboard', [LoginController::class, 'dashboard'])->name('layouts.dashboard');
    Route::get('/agenda', [AgendaController::class, 'agenda'])->name('agenda');
    // Route::post('/agenda', [AgendaController::class, 'agenda'])->name('agenda');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    // Route::post('/profile', [ProfileController::class, 'profile'])->name('profile');
    // Route::post('/kalender', [KalenderController::class, 'kalender'])->name('kalender');
    Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');                                                                                          Route::post('profile/edit', [ProfileController::class, 'update'])->name('profile.edit');
    // Route::post('input', [FormController::class, 'input'])->name('input');
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');    
});

    
Route::resource('pengguna',PenggunaController::class)->middleware(['admin']);


Route::prefix('admin')->middleware(['admin'])->name('admin.')->group(function(){

    Route::post('/adminlogin', [ LoginController::class, 'AdminLogin'])->name('adminlogin');
    
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    
    Route::prefix('shalat')->name('shalat.')->group(function(){
        Route::get('subuh', [RiwayatController::class, 'shalat_subuh'])->name('subuh');
        Route::get('dzuhur', [RiwayatController::class, 'shalat_dzuhur'])->name('dzuhur');
        Route::get('ashar', [RiwayatController::class, 'shalat_ashar'])->name('ashar');
        Route::get('maghrib', [RiwayatController::class, 'shalat_maghrib'])->name('maghrib');
        Route::get('isya', [RiwayatController::class, 'shalat_isya'])->name('isya');
        Route::get('dhuha', [RiwayatController::class, 'shalat_dhuha'])->name('dhuha');
        Route::get('tahajud', [RiwayatController::class, 'shalat_tahajud'])->name('tahajud');
    });

    Route::prefix('dzikir')->name('dzikir.')->group(function(){
        Route::get('dzikirpagi', [RiwayatController::class, 'dzikir_pagi'])->name('dzikirpagi');
        Route::get('dzikirsore', [RiwayatController::class, 'dzikir_sore'])->name('dzikirsore');
        Route::get('istighfar', [RiwayatController::class, 'istighfar'])->name('istighfar');
        Route::get('shalawat', [RiwayatController::class, 'shalawat'])->name('shalawat');
    });
     
    Route::prefix('kebaikan')->name('kebaikan.')->group(function(){
        Route::get('berbuatbaik', [RiwayatController::class, 'berbuat_baik'])->name('berbuatbaik');
    });

    Route::prefix('ceramah')->name('ceramah.')->group(function(){
        Route::get('ceramah', [RiwayatController::class, 'ceramah'])->name('ceramah');
    });
       

    // Route::get('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

    // Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

    Route::get('/dashboardAdmin', [DashboardController::class, 'dashboard'])->name('dashboardAdmin');

    // Route::post('/dashboardAdmin', [DashboardController::class, 'dashboard'])->name('dashboardAdmin');

    Route::get('/AdminAgenda', [AgendaController::class, 'agendaAdmin'])->name('agendaAdmin');

    // Route::post('/AdminAgenda', [AgendaController::class, 'agenda'])->name('admin.agendaAdmin');

    Route::get('/kalenderAdmin', [KalenderController::class, 'kalenderAdmin'])->name('kalenderAdmin');


    // Route::post('/kalenderAdmin', [KalenderController::class, 'kalender'])->name('admin.kalenderAdmin');

    // Route::get('/profileAdmin', [ProfileController::class, 'profileAdmin'])->name('profileAdmin');

    // Route::post('/profileAdmin', [ProfileController::class, 'updateprofile'])->name('profileAdmin');

    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');

});


// Route::group(['middleware' => ['auth','role:siswa']], function(){
    // Route::group(['middleware' => 'siswa'], function(){

    // Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
    
 
    
    //ini admin pak
    
    // Route::group(['middleware' => ['auth','Role:admin']],function(){
    
    
    // Route::get('/', function () {
    //     return view('welcome');
    // });
// });
// Auth::routes();









