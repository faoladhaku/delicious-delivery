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

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< Updated upstream
//Route::get('login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|google');
//Route::get('login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|google');
Route::get('login/{social}', [App\Http\Controllers\Auth\LoginController::class,'socialLogin'])->where('social','twitter|facebook|google');
Route::get('login/{social}/callback', [App\Http\Controllers\Auth\LoginController::class,'handleProviderCallback'])->where('social','twitter|facebook|google');
=======
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*Ruta Pprovisional*/
Route::get('/Registro',function(){

	return view('Registro');
});
>>>>>>> Stashed changes
