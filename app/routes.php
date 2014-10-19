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
        if ($postData  == "" || $postData > $maxParagraphs || $postData == 0) {
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
        /*Call Faker Library code from public/php/faker.php*/
        $fakerPath = app_path().'/../vendor/fzaninotto/faker/src/autoload.php';
        require_once $fakerPath;

        /*Create an instance*/
        $faker = Faker\Factory::create();
	
	/*Build array for random single user*/	
	$singleUser=array($faker->name, $faker->address, $faker->dateTimeThisCentury->format('m-d-Y'));
	$singleUser=implode('<br>', $singleUser);

        return View::make('user', array('appOut' => $singleUser));
});

Route::post('/random-user-generate', function()
{
	/*Get post data from submitted page*/
        $postData = Input::get('userLength');
	$addressData = Input::get('includeAddress');
	$birthData = Input::get('includeBirth');
	
	$manyUsers="";

	/*Max number of users*/
        $maxUsers=99;

	/*Set number of random users*/
        if ($postData  == "" || $postData > $maxUsers || $postData == 0) {
                $userAmount=rand(1,10);
        }
        else {
                $userAmount=$postData;
        }

	/*Call Faker Library code from public/php/faker.php*/
        $fakerPath = app_path().'/../vendor/fzaninotto/faker/src/autoload.php';
        require_once $fakerPath;

        /*Create an instance*/
	$faker = Faker\Factory::create();

	/*Determine which user list to generate*/

	if ($addressData == "true" && $birthData == "true"){
	
		for ($i = 0; $i < $userAmount;  ++$i) {
			$fakeUser=array($faker->name, $faker->address, $faker->dateTimeThisCentury->format('m-d-Y'));
		        $fakeUser=implode('<br>', $fakeUser);
			$manyUsers=$fakeUser . "<br><br>" . $manyUsers;
		}
	}

	elseif ($addressData == "true"){
		for ($i = 0; $i < $userAmount;  ++$i) {
                        $fakeUser=array($faker->name, $faker->address);
                        $fakeUser=implode('<br>', $fakeUser);
                        $manyUsers=$fakeUser . "<br><br>" . $manyUsers;
                }
	}
	
	elseif ($birthData == "true"){
                for ($i = 0; $i < $userAmount;  ++$i) {
                        $fakeUser=array($faker->name, $faker->dateTimeThisCentury->format('m-d-Y'));
                        $fakeUser=implode('<br>', $fakeUser);
                        $manyUsers=$fakeUser . "<br><br>" . $manyUsers;
                }
        }
	else {
		for ($i = 0; $i < $userAmount;  ++$i) {
                        $fakeUser=array($faker->name);
                        $fakeUser=implode('<br>', $fakeUser);
                        $manyUsers=$fakeUser . "<br><br>" . $manyUsers;
                }
	}


	return View::make('user', array('appOut' => $manyUsers));
});


App::missing(function($exception)
{
        return View::make('oops');
});
