<?php

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/auth/ok', function () {
    return  Socialite::driver('odnoklassniki')->redirect();
});
Route::get('/callback', 'Auth\Api\OkAuthController@callback');
//Route::get('/callback', function () {
//    $user = Socialite::driver('odnoklassniki')->stateless()->user();
//    dd($user);
//});

//Route::get('/auth/facebook', function () {
//    return Socialite::driver('facebook')->redirect();
//});

//Route::get('/callback', 'Auth\Api\FacebookAuthController@callback');

Route::group(['middleware' => ['cors', 'json.response']], function () {
    //Facebook Auth Routes
//    Route::get('/login/facebook', 'Auth\Api\FacebookAuthController@redirect');
//    Route::get('/callback', 'Auth\Api\FacebookAuthController@callback');

    Route::post('login', 'Auth\ApiAuthController@login')->name('login.api');
    Route::post('register','Auth\ApiAuthController@register')->name('register.api');
});
//Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'Auth\ApiAuthController@logout')->name('logout.api')->middleware('auth:api');
    Route::get('articles', 'ArticleController@index')->name('api.articles.index')->middleware('auth:api');
//});


//Route::middleware('auth:api')->group(function () {
//    // our routes to be protected will go in here
//    Route::get('/user', function (Request $request) {
//        return $request->user();
//    });
//});
