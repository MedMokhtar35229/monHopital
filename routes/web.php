<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocteursController;
use App\Http\Controllers\InfirmiersController;
use App\Http\Controllers\MaladesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospitalisesController;

use App\Http\Controllers;

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

//  Route::get("/logout", function(){
//    return view("auth/login");
   
// });  


Auth::routes();
Route::get("/", function(){
  return view("auth/login");
})->middleware("auth");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  Route::resource('/docteurs', DocteursController::class)->middleware("auth");
  Route::resource('/infirmiers', InfirmiersController::class)->middleware("auth");
  Route::resource('/malades', MaladesController::class)->middleware("auth");
  Route::resource('/hospitalises', HospitalisesController::class)->middleware("auth");
  Route::resource('/hospitalises/edit/{$hospitalise->Numero}/{$hospitalise->id}', 'HospitalisesController@edit')->middleware("auth");
  Route::resource('/hospitalises/update/{$hospitalise->Numero}/{$hospitalise->id}', 'HospitalisesController@update')->middleware("auth");
  Route::resource('/hospitalises/destroy/{$hospitalise->Numero}/{$hospitalise->id}', 'HospitalisesController@destroy')->middleware("auth");


