@extends ('templates.template')

@section('pagetitle')
<h2>Hi {{$user['first_name']}} <small>Welcome to your dashboard</small></h2>
@stop

@section('body')

<div class="col-sm-12 pull-left">
	Parent
</div>
	<div class="col-xs-6">
		<h4> Your Pets: </h4>
		<ul>
		@foreach($user['pet'] as $pet)
		<li>
			{{$pet['pet_name']}} Age {{$pet['birthdate']}}
		</li>
		@endforeach
	</ul>
	<a href="../pet/add" class="btn btn-default">Add a dog</a>
	<a href="#" class="btn btn-default">Remove a dog</a>
	</div>

	<div class="col-xs-6 pull-left">
		<h4> Your Meeting places: </h4>
		<ul>
			@foreach($user['place'] as $place)
			<li>
				{{$place['address']}} <strong>Type: </strong>{{$place['type']}}
			</li>
			@endforeach
		</ul>

		<a href="../place/add" class="btn btn-default">Add a dog</a>
		<a href="#" class="btn btn-default">Remove a dog</a>Places

	</div>
	
	<div class="col-xs-6 pull-right">
		upcoming playdates

		

		<a href="../playdate/add" class="btn btn-default">Add a dog</a>
		<a href="#" class="btn btn-default">Remove a dog</a>Places

	</div>
	


@stop