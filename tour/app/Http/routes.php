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


// Steps creating new table / controller / migration


//1. Create the web link
//2. Create Route                      // Bei buttons müssen Routes deklariert werden
//3. Create Controller :            php artisan make:controller PhotoController
//4. Create Migration / Model       php artisan make:migration create_users_table, model

//5. Create Views


//http://stackoverflow.com/questions/25061687/two-foreign-keys-how-to-map-with-laravel-eloquent


// Dizitube


Route::get('dizi', 'SerieController@index');

Route::get('dizi/add', 'SerieController@add');

Route::get('dizi/season/', 'SeasonController@index');

Route::get('dizi/season/add', 'SeasonController@add');






Route::get('bs/find', 'SerieController@find_series');


Route::get('bs/find_seasons', 'SeasonController@find_seasons_for_series');


Route::get('bs/find_episodes', 'EpisodeController@find_episodes_for_seasons');


//




Route::get('hello', 'hello@index');
Route::get('/hello/{name}', 'Hello@show');

Route::post('bs/description_update/{id}', 'DescriptionSerieController@update')->name('description_update');
Route::get('bs/description_update/{id}', 'DescriptionSerieController@update')->name('description_update');


Route::group(['middleware' => 'web'], function () { // Authentifizierte Actions

  //  Route::auth();


    Route::post('bs/check_as_seen', 'IndexController@check_as_seen')->name('index.check_as_seen');

    Route::post('bs/description_update', 'DescriptionSerieController@update')->name('description_update');


    Route::get('bs/seasons/{id}/{season_nr}', 'IndexController@season')->name('index.season')->where('id', '[0-9]+')->where('season_nr', '[0-9]+');

    Route::post('bs/seasons/', 'IndexController@season')->name('index.season');


    Route::get('/home', 'HomeController@index');




    Route::get('bs/series', 'IndexController@index')->name('index.page');
    Route::post('bs/series', 'IndexController@index')->name('index.page');


    //-----------
    Route::get('/tournaments', 'TournamentController@index');
    Route::post('/tournaments/new', 'TournamentController@store')->name('tournament.new');

    Route::get('/tournaments/new', 'TournamentController@add')->name('tournament.new2');



    Route::get('/tournaments/delete/', 'TournamentController@destroy')->name('tournament.delete');

    Route::get('/tournaments/info/{id}', 'TournamentController@show')->name('tournament.info');



    //------------RESULT
    Route::get('/results/index/{id}', 'ResultsController@index')->name('results.index');
    Route::post('/results/index/{id}', 'ResultsController@index')->name('results.index');

    Route::get('/results/start/{id}', 'ResultsController@start')->name('results.start');
    Route::post('/results/start/{id}', 'ResultsController@start')->name('results.start');


    Route::get('/results/crawler', 'ResultsController@Crawler')->name('results.index');
    Route::get('/results/crawler2', 'ResultsController@Crawler2')->name('results.index');




    Route::post('registration/step/0/{id}', 'RegistrationController@add_prepare')->name('registraion.add');
    Route::get('registration/step/0/{id}', 'RegistrationController@add_prepare')->name('registraion.add');



    Route::post('registration/step/1/{id}', 'RegistrationController@add')->name('registration.add2');



    //-----------


    //Route::get('/tournaments/registrations', 'RegistrationController@index');

    Route::post('/registration/{id}', 'RegistrationController@index')->name('registrations');
    Route::get('/registration/{id}', 'RegistrationController@index')->name('registrations');






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



    Route::resource('tournament', 'TournamentController');


    Route::get('profile', 'ProfileController@getProfile');


});






