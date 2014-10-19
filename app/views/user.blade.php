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

	<form action="{{ url('/random-user-generate') }}" method="post">

        <fieldset>

                <legend>Random User Generator</legend>

                <label for="userLength"><b>Enter a number between 1 and 99 for the number of random users to create or click the generate button for a random amount.</b></label><br>
                <input type="text" id="userLength" name="userLength" placeholder="Enter Number"><br>
                <br>
                <input type="checkbox" id="includeAddress" name="includeAddress" value="true" <?php if(isset($_POST["includeAddress"])) echo "checked='checked'"; ?> >
                <label for="includeAddress"> Include Address</label><br>

                <input type="checkbox" id="includeBirth" name="includeBirth" value="true" <?php if(isset($_POST["includeBirth"])) echo "checked='checked'"; ?> >
                <label for="includeBirth"> Include Birthday</label><br>
                <br>
                <input type="submit" value="Generate Users">

        </fieldset>

        <fieldset>
                <legend>Your random user(s) are:</legend>
		<p id="userOut"><?=$appOut?></p>
		<br>
        </fieldset>

        </form>

	<p>You can <a href='/'>Return Home</a> from this place.</p>

</body>

</html>
