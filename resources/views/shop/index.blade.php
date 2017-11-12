@extends('layouts/master')

@section('title')
	Park Shop Cart
@endsection

@section('content')

	{{-- main heading --}}
	<h1>The Latest</h1>

	{{-- latest release --}}
	<section id="latest-release-container">
		
		<div id="latest-release-image-container">
			<img id="latest-release-image" src="{{ $latest['img_url'] }}" alt="{{ $latest['album_title'] }}" />
		</div>

		<div id="latest-release-info">
			<h3>{{ $latest['album_title'] }}</h3>
			<p>Album by {{ $latest['artist']['artist_name'] }}</p>
		</div>

	</section>

	{{-- new releases --}}
	<section id="new-releases-container">
		
		<ul>
			@foreach($albums as $album)
				<li>
					<a href="{{ action('AlbumController@show', $album['id']) }}">
						<img src="{{ $album['img_url'] }}" alt="{{ $album['album_title'] }}" />
						<h3 id="album-title">{{ $album['album_title'] }}</h3>
					</a>
				</li>
			@endforeach
		</ul>

	</section>

	
@endsection