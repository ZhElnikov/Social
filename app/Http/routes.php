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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/id', function () {
    return 'test';
});
Route::get('/user/{id?}', function ($id=null) {
    return 'user'.$id;
})->where('id','[0-9A-Za-z]+');
Route::get('/', 'BaseController@getIndex');
// Route::controller('static','StaticController');


Route::get('{id?}', 'StaticController@getIndex')->where('id','[0-9A-Za-z_]+');
/*ПОСЛЕДНИЙ*/



