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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/terrains', 'App\Http\Controllers\TerrainController@index')->name("terrain.index");
Route::get('/detail', 'App\Http\Controllers\DetailController@index')->name("detail.index");
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name("contact.index");


Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/terrains', 'App\Http\Controllers\Admin\AdminTerrainController@index')->name("admin.terrain.index");
Route::post('/admin/terrains/store', 'App\Http\Controllers\Admin\AdminTerrainController@store')->name("admin.terrain.store");



