<?php

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
Route::get('/import', 'ImportController@index')->name('importcontract');
Route::get('contract', 'ContractController@index')->name('contract');
Route::get('contract/view/{id}', 'ContractController@detail');
Route::get('group', 'GroupController@index');
Route::post('group', 'GroupController@index')->name('group.add');
Route::post('importExcel', 'ImportController@importContract');
