<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
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

Route::get('/', '\App\Http\Controllers\HomeController@home');
Route::get('/get/models/{make_id}','\App\Http\Controllers\HomeController@getModelsForMake');
Route::get('/test-excel','\App\Http\Controllers\CarController@export');


Route::get('/dashboard/car-index', 'App\Http\Controllers\CarController@index')->name('car-index');
Route::get('/dashboard/car-create', 'App\Http\Controllers\CarController@create')->name('car-create');
Route::get('/dashboard/car-excel', 'App\Http\Controllers\CarController@createExcel')->name('car-excel');
Route::post('/dashboard/upload-excel', 'App\Http\Controllers\CarController@importExcel')->name('upload-excel');

Route::post('/dashboard/car-store', 'App\Http\Controllers\CarController@store')->name('car-store');
Route::get('/dashboard/car-edit/{id}', 'App\Http\Controllers\CarController@edit')->name('car-edit');
Route::post('/dashboard/car-update', 'App\Http\Controllers\CarController@update')->name('car-update');
Route::post('/dashboard/car-delete/{id}', 'App\Http\Controllers\CarController@destroy')->name('car-delete');
Route::get('/download-example-sheet','App\Http\Controllers\CarController@downloadExampleSheet')->name('example-sheet');



Route::get('/car/{id}','\App\Http\Controllers\HomeController@carDetails')->name('car-details');


Route::get('/makes-index','\App\Http\Controllers\MakeController@index')->name('makes-index');
Route::get('/makes-create','\App\Http\Controllers\MakeController@create')->name('makes-create');
Route::post('/makes-store','\App\Http\Controllers\MakeController@store')->name('makes-store');
Route::get('/makes-edit/{id}','\App\Http\Controllers\MakeController@edit')->name('makes-edit');
Route::post('/makes-update','\App\Http\Controllers\MakeController@update')->name('makes-update');
Route::get('/makes-delete/{id}','\App\Http\Controllers\MakeController@destroy')->name('makes-delete');


Route::get('/models-index','\App\Http\Controllers\ModelsController@index')->name('models-index');
Route::get('/models-create','\App\Http\Controllers\ModelsController@create')->name('models-create');
Route::post('/models-store','\App\Http\Controllers\ModelsController@store')->name('models-store');
Route::get('/models-edit/{id}','\App\Http\Controllers\ModelsController@edit')->name('models-edit');
Route::post('/models-update','\App\Http\Controllers\ModelsController@update')->name('models-update');
Route::get('/models-delete/{id}','\App\Http\Controllers\ModelsController@destroy')->name('models-delete');


Route::get('/add/to/compare/{id}','\App\Http\Controllers\HomeController@addToCompare');
Route::get('/remove/compare/{id}','\App\Http\Controllers\HomeController@removeCompare')->name('rm-compare');
Route::get('/add/to/favorite/{id}','\App\Http\Controllers\HomeController@addToFavorite');
Route::get('/remove/favorite/{id}','\App\Http\Controllers\HomeController@removeFavorite')->name('rm-favorite');

Route::get('/compare-page','\App\Http\Controllers\HomeController@comparePage')->name('compare-page');
Route::get('/favorite-page','\App\Http\Controllers\HomeController@favPage')->name('fav-page');
Route::get('/search','\App\Http\Controllers\HomeController@search')->name('search');


Route::post('/subscribe-with-us','\App\Http\Controllers\HomeController@saveSubsriber')->name('subscribe');



//settings
Route::get('/dashboard-settings','\App\Http\Controllers\SettingsController@index')->name('settings');
Route::post('/dashboard-update','\App\Http\Controllers\SettingsController@update')->name('settings-update');
