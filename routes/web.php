<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\Controller;
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

Route::get('berandaUser', function () {
    return view('user/welcome');
});

Route::get('login',function(){
    return view('login');
});
Route::get('detail',function(){
    return view('detail');
});
Route::get('detailUser',function(){
    return view('user/detailUser');
});
Route::get('detailUser2',function(){
    return view('user/detailUser2');
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
Route::get('jawab',function(){
    return view('admin/jawab');
});

Route::get('help',function(){
    return view('help/index');
});
Route::get('bantuanUser',function(){
    return view('user/bantuanUser');
});

Route::get('profil',function(){
    return view('profil/index');
});

Route::get('profil2',function(){
    return view('profil/index2');
});
Route::get('profil3',function(){
    return view('profil/index3');
});

Route::get('help', [HelpController::class, 'ruler']);
Route::get('bantuanUser', [HelpController::class, 'ruler2']);
Route::get('profil', [ProfilController::class, 'index']);
Route::get('profil2', [ProfilController::class, 'index2']);
Route::get('profil3', [ProfilController::class, 'index3']);
Route::post('tambahbuku',[bukuController::class, 'tambahbuku']);
Route::get('bukuAdmin',[bukuController::class, 'showbooks']);
Route::post('registerPost',[Controller::class, 'registerPost']);
Route::post('getin',[Controller::class, 'getin']);

Route::get('/',[Controller::class, 'indexing']);
Route::get('berandaUser',[Controller::class, 'indexingUser']);
Route::get('logout',[Controller::class, 'logout']);
Route::post('nanyak',[HelpController::class, 'nanyak']);
Route::post('nanyak2',[HelpController::class, 'nanyak2']);
Route::get('berandaAdmin',[HelpController::class, 'showQu']);
Route::get('deleteTanya/{id}',[HelpController::class, 'deleteTanya']);
Route::get('jawablah/{id}',[HelpController::class, 'jawablah']);
Route::post('kasihpaham',[HelpController::class, 'kasihpaham']);
Route::get('detail/{ISBN}', [bukuController::class, 'detail']);
Route::get('detailUser/{ISBN}', [bukuController::class, 'detailUser']);
Route::get('detailUser2/{ISBN}', [bukuController::class, 'detailUser2']);
Route::get('ajukan/{ISBN}',[bukuController::class, 'ajukan']);
Route::get('disukai/{ISBN}',[bukuController::class, 'disukai']);
Route::get('antrian/{ISBN}',[bukuController::class, 'antrian']);


