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

//Route::get('/', 'WelcomeController@index');

/*Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
Route::get('/', 'PagesController@index');*/

/*Route::get('/', function(){


    dd(DB::table('users')->get());

});*/




Route::get('/', 'PagesController@index');

$router->bind('songs',function($slug ){

    return App\Song::whereSlug($slug)->first();
});

$router->resource('songs','SongsController',[

    'names'=>[
        'index'=>'song_list',
        'show'=>'song_details',
        'update'=>'song_update',
        'update'=>'song_update',
        'destroy'=>'song_destroy',


    ]
]);