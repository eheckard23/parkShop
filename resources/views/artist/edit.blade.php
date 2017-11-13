@extends('layouts/master')

@section('title')
	Create Artist
@endsection

@section('content')
	<form method="post" action="{{ action('ArtistController@update', $artist['id']) }}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		
		<p class="form-group">
			<input type="text" name="artist_name" value="{{ $artist['artist_name'] }}" />
		</p>
		<p class="form-group">
			<input type="text" name="artist_site" value="{{ $artist['artist_site'] }}" />
		</p>
		<p class="form-group">
			<input type="text" name="artist_genre" value="{{ $artist['artist_genre'] }}" />
		</p>
		<p class="form-group">
			<input type="textarea" name="artist_bio" value="{{ $artist['artist_bio'] }}" />
		</p>
		<p class="form-group">
			<input type="text" name="artist_img" value="{{ $artist['artist_img'] }}" />
		</p>
		<p class="form-control">
			<input type="submit" value="Submit" />
		</p>
		
	</form>
@endsection