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

//Route::get('/', 'HomeController@index');
Route::get('photo','ImagesController@index');
Route::post('photo/upload','ImagesController@createImage');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
//Route::get('/', 'PagesController@index');

/*Route::get('/', function(){


    dd(DB::table('users')->get());

});*/
/*Route::get('home',function(){
    return view("home");
});
Route::get('auth/register','Auth\AuthController@getRegister');
Route::get('auth/login','Auth\AuthController@getLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('/',function(){

   return view('auth.register');
});*/
/*Route::get('users',function(){
    return view('users.index');
});*/
//Route::get('/', 'PagesController@index');

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

Route::resource('users','UsersController');
Route::post('users/login', 'UsersController@login');
/*Route::get('file',function(){

    return view('upload');
});

Route::get('file/upload','UsersController@upload');*/


Route::get('fileentry', 'FileEntryController@index');
Route::get('fileentry/get/{filename}', [
    'as' => 'getentry', 'uses' => 'FileEntryController@get']);
Route::post('fileentry/add',[
    'as' => 'addentry', 'uses' => 'FileEntryController@add']);