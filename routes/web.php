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

Route::post('/login/custom',[
    'uses' =>'logController@login',
    'as' => 'login.custom'
]);

Route::resource('/photographer','photographer');
Route::resource('/request','requestController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' =>'auth'],function(){
    Route::get('/photographer_home','photographer@list')->name('/photographer_home'); // new obj from photographer 
    Route::get('/user_home','PagesController@listall')->name('/user_home'); // new obj from pages controller 
});



