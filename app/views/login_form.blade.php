@extends('templates.template')

@section('pagetitle')
	<h2> Login </h2>
@stop

@section('body')



<form action="{{ url('login') }}" method="post" class="form-horizontal">
	<div class="form-group col-sm-offset-2 col-sm-10">
		<label for="username">Username: </label>
		<input type="text" name="username" placeholder="Username" /> 
	</div>
	<div class="form-group col-sm-offset-2 col-sm-10"> 
		<label for="Password">Password: </label>
		<input type="password" name="password" placholder="Password" /> 
	</div>

	<div class="form-group col-sm-offset-2 col-sm-10">
		<input type="checkbox" name="remember" /> 
		<label for="remember"> Remember Me</label> 
	</div>

	<div class="form-group col-sm-offset-2 col-sm-10"> 
		<input type="submit" value="Login" class="btn btn-primary"/> 
	</div>
	
	<p>Don't have an account?  
		<a href="/user/add" class="btn btn-primary">Create one here</a>
	</p>

</form>

@stop