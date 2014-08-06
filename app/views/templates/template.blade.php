<!DOCTYPE html>
<html lang='en'>
<head> 
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

	@section('head')
	<title>Welcome To Fetchdate </title>
	@show
</head>
<body>
	<div class="container">
	<div class="header">
		<h1 class="hidden-xs">Fetchdate <small>The doggie playdate finder</small></h1>
		@yield('pagetitle')
	</div>

	@section('navbar')
	@include('includes.navigation')
	@show

	@if(Session::get('flash_message'))
        <div class='flash-message'>{{ Session::get('flash_message') }}</div>
    @endif

	<div class="content">
		@yield('body')
	</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

</body>