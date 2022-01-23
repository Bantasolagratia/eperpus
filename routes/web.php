<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ProfilController;


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

Route::get('login',function(){
    return view('login');
});
Route::get('detail',function(){
    return view('detail');
});

Route::get('berandaAdmin',function(){
    return view('admin/berandaAdmin');
});

Route::get('bukuAdmin',function(){
    return view('admin/bukuAdmin');
});

Route::get('tambahBuku',function(){
    return view('admin/tambahBuku');
});
Route::get('help', [HelpController::class, 'index']);
Route::get('profil', [ProfilController::class, 'index']);