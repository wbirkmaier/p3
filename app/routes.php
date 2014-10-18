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
	return 'welcome';
});

Route::get('/lorem-ipsum-generate', function()
{
        return 'lorem';
});

Route::get('/random-user-generate', function()
{
        return 'user';
});

App::missing(function($exception)
{
        return 'oops';
});
