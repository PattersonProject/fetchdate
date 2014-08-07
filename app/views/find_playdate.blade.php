@extends ('templates.template')

@section('head')
<title>Fetch a playdate</title>
@stop

@section('pagetitle')
<h2>Let's fetch a playdate!</h2>
@stop

@section('body')

<h4>Hello {{$user['first_name']}}<h4>
<h4>Let's find a playdate for your dogs!</h4>

<form action={{url('playdate/results')}} method='get' class="form-inline">

<p>Find a playdate within
	<select name='distance' class="form-control">
		<option>.5</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>10</option>
		<option>20</option>
		<option>50</option>
	</select>
	 miles of your 
	 <select name='placeFrom' class="form-control">
	 	@foreach ($user['place'] as $place)
	 	<option value={{$place->id}} > {{$place->type}} ({{$place->address}})</option> 
	 @endforeach
	</select>

</p> 

<input type="submit" value="Find a Playdate!" />

@stop

</form>

