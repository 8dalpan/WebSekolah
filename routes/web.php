<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/',[AdminController::class,'index']);
Route::get('/siswa',[AdminController::class,'siswa']);
Route::post('/siswa',[AdminController::class,'addsiswa']);
Route::get('/editsiswa/{id}',[AdminController::class,'editsiswa']);
Route::put('/editsiswa/{id}/updatesiswa',[AdminController::class,'updatesiswa']);
Route::delete('/siswa/{id}',[AdminController::class,'deletesiswa']);
Route::get('/guru',[AdminController::class,'guru']);
Route::post('/guru',[AdminController::class,'addguru']);
Route::delete('/guru/{id}',[AdminController::class, 'deleteguru']);
Route::get('/editguru/{id}',[AdminController::class,'editguru']);
Route::put('/editguru/{id}/updateguru',[AdminController::class,'updateguru']);
Route::get('/mapel', [AdminController::class,'mapel']);
Route::post('/mapel', [AdminController::class,'addmapel']);
Route::delete('deletemapel/{id}',[AdminController::class,'deletemapel']);
Route::get('/editmapel/{id}',[AdminController::class,'editmapel']);
Route::put('/editmapel/{id}/updatemapel',[AdminController::class,'updatemapel']);
