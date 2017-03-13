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

Route::group(['prefix' => 'testproject'], function () {
    Route::get('/' , 'TestProjectController@index');
    Route::get('/login' , 'TestProjectController@login');
});

Route::group(['prefix' => 'urlshorter'], function () {
    Route::get('/' , 'UrlShorterController@index');
    Route::post('/login', 'UrlShorterController@login');
    Route::post('/signup', 'UrlShorterController@signUp');
    Route::post('/short' , 'UrlShorterController@shortUrl');
});

