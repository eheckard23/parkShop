@extends('layouts/master')

@section('title')
	Artists
@endsection

@section('content')
	<h1>Artists</h1>

	<a href="{{ action('ArtistController@create') }}">Create New Artist</a>

	<ul>
		@foreach($artists as $artist)
			<li><a href="{{ action('ArtistController@show', $artist['id']) }}">{{$artist['artist_name']}}</a></li>
		@endforeach
	</ul>
@endsection