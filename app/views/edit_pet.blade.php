@extends ('templates.template')

@section('head')
<title>Edit Dogs</title>
@stop

@section('pagetitle')
<h2>Edit your dogs!</h2>
@stop

@section('body')

<form action={{ url('pet/edit') }} method="post" class="form-horizontal">
	<h4> Hello {{$user['first_name']}}  - Go ahead and edit the information you want to.  Hit submit when you're done and your pet information will be updated</h4>
	<input type="hidden" name="user_id" value={{$user['id']}} >
	<input type="hidden" name="pets" value={{$pets}}>
	
	@foreach($pets as $pet)
	<!-- appended id's with $pet['id'] to keep them unqiue and be able to refernce them in controller -->
	<input type="hidden" name="pet_id{{$pet['id']}}" value={{$pet['id']}}>
	<div class="panel panel-default">
		<div class="panel-heading">
			{{$pet['pet_name']}}
		</div>
		<div class="panel-body">
			<label>
				<input type="checkbox" name="remove{{$pet['id']}}" value="true">
				Check this box to remove {{$pet['pet_name']}} from Fetchdate
			</label>
			<div class="form-group">
				<label for="pet_nameBox{{$pet['id']}}" class="col-sm-2 control-label">Pet Name: </label>
				<div class="col-sm-4">
					<input type="text" name="pet_name{{$pet['id']}}" value="{{$pet['pet_name']}}" id="pet_nameBox{{$pet['id']}}" class="form-control"/>
				</div>
			</div>
			<div class="form-group">_
				<label for="breedBox{{$pet['id']}}" class="col-sm-2 control-label">Breed: </label>
				<div class="col-sm-4">
					<input type="text" name="breed{{$pet['id']}}" value="{{$pet['breed']}}" id="breedBox{{$pet['id']}}" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="weightBox{{$pet['id']}}" class="col-sm-2 control-label">Weight: </label>
				<div class="col-sm-4">
					<input type="text" name="weight{{$pet['id']}}" value="{{$pet['weight']}}" id="weightBox{{$pet['id']}}" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="birthdateBox{{$pet['id']}}" class="col-sm-2 control-label">Date of Birth: </label>
				<div class="col-sm-4">
					<input type="text" name="birthdate{{$pet['id']}}" value="{{date('m-d-Y',$pet['birthdate'])}}" id="birthdateBox{{$pet['id']}}" class="form-control" />
				</div>
			</div>
		</div>
	</div>
@endforeach
	
	<div class="form-group">
		<input type="submit" value+"Submit!" />
	 </div>

	 @stop