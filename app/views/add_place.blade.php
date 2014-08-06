@extends ('templates.template')

@section('pagetitle')
<h2>Add a place</h2>
@stop

@section('body')

<form action={{ url('place/add') }} method="post" class="form-horizontal" role="form">
	<h4>Hello <?php  echo ($user['first_name']) ?>  - let's add a place</h4>
	<input type="hidden" name="user_id" value="{{$user['id']}}">
		
		<div class="form-group">
			<label class="col-sm-3 control-label" for="typeSelect">
				What type of place is this?
			</label>
			<div class="col-sm-5">
			<select name="type" id="typeSelect" class="form-control">
			<option>Residence</option>
			<option>Dog Park</option>
			<option>Other</option>
			</select>
			</div>
			
		</div>
	

		<div class="form-group">
			<label for="addressBox" class="control-label col-sm-1">Address: </label>
			<div class="col-sm-7">
				<input type="text" name="address" placeholder="Address" id="addressBox" class="form-control"/>
			</div>
			
		</div>
		<div class="form-group">
			<label for="cityBox" class="control-label col-sm-1">City: </label>
			<div class="col-sm-2">
				<input type="text" name="city" placeholder="City" id="cityBox" class="form-control "/>
			</div>


			<label for="stateBox" class="control-label col-sm-1">State: </label>
			<div class="col-sm-1">
				<input type="text" name="state" placeholder="State" class="form-control"/>
			</div>
			<label for="zipBox" class="control-label col-sm-1">Zip Code: </label>
			<div class="col-sm-2">
				<input type="text" name="zip" placeholder="Zip" class="form-control"/>
			</div>
		</div>
	

	
	<div class="form-group"><input type="submit" value+"Submit!" class="btn btn-primary"/> </div>

	@stop