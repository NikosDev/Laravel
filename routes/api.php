<?php

use Illuminate\Http\Request;

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

    Route::get('/v1/messages', 'MessagesController@index');
    
    Route::post('/v1/messages', 'MessagesController@store');
    
    Route::get('/v1/messages/find/email/{email}', 'MessagesController@findEmail');
    
    Route::get('/v1/messages/find/text/{text}', 'MessagesController@findText');