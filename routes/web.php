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

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create', 'Admin\NewsController@add');
     Route::post('news/create', 'Admin\NewsController@create');
     Route::get('profile/create', 'Admin\ProfileController@add');
     Route::post('profile/create', 'Admin\ProfileController@create');
     Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth');
     Route::get('news', 'Admin\NewsController@index')->middleware('auth');  
     Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth');
     Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth');
     Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');
});

//課題１３
//Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
//Route::post('profile/create', 'Admin\ProfileController@create');
//});



  
  //課題　　１１、１２
//Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
//Route::post('news/create', 'Admin\NewsController@create');
//Route::get('profile/create', 'Admin\ProfileController@add')->middleware('auth');
//Route::get('profile/edit', 'Admin\ProfileController@edit')->middleware('auth');




//課題０９

//3
//「http://XXXXXX.jp/XXX というアクセスが来たときに、
//AAAControllerのbbbというAction に渡す
//Routingの設定」を書いてみてください。

//Route::get('XXX', 'Admin\AAAController@bbb');


//4
//admin/profile/create にアクセスしたら ProfileController の 
//add Action に、admin/profile/edit にアクセスしたら 
//ProfileController の edit Action に割り当てるように設定してください。

Auth::routes();