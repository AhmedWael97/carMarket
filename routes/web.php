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

Route::get('/', function () {
    return view('frontend.pages.welcome');
});
Route::get('/compare', function () {
    return view('frontend.pages.compare');
});



//Cars Routes
Route::get('/dashboard/car-index', 'App\Http\Controllers\CarsController@index')->name('car-index');
Route::get('/dashboard/car-create', 'App\Http\Controllers\CarsController@create')->name('car-create');
Route::post('/dashboard/car-store', 'App\Http\Controllers\CarsController@store')->name('car-store');
Route::get('/dashboard/car-edit/{id}', 'App\Http\Controllers\CarsController@edit')->name('car-edit');
Route::post('/dashboard/car-update', 'App\Http\Controllers\CarsController@update')->name('car-update');
Route::post('/dashboard/car-delete/{id}', 'App\Http\Controllers\CarsController@destroy')->name('car-delete');
