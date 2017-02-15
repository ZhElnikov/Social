<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::auth();
Route::get('/', 'RoomController@getMain');
Route::get('/home', 'HomeController@index');
Route::get('/rooms', 'RoomController@getIndex');
Route::get('/profile', 'ProfileController@getIndex');
Route::get('/user/{id}', 'UserController@getIndex')->where('id','[0-9]');
Route::get('/room/{id}', 'RoomController@getNum')->where('id','[0-9]');

Route::post('/message/{id}','MessageController@postIndex')->where('id','[0-9]+');
Route::post('/addroom','RoomController@postIndex');
Route::post('/profile','ProfileController@postIndex');

Route::get('/user/{id?}', function ($id=null) {
    return 'user'.$id;
})->where('id','[0-9A-Za-z]+');

Route::get('{id?}', 'StaticController@getIndex')->where('id','[0-9A-Za-z_]+');
/*ПОСЛЕДНИЙ*/





