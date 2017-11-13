@extends('layouts/master')

@section('title')
	Artists
@endsection

@section('content')

	<section id="artist-image">
		<div id="artist-image-container">
			<img src="{{ $artist['artist_img'] }}" alt="{{ $artist['artist_name'] }}" />
		</div>
	</section>
	<h1>{{ $artist['artist_name'] }}</h1>

	@if (count($artist['albums']) > 0)
		<h3>Albums</h3>

		<section id="artist-albums-container">
			<ul>
				@foreach ($artist->albums as $album)
					<li class="artist-album">
						<a href="{{ action('AlbumController@show', $album['id']) }}">
							<div class="artist-album-image">
								<img src="{{ $album['img_url'] }}" alt="{{ $album['album_title'] }}" />
							</div>
							<h3>{{ $album['album_title'] }}</h3>
						</a>
					</li>
				@endforeach
			</ul>
		</section>
		
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