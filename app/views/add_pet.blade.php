@extends ('templates.template')

@section('pagetitle')
<h2>Add a pet!</h2>
@stop

@section('body')

<form action={{ url('pet/add') }} method="post" class="form-horizontal">
	<h4> Hello <?php  echo $user['first_name']; ?>  - let's add a pet</h4>
	<input type="hidden" name="user_id" value="<?php echo ($user['id']) ?>" >

	<div class="form-group">
		<label for="pet_name" class="col-sm-2 control-label">Pet Name: </label>
		<input type="text" name="pet_name" placeholder="Pet Name" class="form-control"/>
	</div>
	<div class="form-group">
		<label for="breed" class="col-sm-2 control-label">Breed: </label>
		<input type="text" name="breed" placeholder="Breed" />
	</div>
	<div class="form-group">
		<label for="weight" class="col-sm-2 control-label">Weight: </label>
		<input type="text" name="weight" placeholder="Weight" />
	</div>
	<div class="form-group">
		<label for="birthdate" class="col-sm-2 control-label">Date of Birth: </label>
		<input type="text" name="birthdate" placeholder="Birthdate" id="birthdate" />
	</div>

	
	<div class="form-group">
		<input type="submit" value+"Submit!" />
	 </div>

	 @stop