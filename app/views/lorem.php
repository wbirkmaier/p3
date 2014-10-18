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
	<p>
	<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs(5);
		echo implode('<p>', $paragraphs);
	?>
	</p>
	<p>You can <a href='/'>Return Home</a> from this place.</p>

</body>

</html>
