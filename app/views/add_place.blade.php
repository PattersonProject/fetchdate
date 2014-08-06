@extends ('templates.template')

@section('pagetitle')
<h2>Add a place</h2>
@stop

@section('body')

<form action={{ url('place/add') }} method="post" class="form-horizontal">
	<h4>Hello <?php  echo ($user['first_name']) ?>  - let's add a place</h4>
	<input type="hidden" name="user_id" value="{{$user['id']}}">

	<div class="form-group">
		<label class="control-label">
			What type of place is this?
		</label>
		<select name="type" class="form-control">
		<option>Residence</option>
		<option>Dog Park</option>
		<option>Other</option>
		
	</div>
	<div class="form-group">
		<br>
		<label for="address">Address: </label>
		<input type="text" name="address" placeholder="Address" class="form-control"/>
	</div>
	<div class="form-group">
		<label for="city">City: </label>
		<input type="text" name="city" placeholder="City" class="form-control"/></div>
	<div class="form-group">
		<label for="state">State: </label>
		<input type="text" name="state" placeholder="State" class="form-control"/></div>
	<div class="form-group">
		<label for="zip">Zip Code: </label>
		<input type="text" name="zip" placeholder="Zip" class="form-control"/></div>

	
	<div class="form-group"><input type="submit" value+"Submit!" class="btn btn-primary"/> </div>

	@stop