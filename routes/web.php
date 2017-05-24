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

Route::get('/sets','restoController@getAll');

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
  Route::get('getMood/{city}','restoController@getMood');
  Route::get('getDetails/{id}','restoController@getDetails');
  Route::get('getSearch/{nama}','restoController@search');
  Route::get('getSuggested/{id}','restoController@getSuggested');
  Route::get('getPopular','restoController@getPopular');
  Route::get('getVibes','restoController@getVibes');
  Route::get('getPrice','restoController@getPrice');
  Route::get('getEmpty','restoController@getEmpty');
  Route::get('getAll','restoController@getAll');

  Route::post('submitReview','restoController@submitReview');


});
