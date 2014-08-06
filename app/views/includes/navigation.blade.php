	<nav role="navigation" class="navbar navbar-default">
		@section('nav')
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/playdate/search">Fetch a playdate</a></li>
				<li><a href="/playdate/add">Create a playdate</a></li>
				<li><a href="/pet/add">Add your pets</a></li>
				<li><a href="/place/add">Add a place</a></li>
				<li><a href="#">Edit your Profile</a></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
				
				@if (Auth::user())
					<li><a href="/user/dashboard">Your Dashboard</a></li>
					<li><a href="/user/logout">Logout</a></li>
				@else
					<li><a href="/user/dashboard">Log In</a></li>
				@endif
			</ul>
			

			
		</div>
		@show
	</nav>

