@extends ('templates.template')



@section('pagetitle')
<h2>Add a pet!</h2>
@stop

@section('body')

<form action={{ url('pet/add') }} method="post" class="form-horizontal">
	<h4> Hello <?php  echo $user['first_name']; ?>  - let's add a pet</h4>
	<input type="hidden" name="user_id" value="<?php echo ($user['id']) ?>" >

	<div class="form-group">
		<label for="pet_nameBox" class="col-sm-2 control-label">Pet Name: </label>
		<div class="col-sm-4">
			<input type="text" name="pet_name" placeholder="Pet Name" id="pet_nameBox" class="form-control"/>
		</div>
	</div>
	<div class="form-group">
		<label for="breedBox" class="col-sm-2 control-label">Breed: </label>
		<div class="col-sm-4">
			<input type="text" name="breed" placeholder="Breed" id="breedBox" class="form-control" />
		</div>
	</div>
	<div class="form-group">
		<label for="weightBox" class="col-sm-2 control-label">Weight: </label>
		<div class="col-sm-4">
			<input type="text" name="weight" placeholder="Weight" id="weightBox" class="form-control" />
		</div>
	</div>
	<div class="form-group">
		<label for="birthdateBox" class="col-sm-2 control-label">Date of Birth: </label>
		<div class="col-sm-4">
			<input type="text" name="birthdate" placeholder="Birthdate" id="birthdateBox" class="form-control" />
		</div>
	</div>

	
	<div class="form-group">
		<input type="submit" value+"Submit!" />
	 </div>

	 @stop