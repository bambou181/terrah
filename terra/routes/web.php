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
Route::get('/terrains/{id}', 'App\Http\Controllers\TerrainController@show')->name("terrain.show");
Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name("contact.index");


Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/terrains', 'App\Http\Controllers\Admin\AdminTerrainController@index')->name("admin.terrain.index");
Route::post('/admin/terrains/store', 'App\Http\Controllers\Admin\AdminTerrainController@store')->name("admin.terrain.store");
Route::delete('/admin/terrains/{id}/delete', 'App\Http\Controllers\Admin\AdminTerrainController@delete')->name("admin.terrain.delete");
Route::get('/admin/terrains/{id}/edit', 'App\Http\Controllers\Admin\AdminTerrainController@edit')->name("admin.terrain.edit");
Route::put('/admin/terrains/{id}/update', 'App\Http\Controllers\Admin\AdminTerrainController@update')->name("admin.terrain.update");





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
