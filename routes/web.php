<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\PengaturanController;


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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', function(){
	return view('welcome');
});
// Login
Route::get('/login',[LoginController::class,'login'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'cek_login']);
Route::post('/logout',[LoginController::class,'logout']);
// Register
Route::get('/register',[RegisterController::class,'index'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);

// Login dengan google
Route::get('auth/google',[GoogleController::class,'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback',[GoogleController::class,'handleCallback'])->name('google.callback');

Route::group(['middleware' => 'auth'], function(){
	// Dashboard
	Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
	// Menu Kategori
	Route::get('dashboard/kategori',[CategoryController::class,'index']);
	Route::get('dashboard/kategori/create',[CategoryController::class,'create']);
	Route::post('dashboard/kategori',[CategoryController::class, 'store']);
	Route::get('dashboard/kategori/edit/{category}',[CategoryController::class,'edit']);
	Route::patch('dashboard/kategori/oke/{category}',[CategoryController::class,'update']);
	Route::delete('dashboard/kategori/{category}',[CategoryController::class,'destroy']);
	// Menu Tags
	Route::get('dashboard/tag',[App\Http\Controllers\TagController::class,'index']);
	Route::get('dashboard/tag/create',[App\Http\Controllers\TagController::class, 'create']);
	Route::post('dashboard/tag',[App\Http\Controllers\TagController::class,'store']);
	Route::get('dashboard/tag/edit/{id}', [App\Http\Controllers\TagController::class,'edit']);
	Route::patch('dashboard/tag/{tags}',[App\Http\Controllers\TagController::class,'update']);
	Route::delete('dashboard/tag/{tags}',[App\Http\Controllers\TagController::class,'destroy']);
	// Menu Postingan
	Route::get('dashboard/postingan',[App\Http\Controllers\PostinganController::class,'index']);
	Route::get('dashboard/postingan/create',[App\Http\Controllers\PostinganController::class, 'create']);
	Route::post('dashboard/postingan',[App\Http\Controllers\PostinganController::class,'store']);
	Route::get('dashboard/postingan/edit/{post}',[App\Http\Controllers\PostinganController::class, 'edit']);
	Route::patch('dashboard/postingan/{post}',[App\Http\Controllers\PostinganController::class,'update']);
	Route::delete('dashboard/postingan/{posts}',[App\Http\Controllers\PostinganController::class,'destroy']);
	Route::get('dashboard/postingan/trash',[App\Http\Controllers\PostinganController::class,'lihat_trash']);
	Route::get('dashboard/postingan/trash/rest/{posts}', [App\Http\Controllers\PostinganController::class,'kembalikan_postingan']);
	Route::delete('dashboard/postingan/trash/rest/{posts}',[App\Http\Controllers\PostinganController::class,'hapus_permanen']);
	// User Management
	
	Route::get('dashboard/user',[UserController::class,'index']);
	Route::get('dashboard/user/create',[UserController::class,'create']);
	Route::post('dashboard/user',[UserController::class,'store']);
	Route::get('dashboard/user/edit/{user}',[UserController::class,'edit']);
	Route::patch('dashboard/user/{user}',[UserController::class,'update']);
	Route::delete('dashboard/user/{user}',[UserController::class,'destroy']);

	Route::get('dashboard/pengaturan',[PengaturanController::class,'index']);
});
// User Management
// Route::get('/dashboard/user',[UserController::class,'index'])->middleware('auth');
// Route::get('/dashboard/user/create',[UserController::class,'create']);
// Route::post('/dashboard/user',[UserController::class,'store']);
// Route::delete('/dashboard/user/{id}',[UserController::class,'destroy']);


