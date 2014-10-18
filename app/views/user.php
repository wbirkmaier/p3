<!DOCTYPE html>

	<!--	Dynamic Web Applications Fall 2014  					-->
	<!--    Project Number 3		    					-->
	<!--    Wil Birkmaier			    					-->
	<!--    First Project with Laravel generating lorem ipsum and user text		-->

<html>

<head>

	<title>Project 3 - Developer's Best Friend</title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex">
	
	 <?php
        //Load Faker Library
        $fakerPath = app_path().'/../vendor/fzaninotto/faker/src/autoload.php';
        require_once $fakerPath;

        // use the factory to create a Faker\Generator instance
        $faker = Faker\Factory::create();

        ?>


</head>

<body>
	<h1>Random User</h1>
	<p>Sometimes you need the ability to populate a database with random user information.</p>
	<p>

	<form action="{{ url('/lorem-ipsum-generate') }}" method="post">

        <fieldset>

                <legend>Lorem Ipsum Generator</legend>

                <label for="loremLength"><b>Enter a number between 1 and 99 for the number of lorem ipsum paragraphs.</b></label><br>
                <input type="text" id="loremLength" name="loremLength" placeholder="Enter Number"><br>
                <br>
                <input type="checkbox" id="numberChar" name="numberChar" value="true" <?php if(isset($_POST["numberChar"])) echo "checked='checked'"; ?> >
                <label for="numberChar"> Append Numerical Character</label><br>

                <input type="checkbox" id="specialChar" name="specialChar" value="true" <?php if(isset($_POST["specialChar"])) echo "checked='checked'"; ?> >
                <label for="specialChar"> Append Special Character</label><br>
                <br>
                <input type="submit" value="Generate Text">

        </fieldset>

        <fieldset>
                <legend>Your lorem ipsum text is:</legend>
                <p id="passwordOut"><?=$faker->name?><br><?=$faker->address?><br><?=$faker->text?></p>
        </fieldset>

        </form>

	</p>
	<br>
	<p>You can <a href='/'>Return Home</a> from this place.</p>

</body>

</html>
