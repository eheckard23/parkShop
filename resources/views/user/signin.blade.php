@extends('layouts/master')

@section('title')
	Sign In
@endsection

@section('content')

	<section class="signup-form-container">

		<h1>Sign In</h1>

		<form method="post" action="{{ action('UserController@authLogin') }}">
			{{ csrf_field() }}
			<p class="form-group">
				<input type="email" name="email" placeholder="email address" />
			</p>
			<p class="form-group">
				<input type="password" name="password" placeholder="password" />
			</p>
			<p class="form-control">
				<input type="submit" value="Login" />
			</p>
		</form>
		
	</section>

@endsection