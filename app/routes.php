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
	return View::make('index');
});

Route::get('/lorem-ipsum-generate', function()
{
	return View::make('lorem', array('loremPost' => ''));
});

Route::post('/lorem-ipsum-generate', function()
{
	$postData = Input::get('loremLength');
	return View::make('lorem', array('loremPost' => $postData));
});

Route::get('/random-user-generate', function()
{
        return View::make('user');
});

App::missing(function($exception)
{
        return View::make('oops');
});
