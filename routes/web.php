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

Route::get('/sets','UserController@ApiCall');

Route::get('/s',function(){
  echo Auth::user();
});

Route::get('/', function () {
    return View::make('index');
});
Route::get('/debug', function () {
    return View::make('debug');
});

Route::group(array('prefix' => 'api'), function(){
  Route::post('signup','UserController@register');
  Route::post('login','UserController@login');
  Route::get('logs','UserController@logdata');
  Route::get('logout','UserController@logout');

  Route::get('getFeatured','restoController@getFeatured');


});
