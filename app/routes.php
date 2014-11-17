<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

	Route::get('/', 'HomeController@showWelcome');

    Route::resource("user","UserController");

	Route::get('/', 'HomeController@showUI');

    Route::controller("TreeView", "TreeViewController");

    Route::controller("program", "ProgramController");
    Route::controller("editor", "EditorController");
    Route::controller("user", "UserController");
    Route::controller("licence", "LicenceController");

    Route::controller('auth', 'AuthController');

    Route::get('/ui','HomeController@showUI');

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/