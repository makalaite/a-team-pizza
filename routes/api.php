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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '{api}/v1'], function () {

    Route::get('/', ['uses' => 'PizzasController@a']);
    Route::get('/create', ['as' => 'api.pizzas.create', 'uses' => 'PizzasController@apiCreate']);
    Route::post('/create', ['uses' => 'PizzasController@apiStore']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'PizzasController@apiShow']);
        Route::get('/edit', ['as' => 'api.pizzas.edit', 'uses' => 'PizzasController@apiEdit']);
        Route::post('/edit', [ 'uses' => 'PizzasController@apiUpdate']);
        Route::delete('/delete', ['as' => 'api.pizzas.destroy', 'uses' => 'PizzasController@apiDestroy']);
    });
});