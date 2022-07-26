<?php

// panggil controller Siswa
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//route untuk admin
Route::group(['prefix'=>'admin', 'middleware'=>['auth']],function(){
// route siswa
Route::get('/',function(){
    return view('admin.index');
});
    Route::resource('siswa', SiswaController::class);
    Route::resource('pembelian', PembelianController::class);
});