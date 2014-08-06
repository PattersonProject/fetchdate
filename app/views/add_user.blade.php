@extends ('templates.template')

@section('pagetitle')
<h2>Welcom! <small>Let's get started</small></h2>
@stop

@section('body')

<!--nav tabs-->
<ul class="nav nav-tabs" role="tablist">
  <li class="active"><a href="#user" role="tab" data-toggle="tab">Home</a></li>
  <li><a href="#contact" role="tab" data-toggle="tab">Contact information</a></li>
  <li><a href="#places" role="tab" data-toggle="tab">Places</a></li>
  <li><a href="#settings" role="tab" data-toggle="tab">Settings</a></li>
</ul>

<!-- Tab panes -->


<form action={{ url('user/add') }} method="post" class="form-inline">
	<div class="tab-content">
		<div class="tab-pane active" id="user">
			<div class="form-group">
				<label for="firstName" class="control-label">First Name: </label>
				<input type="text" name="firstName" placeholder="First Name" class="form-control"/>
			
				<label for="lastName" class="control-label">Last Name: </label>
				<input type="text" name="lastName" placeholder="Last Name" class="form-control"/>
			</div>
			<br/>
			<div class="form-group">
				<label for="username" class="control-label">Username: </label>
				<input type="text" name="username" placeholder="Username" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="password" class="control-label">Password: </label>
				<input type="password" name="password" placeholder="Password" class="form-control"/>
			</div>
			<br/>
			<div class="form-group">
				<label for="email" class="control-label">Email: </label>
				<input type="text" name="email" placeholder="Email" class="form-control"/>
			</div>
			<div class="form-group">
				<label for="aboutMe" class="control-label">Tell us about you: </label>
				<input type="text" name="aboutMe" placeholder="About Me" class="form-control"/>
			</div>
		</div>
		<div class="tab-pane active" id="contact">
		
		</div>
	</div>
	<div class="form-group"><input type="submit" value+"Submit!" class="btn btn-primary"/> </div>

</form>


	@stop