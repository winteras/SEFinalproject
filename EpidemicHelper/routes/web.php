<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SickController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\SearchController;

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

Route::get('/default', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class, 'indexPage']);

Route::get('/flight-search',[FlightController::class, 'show']);
Route::get('/sicktest',[SickController::class, 'index2']);
Route::get('/hoteltest',[HotelController::class, 'index2']);

Route::get('/search',[SickController::class, 'search']);


Route::get('/hotel-list',[HotelController::class, 'index3']);


Route::get('/severity-level-search',[SickController::class, 'index3']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth'])->group(function () {
    //要驗證才能訪問的路由
    Route::resource('flights', \App\Http\Controllers\FlightController::class);
    Route::resource('sicks', \App\Http\Controllers\SickController::class);
    Route::resource('Company', CompanyController::Class);
    Route::resource('hotels', \App\Http\Controllers\HotelController::class);

});