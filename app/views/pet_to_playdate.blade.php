<p>You made it to the form</p>

<form action={{url('playdate/added')}} method='post'> 

	{{$user['first_name']}}



	<p>Which pets do you want to send to the playdate</p>
	@foreach ($user['pet'] as $pet)
		<lable for={{$pet->name}}>
			<input type="checkbox" value={{$pet->id}} name="pet_id[]"> {{ $pet->pet_name}}</p>
		</lable>
	@endforeach
	<p>Choose the playdates you want to attend</p>
		
	@foreach ($results as $result)
	<label for="{{($result->id).'resultBox'}}">
		<input type="checkbox" name="playdate_id[]" value="{{$result->id}}" id="{{($result->id).'resultBox'}}" > 
		{{$result->date}} at {{$result->start_time}}
		  Location: {{$result->place->address}}
	</label>
	@endforeach 
	
	<input type="submit" value="Schedule Playdate!" />

	
</form>



