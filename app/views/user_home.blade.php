@extends ('templates.template')

@section('pagetitle')
<h2>Hi {{$user['first_name']}} <small>Welcome to your dashboard</small></h2>
@stop

@section('body')

<div class="col-xs-4">

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4> Your Pets: </h4>
		</div>
		<div class="panel-body">
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
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h4> Your Meeting places: </h4>
		</div>
		<div class="panel-body">
			<ul>
				@foreach($user['place'] as $place)
				<li>
					{{$place['address']}} <strong>Type: </strong>{{$place['type']}}
				</li>
				@endforeach
			</ul>

			<a href="../place/add" class="btn btn-default">Add a meeting place</a>
			<a href="#" class="btn btn-default">Remove a meeting place</a>
		</div>
	</div>

</div>
	
	<div class="col-xs-8 pull-right">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>upcoming playdates</h4>
			</div>
			<div class="panel-body">
				@foreach($user['playdate'] as $playdate)
				<li>
					{{$playdate['date']}} <strong>Time: </strong>{{$playdate['start_time']}}
				</li>
				@endforeach


				<a href="../playdate/add" class="btn btn-default">Add a playdate</a>
				<a href="#" class="btn btn-default">Edit playdates</a>
			</div>
		</div>
	</div>
	


@stop