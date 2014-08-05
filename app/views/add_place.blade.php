@extends ('templates.template')

@section('pagetitle')
<h2>Add a place</h2>
@stop

@section('body')

<form action={{ url('place/add') }} method="post">
	Hello <?php  echo ($user['first_name']) ?>  - let's add a place
	<input type="hidden" name="user_id" value="<?php echo $user['id']; ?>" >

	<p>What type of place is this?</p>
	<p><select name="type">
		<option>Residence</option>
		<option>Dog Park</option>
		<option>Other</option>
	</p>
	<p><label for="address">Address: </label></p>
	<p><input type="text" name="address" placeholder="Address" /></p>
	<p><label for="city">City: </label></p>
	<p><input type="text" name="city" placeholder="City" /></p>
	<p><label for="state">State: </label></p>
	<p><input type="text" name="state" placeholder="State" /></p>
	<p><label for="zip">Zip Code: </label></p>
	<p><input type="text" name="zip" placeholder="Zip" /></p>

	
	<p><input type="submit" value+"Submit!" /> </p>

	@stop