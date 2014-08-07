@extends ('templates.template')

@section('pagetitle')
<h2>Make a playdate!</h2>
@stop

@section('body')

<form action={{ url('playdate/add') }} method="post" class="form-horizontal">


	<h3>Hello {{$user['first_name']}}  - let's add a playdate!</h3>
	<input type="hidden" name="user_id" value="<?php echo ($user['id']) ?>" >

	<div class="form-group">
		<div class="col-sm-10 col-sm-offset-1">
		<strong>Where would you like to hold your playdate?</strong>
		<select name="place" id="placeSelect" class="form-control">
			@foreach($user['place'] as $place)
			<option value={{$place->id}}>{{ $place->address }}</option>
			@endforeach
		</select>
		</div>
	<div class="form-group">

	<input type="hidden" name="dummy" value="" >
	<div class="form-group">
		<label for="dateBox" class="col-sm-2 control-label">Date: </label>
		<div class="col-sm-1">
			<input type="text" name="month" placeholder="mm" class="form-control" id="dateBox" >
		</div>
		<div class="col-sm-1">
			<input type="text" name="day" placeholder="dd" class="form-control">
		</div>
		<div class="col-sm-1">
			<input type="text" name="year" placeholder="YYYY" class="form-control">
		</div>
		</div>
	</div> 
	<div class="form-group">
		<label for="start_time" class="col-sm-2 control-label">Start Time: </label>
		<div class="col-sm-2">
			<input type="text" name="start_time" placeholder="Start Time" class="form-control" />
		</div>
		<label for="end_time" class="col-sm-2 control-label">End Time: </label>
		<div class="col-sm-2">
			<input type="text" name="end_time" placeholder="End Time" class="form-control" />
		</div>
	</div>
	<div class="form-group col-sm-12">
		<label for="public" class="control-label">Check for a Public event 
		<input type="checkbox" name="public" value="true" class="form-contol"> 
		</label>
	</div>	
	
	<div class="form-group">
		<label for="additional_info" class="control-label col-sm-2">Anything else to know?</label>
		<div class="col-sm-8">
			<textarea name="additional_info" id="additional_info" rows="4" placeholder="Anything else to know?" class="form-control">
			</textarea>
		</div>
	</div>

	
	<div class="form-group col-sm-10"><input type="submit" value="Submit!" /> </div>

	@stop

