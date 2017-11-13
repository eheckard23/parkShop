@extends('layouts/master')

@section('title')
	Albums
@endsection

@section('content')

	<h1>{{ $title }}</h1>

	<section id="genre-albums-container">
		<ul>
			@foreach($albums as $album)
				<li>
					<a href="{{ action('AlbumController@show', $album->id) }}">
						<div id="genre-albums-thumbnail">
							<img src="{{ $album->img_url }}" alt="{{ $album->album_title }}" />
						</div>
						<h3>{{ $album->album_title }}</h3>
					</a>
				</li>
			@endforeach
		</ul>
	</section>

	
@endsection