@extends('layouts/master')

@section('title')
	Create Artist
@endsection

@section('content')
	<form method="post" action="{{ url('artist') }}">
		{{csrf_field()}}
		<input type="text" name="artist_name" placeholder="Artist" />
		<input type="text" name="artist_site" placeholder="Site" />
		<input type="text" name="artist_genre" placeholder="Genre" />
		<input type="textarea" name="artist_bio" placeholder="Bio" />
		<input type="text" name="artist_img" placeholder="Image" />
		<input type="submit" value="Submit" />
	</form>
@endsection