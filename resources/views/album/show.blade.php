@extends('layouts/master')

@section('title')
	Albums
@endsection

@section('content')

	<section class="album-container">
		
		<section class="album-heading">

			<h1 class="album-title">{{ $album['album_title'] }}</h1>
			<p class="album-artist">Album by {{ $album['artist']['artist_name'] }}</p>

			<p class="album-price">${{ $album['price'] }}</p>

		</section>
		

		<section class="album-image">

			<div class="album-image-container">
				<img src="{{ $album['img_url'] }}" alt="{{ $album['album_title'] }}" />
			</div>

		</section>

		<a class="add-to-cart" href="#">Add to Cart</a>

	</section>

	

		

	@if (count($album['tracks']) > 0)
	
	<section class="album-tracks">
		
	<h3>Tracks</h3>
		<ul>
			@foreach ($album['tracks'] as $key=>$track)
				<li>
					<span class="track-number">{{ $key + 1 }}</span>
					<span class="track-title">{{ $track['track_title'] }}</span>
					<span class="track-length">{{ $track['track_length'] }}</span> 
				</li>
			@endforeach
		</ul>
		<a href="{{ action('TrackController@create', $album['id']) }}">Add More Tracks</a>

	</section>

		
	@else
		<p>This album has no tracks yet!</p>
		<a href="{{ action('TrackController@create', $album['id']) }}">Add A Track Now!</a>
	@endif

	

@endsection