<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin'], function (){

   Route::group(['prefix' => 'cheeses'], function (){

       Route::get('/', ['as' => 'app.cheeses.index', 'uses' => 'CheesesController@admIndex']);
       Route::get('/create', ['as' => 'app.cheeses.create', 'uses' => 'CheesesController@admCreate']);
       Route::post('/create', [ 'uses' => 'CheesesController@admStore']);

       Route::group(['prefix' => '{id}'], function () {

           Route::get('/', ['uses' => 'CheesesController@admShow']);
           Route::get('/edit', ['as' => 'app.cheeses.edit','uses' => 'CheesesController@admEdit']);
           Route::post('/edit', [ 'uses' => 'CheesesController@admUpdate']);
           Route::delete('/delete', ['as' => 'app.cheeses.destroy', 'uses' => 'CheesesController@admDestroy']);
       });
   });

    Route::group(['prefix' => 'ingredients'], function () {

        Route::get('/', ['as' => 'app.ingredients.index', 'uses' => 'IngredientsController@admIndex']);
        Route::get('/create', ['as' => 'app.ingredients.create', 'uses' => 'IngredientsController@admCreate']);
        Route::post('/create', ['uses' => 'IngredientsController@admStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [ 'uses' => 'IngredientsController@admShow']);
            Route::get('/edit', ['as' => 'app.ingredients.edit', 'uses' => 'IngredientsController@admEdit']);
            Route::post('/edit', [ 'uses' => 'IngredientsController@admUpdate']);
            Route::delete('/delete', ['as' => 'app.ingredients.destroy', 'uses' => 'IngredientsController@admDestroy']);
        });
    });

    Route::group(['prefix' => 'pads'], function () {

        Route::get('/', ['as' => 'app.pads.index', 'uses' => 'PadsController@admIndex']);
        Route::get('/create', ['as' => 'app.pads.create', 'uses' => 'PadsController@admCreate']);
        Route::post('/create', ['uses' => 'PadsController@admStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/', [ 'uses' => 'PadsController@admShow']);
            Route::get('/edit', ['as' => 'app.pads.edit', 'uses' => 'PadsController@admEdit']);
            Route::post('/edit', ['uses' => 'PadsController@admUpdate']);
            Route::delete('/delete', ['as' => 'app.pads.destroy', 'uses' => 'PadsController@admDestroy']);
        });
    });

    Route::group(['prefix' => 'permissions'], function () {

        Route::get('/', ['uses' => 'PermissionsController@admIndex']);
        Route::get('/create', ['as' => 'app.permissions.create', 'uses' => 'PermissionsController@admCreate']);
        Route::post('/create', ['uses' => 'PermissionsController@admStore']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'PermissionsController@admShow']);
        	Route::get('/edit', ['as' => 'app.permissions.edit', 'uses' => 'PermissionsController@admEdit']);
        	Route::post('/edit', ['uses' => 'PermissionsController@admUpdate']);
        	Route::delete('/delete', ['as' => 'app.permissions.destroy', 'uses' => 'PermissionsController@admDestroy']);
    	});
    });
    Route::group(['prefix' => 'pizzas'], function () {

        Route::get('/', ['uses' => 'PizzasController@admIndex']);
        Route::get('/create', ['as' => 'app.pizzas.create', 'uses' => 'PizzasController@admCreate']);
        Route::post('/create', ['uses' => 'PizzasController@admStore']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'PizzasController@admShow']);
        	Route::get('/edit', ['as' => 'app.pizzas.edit','uses' => 'PizzasController@admEdit']);
        	Route::post('/edit', [ 'uses' => 'PizzasController@update']);
        	Route::delete('/delete', ['as' => 'app.pizzas.destroy', 'uses' => 'PizzasController@admDestroy']);
    	});
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['uses' => 'RolesController@admIndex']);
        Route::get('/create', ['as' => 'app.roles.create', 'uses' => 'RolesController@admCreate']);
        Route::post('/create', ['uses' => 'RolesController@admStore']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'RolesController@admShow']);
        	Route::get('/edit', ['as' => 'app.roles.edit', 'uses' => 'RolesController@admEdit']);
        	Route::post('/edit', [ 'uses' => 'RolesController@admUpdate']);
        	Route::delete('/delete', ['as' => 'app.roles.destroy', 'uses' => 'RolesController@admDestroy']);
        });
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['uses' => 'UsersController@admIndex']);
        Route::get('/create', ['as' => 'app.users.create', 'uses' => 'UsersController@admCreate']);
        Route::post('/create', ['uses' => 'UsersController@admStore']);

        Route::group(['prefix' => '{id}'], function () {

        	Route::get('/', ['uses' => 'UsersController@admShow']);
        	Route::get('/edit', ['as' => 'app.users.edit','uses' => 'UsersController@admEdit']);
        	Route::post('/edit', [ 'uses' => 'UsersController@admUpdate']);
        	Route::delete('/delete', ['as' => 'app.users.destroy', 'uses' => 'UsersController@admDestroy']);
    	});
    });
});

Route::group(['prefix' => 'pizzas'], function () {

    Route::get('/', ['uses' => 'PizzasController@index']);
    Route::get('/create', ['as' => 'app.pizzas.create', 'uses' => 'PizzasController@create']);
	Route::post('/create', ['uses' => 'PizzasController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/', ['uses' => 'PizzasController@show']);
        Route::get('/edit', ['as' => 'app.pizzas.edit', 'uses' => 'PizzasController@edit']);
        Route::post('/edit', [ 'uses' => 'PizzasController@update']);
        Route::delete('/delete', ['as' => 'app.pizzas.destroy', 'uses' => 'PizzasController@destroy']);
    });
});