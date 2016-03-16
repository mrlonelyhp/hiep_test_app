<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('members/{id?}', 'MembersController@index');
Route::get('get_members', 'MembersController@getMember');
Route::get('members/{id}', 'MembersController@show');
Route::post('members', 'MembersController@store');
Route::post('members/{id}', 'MembersController@update');
Route::delete('members/{id}', 'MembersController@destroy');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //Route::resource('members', 'MembersController');
});
