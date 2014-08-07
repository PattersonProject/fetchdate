@extends ('templates.template')

@section('head')
<title>Your Dashboard</title>
@stop

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
					{{$pet['pet_name']}} <strong>Date of Birth: </strong> {{date('m-d-Y',$pet['birthdate'])}}
				</li>
				@endforeach
			</ul>
			<a href="../pet/add" class="btn btn-default">Add a dog</a>
			<a href="../pet/edit" class="btn btn-default">Edit your dogs</a>
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
			
		</div>
	</div>

</div>
	
	<div class="col-xs-8 pull-right">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Playdates that you're hosting</h4>
			</div>
			<div class="panel-body">
			
				@foreach($user['playdate'] as $playdate)
				<li>
					{{$playdate['date']}} <strong>Time: </strong>{{$playdate['start_time']}}
				</li>
				@endforeach


				<a href="../playdate/add" class="btn btn-default">Add a playdate</a>
				<a href="../playdate/search" class="btn btn-default">Fetch a playdate</a>
				
			</div>
		</div>
	</div>
	


@stop