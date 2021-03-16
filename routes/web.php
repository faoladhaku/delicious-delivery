<?php

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

Route::get('/',function()
{
	return view('inicio');
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('login/{social}', [App\Http\Controllers\Auth\LoginController::class,'socialLogin'])->where('social','twitter|facebook|google');
Route::post('login/normal', [App\Http\Controllers\Auth\LoginController::class,'normalLogin']);
Route::get('login/{social}/callback', [App\Http\Controllers\Auth\LoginController::class,'handleProviderCallback'])->where('social','twitter|facebook|google');
Route::get('signup',[App\Http\Controllers\RegisterController::class,'index']);
Route::post('signup/new',[App\Http\Controllers\RegisterController::class,'create']);
Route::get('/dashboard',[App\Http\Controllers\DashboardController::class,'index']);
Route::get('/logout',[App\Http\Controllers\DashboardController::class,'logout']);
Route::get('/menu',[App\Http\Controllers\DashboardController::class,'menu']);
Route::get('/perfil',[App\Http\Controllers\DashboardController::class,'showProfile']);
Route::get('/editP',[App\Http\Controllers\DashboardController::class,'edit']);
Route::post('/editProfile',[App\Http\Controllers\DashboardController::class,'editPerfil']);
Route::get('/dashboard/newpedido',[App\Http\Controllers\DashboardController::class,'nuevoPedido']);
Auth::routes();