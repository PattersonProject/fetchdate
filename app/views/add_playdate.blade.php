<form action={{ url('add_playdate') }} method="post">


	Hello {{$user['first_name']}}  - let's add a playdate
	<input type="hidden" name="user_id" value="<?php echo ($user['id']) ?>" >

	<p>Where would you like to hold your playdate?</p>
		<p><select name="place">
			@foreach($places as $place)
			<option>{{ $place->address }}</option>
			@endforeach
		</p>

	<input type="hidden" name="dummy" value="" >
	<p><label for="date">Date: </label></p>
	<p><input type="text" name="date" placeholder="Date" /></p> make this a datepicker
	<p><label for="start_time">Start Time: </label></p>
	<p><input type="text" name="start_time" placeholder="Start Time" /></p>
	<p><label for="end_time">End Time: </label></p>
	<p><input type="text" name="end_time" placeholder="End Time" /></p>
	<p><label for="public">Check for a Public event 
		<input type="checkbox" name="public" value="true"> 
		</label></p>	
	<p><label for="owners_invited">Are owners invited?: Check for yes 
		<input type="checkbox" name="owners_invited" value="true"> 
		</label></p>
	<p><textarea name="additional_info" rows="4" cols="50" 
		placeholder="Anything else to know?"></textarea></p>

	
	<p><input type="submit" value="Submit!" /> </p>

