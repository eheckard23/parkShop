@extends('layouts/master')

@section('title')
	Create Album
@endsection

@section('content')
	<form method="post" action="{{ url('album') }}">
		{{csrf_field()}}
		<input type="text" name="album_title" placeholder="Album Name" />
		<input type="text" name="img_url" placeholder="Album Image" />
		<input type="hidden" name="artistId" value="{{ $id }}" />
		<input type="submit" value="Submit" />
	</form>
@endsection