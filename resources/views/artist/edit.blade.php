@extends('layouts/master')

@section('title')
	Create Artist
@endsection

@section('content')
	<form method="put" action="{{ url('artist/update', $id) }}">
		{{csrf_field()}}
		<input type="text" name="artistName" placeholder={{ $artist->artist_name }} />
		<input type="submit" value="Submit" />
	</form>
@endsection