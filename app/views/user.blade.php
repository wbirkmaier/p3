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

                <label for="userLength"><b>Enter a number between 1 and 99 for the number of random users to create.</b></label><br>
                <input type="text" id="userLength" name="userLength" placeholder="Enter Number"><br>
                <br>
                <input type="checkbox" id="numberChar" name="numberChar" value="true" <?php if(isset($_POST["numberChar"])) echo "checked='checked'"; ?> >
                <label for="numberChar"> Include Address</label><br>

                <input type="checkbox" id="specialChar" name="specialChar" value="true" <?php if(isset($_POST["specialChar"])) echo "checked='checked'"; ?> >
                <label for="specialChar"> Include Biography</label><br>
                <br>
                <input type="submit" value="Generate Text">

        </fieldset>

        <fieldset>
                <legend>Your random user(s) are:</legend>
                <p id="passwordOut"><?=$appOut->name?><br><?=$appOut->address?><br><?=$appOut->text?></p>
        </fieldset>

        </form>

	</p>
	<br>
	<p>You can <a href='/'>Return Home</a> from this place.</p>

</body>

</html>
