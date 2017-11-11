@extends('layouts/master')

@section('title')
	Artists
@endsection

@section('content')
	<h1>{{ $artist['artist_name'] }}</h1>

	@if (count($artist['albums']) > 0)
		<h3>Albums</h3>
		<ul>
			@foreach ($artist->albums as $album)
				<li>
					{{ $album['title'] }}
				</li>
			@endforeach
		</ul>
	@else
		<p>This artist has no albums yet!</p>
		<a href="{{ action('AlbumController@create', $artist['id']) }}">Add one now!</a>
	@endif


@endsection