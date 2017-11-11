@extends('layouts/master')

@section('title')
	Create Track
@endsection

@section('content')
	<form method="post" action="{{ url('track') }}">
		{{csrf_field()}}
		<input type="text" name="track_title" placeholder="Track Name" />
		<input type="text" name="track_length" placeholder="Track Length" />
		<input type="hidden" name="albumId" value="{{ $album['id'] }}" />
		<input type="submit" value="Submit" />
	</form>
@endsection