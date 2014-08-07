@extends ('templates.template')

@section('head')
<title>Choose playdates</title>
@stop

@section ('pagetitle')
<p>Select your pets and playdates</p>
@stop

@section ('body')

<h4> Hey {{$user['first_name']}}, select which pets you want to send to which playdates.</h4>

<form action={{url('playdate/added')}} method='post' class="form-horizontal"> 

<div class="col-sm-6">
	<p><strong>Which pets do you want to send to the playdate?</strong></p>
	<div class="from-group">
		<div class="checkbox">
			@foreach ($user['pet'] as $pet)
					<p>
					<input type="checkbox" value={{$pet->id}} name="pet_id[]"> {{ $pet->pet_name}}</p>
				</lable>
			@endforeach
		</div>
	</div>	
</div>
	
<div class="col-sm-6">
	<p><strong>Choose the playdates you want to attend</strong></p>	
	<div class="form-group">
		<div class="checkbox">
			@foreach ($results as $result)
				<p>
				<label for="{{($result->id).'resultBox'}}">
					<input type="checkbox" name="playdate_id[]" value="{{$result->id}}" id="{{($result->id).'resultBox'}}" > 
					{{$result->date}} at {{$result->start_time}}
					  Location: {{$result->place->address}}
				</label>
			</p>
			@endforeach 
		</div>
	</div>
</div>
	<input type="submit" value="Schedule Playdate!" />

	
</form>

@stop

