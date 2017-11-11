@extends('layouts/master')

@section('title')
	Create Artist
@endsection

@section('content')
	<form method="post" action="{{ url('artist') }}">
		{{csrf_field()}}
		<input type="text" name="artist_name" placeholder="Artist Name" />
		<input type="submit" value="Submit" />
	</form>
@endsection