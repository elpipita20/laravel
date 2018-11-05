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

Route::get('/', 'PagesController@index');
Route::resource('project', 'ProjektController');

Auth::routes();

Route::get('/control', 'HomeController@index')->name('control');

/*Ukoliko je user logiran da ide odma na kontrolnu ploču*/
Route::get('/', ['middleware' =>'guest', function(){
  return view('auth.login');
}]);
