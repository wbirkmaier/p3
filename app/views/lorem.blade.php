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
	<h1>Lorem Ipsum</h1>
	<p>Lorem Ipsum is dummy text that is used in order to facilitate page layouts, where text is needed, but the focus is on the layout rather than the content. Most viewers have a tendancy to focus on the text rather than the layout, this prevents that.</p>

	<form action="{{ url('/lorem-ipsum-generate') }}" method="post">

	<fieldset>

		<legend>Lorem Ipsum Generator</legend>

		<label for="loremLength"><b>Enter a number between 1 and 99 for the number of lorem ipsum paragraphs to generate below. A larger number or blank field will generate 1 to 3 paragraphs randomly.</b><br></label>
		<br>
		<input type="text" id="loremLength" name="loremLength" placeholder="Enter Number"><br>
		<br>
		<input type="submit" value="Generate Text">

	</fieldset>

	<fieldset>
                <legend>Your lorem ipsum text is:</legend>
		<p id="passwordOut"><?=$appOut?></p> 
	</fieldset>

	</form>
	<p>You can <a href='/'>Return Home</a> from this place.</p>

</body>

</html>
