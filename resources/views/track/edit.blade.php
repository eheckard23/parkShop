@extends('layouts/master')

@section('title')
	Edit Track
@endsection

@section('content')
	<form method="post" action="{{ action('TrackController@update', $track['id']) }}">
		{{ method_field('PUT') }}
		{{ csrf_field() }}
		<input type="text" name="track_title" value={{ $track['track_title'] }} />
		<input type="text" name="track_length" value={{ $track['track_length'] }} />
		<input type="hidden" name="albumId" value={{ $track['album_id'] }} />
		<input type="submit" value="Submit" />
	</form>
@endsection