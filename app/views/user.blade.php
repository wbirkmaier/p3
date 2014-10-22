@extends('_master')

@section('active')

        <li><a href="/">Home</a></li>
        <li><a href="/lorem-ipsum-generate">Lorem Ipsum Generator</a></li>
        <li class="active"><a href="/random-user-generate">Random User Generator</a></li>

@stop

@section('content')
	
	<h2>Random User</h2>
	<p>Sometimes you need the ability to populate a database with random user information.</p>
	<br>

	{{Form::open(array('url'=>'/random-user-generate','method'=>'post'))}}

        <fieldset>

                <legend>Random User Generator</legend>

		{{Form::label('userLength','Enter a number between 1 and 99 for the number of random users to create or click the generate button for a random amount. A number outside the range or blank field will generate 1 to 10 users randomly.')}}
		<br>
		{{Form::text('userLength','',array('id'=>'userLength','placeholder'=>'Enter Number'))}}
		<br>
		<br>
		<input type="checkbox" id="includeAddress" name="includeAddress" value="true" <?php if(isset($_POST["includeAddress"])) echo "checked='checked'"; ?> >
		{{Form::label('includeAddress','Include Address')}}
		<br>
		<input type="checkbox" id="includeBirth" name="includeBirth" value="true" <?php if(isset($_POST["includeBirth"])) echo "checked='checked'"; ?> >
		{{Form::label('includeBirth','Include Birthday')}}
		<br>
		<br>
		{{Form::submit('Generate Users')}}

        </fieldset>

        <fieldset>
                <legend>Your random user(s) are:</legend>
		<p id="userOut">{{$appOut}}</p>
        </fieldset>

	{{Form::close()}}

	<p>You can <a href='/'>Return Home</a> from this place.</p>


@stop
