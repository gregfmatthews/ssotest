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

Route::get('/',
    ['middleware' => 'saml', function () {

    }]);

Route::get('/error',function(){return view('errors.general');});
Route::get('/landing',['middleware'=>'auth','uses'=>'DashboardController@index']);
Route::get('/admin',['AdminController@index']);
Route::get('/admin/goal',['AdminController@setGoal']);
