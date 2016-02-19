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

Route::get('/', function () {
    return view('welcome');
});


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











Route::get('hello', 'hello@index');
Route::get('/hello/{name}', 'Hello@show');



Route::group(['middleware' => 'web'], function () { // Authentifizierte Actions

  //  Route::auth();

    Route::get('/home', 'HomeController@index');



// Authentication routes...
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');

    Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('register', 'Auth\AuthController@getRegister');
    Route::post('register', 'Auth\AuthController@postRegister');


    Route::get('edit_profile', 'ProfileController@editProfile');


    Route::post('edit_profile', 'ProfileController@editProfile')->name('profileedit');


    Route::get('update', 'ProfileController@update');


    Route::post('update', 'ProfileController@update')->name('profile.update');






    Route::get('profile', 'ProfileController@getProfile');


});






