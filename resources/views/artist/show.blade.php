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
					<a href="{{ action('AlbumController@show', $album['id']) }}">{{ $album['album_title'] }}</a>
				</li>
			@endforeach
		</ul>
		<a href="{{ action('AlbumController@create', $artist['id']) }}">Add another album!</a>
	@else
		<p>This artist has no albums yet!</p>
		<a href="{{ action('AlbumController@create', $artist['id']) }}">Add one now!</a>
	@endif

	<a href="{{ action('ArtistController@edit', $artist['id']) }}">Edit</a>

	<form id="delete-form" method="post" action="{{ action('ArtistController@destroy', $artist['id']) }}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit">Delete</button>
	</form>

@endsection