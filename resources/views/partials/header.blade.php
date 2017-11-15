<header>
	<nav id="navigation">
		<a id="home-link" href="/">Shop</a>
		<ul id="navigation-right">
			@if (Auth::check())

				<li><a href="#">Profile</a></li>
				<li><a href="{{ url('logout') }}">Logout</a></li>
			
			@else
			
				<li><a href="{{ action('UserController@create') }}">Sign Up</a></li>

			@endif
			<li><a href="{{ url('cart') }}">Cart</a></li>
			<li><a href="{{ url('session/delete') }}">Delete Session</a></li>
		</ul>
	</nav>
</header>