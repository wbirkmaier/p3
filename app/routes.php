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
	/*Initial number of Paragraphs set random on first load*/
	$loremAmount=rand(1,3);
	
	/*Code to generate paragraphs*/
	$ipsumGenerator=new LoremGenerator();
	$ipsumParagraphs=$ipsumGenerator->getParagraphs($loremAmount);
	$loremText=implode('<p>', $ipsumParagraphs);

	/*Return view for initial random paragraphs*/
	return View::make('lorem', array('appOut' => $loremText));
});

Route::post('/lorem-ipsum-generate', function()
{
	/*Get post data from submitted page*/
	$postData = Input::get('loremLength');

	/*Max number of paragraphs*/
        $maxParagraphs=99;

	/*Set number of paragraphs for lorem ipsum*/
        if ($postData  == "" || $postData > $maxParagraphs) {
                $loremAmount=rand(1,3);
        }
	else {
		$loremAmount=$postData;
	}

	/*Code to generate paragraphs*/
        $ipsumGenerator=new LoremGenerator();
        $ipsumParagraphs=$ipsumGenerator->getParagraphs($loremAmount);
        $loremText=implode('<p>', $ipsumParagraphs);

	return View::make('lorem', array('appOut' => $loremText));
});

Route::get('/random-user-generate', function()
{
        return View::make('user');
});

App::missing(function($exception)
{
        return View::make('oops');
});
