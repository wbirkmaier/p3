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

</head>

<body>
	<h1>Random User</h1>
	<p>Sometimes you need the ability to populate a database with random user information.</p>
	<p>
	<?php
	// require the Faker autoloader
	require_once '/var/www/html/p3/vendor/fzaninotto/faker/src/autoload.php';
	// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

	// use the factory to create a Faker\Generator instance
	$faker = Faker\Factory::create();

	// generate data by accessing properties
	echo $faker->name;
	  // 'Lucy Cechtelar';
	echo $faker->address;
	  // "426 Jordy Lodge
	  // Cartwrightshire, SC 88120-6700"
	echo $faker->text;
	  // Sint velit eveniet. Rerum atque repellat voluptatem quia rerum. Numquam excepturi
	  // beatae sint laudantium consequatur. Magni occaecati itaque sint et sit tempore. Nesciunt
	  // amet quidem. Iusto deleniti cum autem ad quia aperiam.
	  // A consectetur quos aliquam. In iste aliquid et aut similique suscipit. Consequatur qui
	  // quaerat iste minus hic expedita. Consequuntur error magni et laboriosam. Aut aspernatur
	  // voluptatem sit aliquam. Dolores voluptatum est.
	  // Aut molestias et maxime. Fugit autem facilis quos vero. Eius quibusdam possimus est.
	  // Ea quaerat et quisquam. Deleniti sunt quam. Adipisci consequatur id in occaecati.
	  // Et sint et. Ut ducimus quod nemo ab voluptatum.
	?>

	</p>
	<br>
	<p>You can <a href='/'>Return Home</a> from this place.</p>

</body>

</html>
