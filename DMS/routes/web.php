<?php
use App\Http\Controllers\createSuratController;


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User;
use App\Http\Controllers\DataController;
use App\Http\Controllers\CetakDanHistory;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\PdfSurat;

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

Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('layout/home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//dashboard
Route::get('/dashboard', [dashboard::class, 'index']);

Route::get('/createsurat', [createSuratController::class, 'index']);
Route::post('/createsurat/input', [createSuratController::class, 'create']);
Route::get('/home_user', [User::class, 'index']);
Route::get('/login', [User::class, 'login']);
Route::post('/loginPost', [User::class, 'loginPost']);
Route::get('/register', [User::class, 'register']);
Route::post('/registerPost', [User::class, 'registerPost']);
Route::get('/logout', [User::class, 'logout']);

// data surat ada di sini
Route::get('/data', [DataController::class, 'index'])->name('index-data');
// input tujuan
Route::post('/kepadasave', [DataController::class, 'kepadainput']);
// input pst
Route::post('/pstsave', [DataController::class, 'pstinput']);


// membuat surat
Route::post('/store', [createSuratController::class, 'store']);


// membuat surat
Route::get('/cetakhistory', [CetakDanHistory::class, 'index'])->name('cetakhistory');
//hapus
Route::get('/hapus/surat/psb{id}', [CetakDanHistory::class, 'hapussuratpsb']);
Route::get('pdf/ppb/{id}', [PdfSurat::class, 'Suratppb']);



Route::get('/D', function () {
    return view('pdf-cetak.permohonanPerubahanNamaSite');
});
Route::get('/penomoran', function () {
    return view('penomoran');
});
Route::get('/DataP', function () {
    return view('DataP');
});