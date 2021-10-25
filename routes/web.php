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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('create_citizen', 'CitizenController@create');
Route::post('register_citizen', 'CitizenController@store')->name('citreg');
Route::get('view_citizens', 'CitizenController@index');


Route::get('create_ward', 'WardController@create');
Route::post('register_ward', 'WardController@store')->name('wardreg');
Route::get('view_wards', 'WardController@index');

Route::get('create_lga', 'LgaController@create');
Route::post('register_lga', 'LgaController@store')->name('lgareg');
Route::get('view_lgas', 'LgaController@index');

Route::get('create_state', 'StateController@create');
Route::post('register_state', 'StateController@store')->name('statereg');
Route::get('view_states', 'StateController@index');