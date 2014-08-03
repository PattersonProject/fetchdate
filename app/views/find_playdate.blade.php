<h4>Hello {{$user['first_name']}}<h4>
<h4>Let's find a playdate for your dogs!</h4>

<form action={{url('playdate/results')}} method='get'>

<p>Find a playdate within
	<select name='distance'>
		<option>.5</option>
		<option>1</option>
		<option>2</option>
		<option>5</option>
		<option>10</option>
		<option>50</option>
	</select>
	 miles of your 
	 <select name='placeFrom'>
	 	@foreach ($user['place'] as $place)
	 	<option value={{$place->id}} > {{$place->type}} ({{$place->address}})</option> 
	 @endforeach
	</select>

</p> 

<input type="submit" value="Find a Playdate!" />

@foreach ($user['pet'] as $pet)
<p>Hello {{ $pet->pet_name}}</p>
@endforeach

{{$user}}

</form>

