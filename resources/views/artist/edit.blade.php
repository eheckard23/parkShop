@extends('layouts/master')

@section('title')
	Create Artist
@endsection

@section('content')
	<form method="post" action="{{ action('ArtistController@update', $artist['id']) }}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<input type="text" name="artist_name" placeholder={{ $artist['artist_name'] }} />
		<input type="submit" value="Submit" />
	</form>
@endsection