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



Route::get('/error',function(){return view('errors.general');});
Route::get('/landing',['middleware'=>'web:web','uses'=>'DashboardController@index']);
Route::get('/admin',['middleware'=>'web:web','uses'=>'AdminController@index']);
Route::get('/admin/goal',['middleware'=>'web:web','uses'=>'AdminController@setGoal']);
Route::get('/test',['middleware'=>'web:web','uses'=>'Dashboard@test']);
Route::get('/',
    ['middleware' => ['saml:web'], function () {

    }]);
