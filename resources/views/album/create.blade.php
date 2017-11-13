@extends('layouts/master')

@section('title')
	Create Album
@endsection

@section('content')
	<form method="post" action="{{ url('album') }}">
		{{csrf_field()}}
		<input type="text" name="album_title" placeholder="Album" />
		<input type="text" name="img_url" placeholder="Image" />
		<input type="text" name="album_genre" placeholder="Genre" />
		<input type="text" name="release_date" placeholder="Release Date" />
		<input type="text" name="in_stock" placeholder="In Stock" />
		<input type="text" name="price" placeholder="Price" />
		<input type="hidden" name="artistId" value="{{ $id }}" />
		<input type="submit" value="Submit" />
	</form>
@endsection