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



Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        $test = \App\Auctions::all();


        return view('ajax-form', compact('test'));
    });
    Route::delete('/auctions/{auctions}', function(App\Auctions $auctions){
        $auctions->delete();
    });

});