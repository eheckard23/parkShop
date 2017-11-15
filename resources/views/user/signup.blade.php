@extends('layouts/master')

@section('title')
	Signup
@endsection

@section('content')

	<section class="signup-form-container">

		<h1>Create Your Account</h1>

		<form method="post" action="{{ url('user') }}">
			{{ csrf_field() }}
			<p class="form-group">
				<input type="text" name="name" placeholder="name" />
			</p>
			<p class="form-group">
				<input type="email" name="email" placeholder="email address" />
			</p>
			<p class="form-group">
				<input type="password" name="password" placeholder="password" />
			</p>
			<p class="form-control">
				<input type="submit" value="Create Account" />
			</p>
		</form>

		<p>Already have an account? <a href="{{ url('login') }}">Login</a></p>
		
	</section>

@endsection