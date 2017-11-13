@extends('layouts/master')

@section('title')
	Create Artist
@endsection

@section('content')
	<form method="post" action="{{ url('artist') }}">
		{{csrf_field()}}
		<p class="form-group">
			<input type="text" name="artist_name" placeholder="Artist" />
		</p>
		<p class="form-group">
			<input type="text" name="artist_site" placeholder="Site" />
		</p>
		<p class="form-group">
			<input type="text" name="artist_genre" placeholder="Genre" />
		</p>
		<p class="form-group">
			<textarea name="artist_bio" placeholder="Bio"></textarea>
		</p>
		<p class="form-group">
			<input type="text" name="artist_img" placeholder="Image" />
		</p>
		<p class="form-control">
			<input type="submit" value="Submit" />
		</p>
	</form>
@endsection