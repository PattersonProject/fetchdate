@extends ('templates.template')

@section('pagetitle')
<h2>Welcome! <small>Let's get started</small></h2>
@stop

@section('body')

<form action={{ url('user/add') }} method="post" class="form-horizontal">
	
		<div class="tab-pane active" id="user">
			<h4>Tell us about you!</h4>
			<div class="form-group">
				<label for="firstNameBox" class="control-label col-sm-2">First Name: </label>
				<div class="col-sm-3">
					<input type="text" name="firstName" placeholder="First Name" id="firstNameBox" class="form-control"/>
				</div>
				<label for="lastNameBox" class="control-label col-sm-2">Last Name: </label>
				<div class="col-sm-3">
					<input type="text" name="lastName" placeholder="Last Name" id="lastNameBox" class="form-control"/>
				</div>
			</div>
			<br/>
			<div class="form-group">
				<label for="usernameBox" class="control-label col-sm-2">Username: </label>
				<div class="col-sm-8">
					<input type="text" name="username" placeholder="Username" id="usernameBox" class="form-control"/>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="control-label col-sm-2">Password: </label>
				<div class="col-sm-8">
					<input type="password" name="password" placeholder="Password" class="form-control"/>
				</div>
			</div>
			<br/>
			<div class="form-group">
				<label for="email" class="control-label col-sm-2">Email: </label>
				<div class="col-sm-8">
					<input type="text" name="email" placeholder="Email" class="form-control"/>
				</div>
			</div>
			<div class="form-group">
				<label for="aboutMe" class="control-label col-sm-2">Tell us about you: </label>
				<div class="col-sm-8">
					<textarea name="aboutMe" rows=3 placeholder="About Me" class="form-control"></textarea>
				</div>
			</div>
		</div>
		
	<div class="form-group"><input type="submit" value+"Submit!" class="btn btn-primary"/> </div>

</form>


	@stop