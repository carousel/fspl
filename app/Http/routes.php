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
Route::get('/q',function(){
    //$user = \App\User::find(1);
    //$user->setStripeKey('sk_test_umnld53LtJwIZTwWxbHnk2pf');
    //$user->subscription('monthly')->create('123');
    return \Schema::getColumnListing('users');
});


Route::get('/', 'HomeController@getIndex');
Route::get('/create-slideshow', 'SlideshowController@getCreateSlideshow');
Route::get('/pricing', 'SlideshowController@getPricing');
Route::get('/examples', 'SlideshowController@getExamples');
Route::get('/signin', 'SessionController@getSignin');
Route::post('/signin', 'SessionController@postSignin');
Route::get('/signup', 'SessionController@getSignup');
Route::post('/signup', 'SessionController@postSignup');
Route::get('/signout', 'SessionController@getSignout');
