@extends('layouts/master')

@section('title')
	Artists
@endsection

@section('content')

	<h1>Artists</h1>

	<a href="{{ action('ArtistController@create') }}">Create New Artist</a>

	<section id="artist-list-container">
		<ul>
			@foreach($artists as $artist)
				<li class="artist-listed">
					<a href="{{ action('ArtistController@show', $artist['id']) }}">
						<div class="artist-list-thumbnail">
							<img src="{{ $artist['artist_img'] }}" alt="{{ $artist['artist_name'] }}" />
						</div>
					</a>
				</li>
			@endforeach
		</ul>

	</section>

	
@endsection