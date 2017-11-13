@extends('layouts/master')

@section('title')
	Create Album
@endsection

@section('content')
	<form method="post" action="{{ url('album') }}">
		{{csrf_field()}}
		<p class="form-group">
			<input type="text" name="album_title" placeholder="Album" />
		</p>
		<p class="form-group">
			<input type="text" name="img_url" placeholder="Image" />
		</p>
		<p class="form-group">
			<input type="text" name="album_genre" placeholder="Genre" />
		</p>
		<p class="form-group">
			<input type="text" name="release_date" placeholder="Release Date" />
		</p>
		<p class="form-group">
			<input type="text" name="in_stock" placeholder="In Stock" />
		</p>
		<p class="form-group">
			<input type="text" name="price" placeholder="Price" />
		</p>
		<p class="form-group">
		<input type="hidden" name="artistId" value="{{ $id }}" />
			</p>
		<p class="form-control">
			<input type="submit" value="Submit" />
		</p>
	</form>
@endsection