@extends('layouts/master')

@section('title')
	Albums
@endsection

@section('content')
	<h1>Albums</h1>

	<a href="{{ url('artist') }}">Create New Album</a>

	<ul>
		@foreach($albums as $album)
			<li><a href="{{ action('AlbumController@show', $album['id']) }}">{{$album['album_title']}}</a></li>
		@endforeach
	</ul>
@endsection