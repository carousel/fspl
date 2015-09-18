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
Route::get('/test',function(){
    return \App\User::all();
});


Route::get('/', 'HomeController@getIndex');
Route::get('/create-slideshow', 'SlideshowController@getCreateSlideshow');
Route::get('/pricing', 'SlideshowController@getPricing');
Route::get('/examples', 'SlideshowController@getExamples');
Route::get('/signin', 'SessionController@getSignin');
Route::post('/signin', 'SessionController@postSignin');
Route::get('/signup', 'SessionController@getSignup');
Route::post('/signup', 'SessionController@postSignup');
