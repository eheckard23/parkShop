@extends('layouts/master')

@section('title')
	Albums
@endsection

@section('content')
	<h1>{{ $album['album_title'] }}</h1>

	<section id="album-image">

		<div>
			<img src="{{ $album['img_url'] }}" alt="{{ $album['album_title'] }}" />
		</div>
		
		

	</section>

	@if (count($album['tracks']) > 0)
		<h3>Tracks</h3>
		<ul>
			@foreach ($album['tracks'] as $track)
				<li>
					<a href="{{ action('TrackController@show', $track['id']) }}">{{ $track['track_title'] }}</a>
					{{ $track['track_length'] }}
				</li>
			@endforeach
		</ul>
		<a href="{{ action('TrackController@create', $album['id']) }}">Add More Tracks</a>
	@else
		<p>This album has no tracks yet!</p>
		<a href="{{ action('TrackController@create', $album['id']) }}">Add A Track Now!</a>
	@endif

	

@endsection