	<nav role="navigation" class="navbar navbar-default">
		@section('nav')
		<div id="navbarCollapse" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li><a href="/playdate/search">Fetch a playdate</a></li>
				<li><a href="/add_playdate">Create a playdate</a></li>
				<li><a href="/pet/add">Add your pets</a></li>
				<li><a href="/add_place">Add a place</a></li>
				<li><a href="#">Edit your Profile</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/user/dashboard">Log In / Sign up </a></li>
			</ul>
		</div>
		@show
	</nav>

