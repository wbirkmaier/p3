@extends('_master')

@section('active')

        <li><a href="/">Home</a></li>
        <li class="active"><a href="/lorem-ipsum-generate">Lorem Ipsum Generator</a></li>
        <li><a href="/random-user-generate">Random User Generator</a></li>

@stop

@section('content')

	<h2>Lorem Ipsum</h2>
	<p>Lorem Ipsum is dummy text that is used in order to facilitate page layouts, where text is needed, but the focus is on the layout rather than the content. Most viewers have a tendancy to focus on the text rather than the layout, this prevents that.</p>

	{{Form::open(array('url'=>'/lorem-ipsum-generate','method'=>'post'))}}

	<fieldset>

		<legend>Lorem Ipsum Generator</legend>

		<label for="loremLength"><b>Enter a number between 1 and 99 for the number of lorem ipsum paragraphs to generate below. A number outside the range or blank field will generate 1 to 3 paragraphs randomly.</b><br></label>
		<br>
		<input type="text" id="loremLength" name="loremLength" placeholder="Enter Number"><br>
		<br>
		<input type="submit" value="Generate Text">

	</fieldset>

	<fieldset>
                <legend>Your lorem ipsum text is:</legend>
		<p id="loremOut">{{$appOut}}</p> 
	</fieldset>

	{{Form::close()}}	

	<p>You can <a href='/'>Return Home</a> from this place.</p>

@stop
