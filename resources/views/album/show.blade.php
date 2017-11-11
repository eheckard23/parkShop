@extends('layouts/master')

@section('title')
	Albums
@endsection

@section('content')
	<h1>{{ $album['album_title'] }}</h1>

	@if (count($album['tracks']) > 0)
		<h3>Tracks</h3>
		<ul>
			@foreach ($album['tracks'] as $track)
				<li>
					{{ $track['track_title'] }}
					{{ $track['track_length'] }}
				</li>
			@endforeach
		</ul>
	@else
		<p>This album has no tracks yet!</p>
		<a href="{{ action('TrackController@create', $album['id']) }}">Add A Track Now!</a>
	@endif


@endsection