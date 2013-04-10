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

Route::get('/', function()
{
	echo '<pre>'; print_r(App\Models\User::all()->toArray()); echo '</pre>';
	echo '<pre>'; print_r(App\Models\Article::all()->toArray()); echo '</pre>';
	echo '<pre>'; print_r(App\Models\Page::all()->toArray()); echo '</pre>';

	return View::make('hello');
});