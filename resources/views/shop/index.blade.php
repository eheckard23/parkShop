@extends('layouts/master')

@section('title')
	Park Shop Cart
@endsection

@section('content')

	{{-- main heading --}}
	<h1>The Latest</h1>

	{{-- latest release --}}
	<section id="latest-release">
		<img id="latest-release-image" src="{{ $latest['img_url'] }}" alt="{{ $latest['album_title'] }}" />
	</section>

	<ul>
		@foreach($albums as $album)
			<li>
				<a href="{{ action('AlbumController@show', $album['id']) }}">
					<img src="{{ $album['img_url'] }}" alt="{{ $album['album_title'] }}" />
					<h3>{{ $album['album_title'] }}</h3>
				</a>
			</li>
		@endforeach
	</ul>
@endsection