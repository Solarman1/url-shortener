<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'UrlUpdateController@index')->name('home');

Route::post('/submit', 'UrlUpdateController@store')->name('pushUrl');


Route::get('/{hash}', 'UrlRedirectController@redirect')->name('redirect');
//Route::resource('/submit', 'CutUrlApiController')->names('cutUrl');
//Route::any('{slug}', 'AppController@index');
// Route::get('/{redirectUrlHash}', function($redirectUrlHash,$redirectUrl){
//     return redirect() -> away($redirectUrl);
// });
//Route::post('/submit', 'ModelUrlController@getUrlFromForm');