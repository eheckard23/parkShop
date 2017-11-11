@extends('layouts/master')

@section('title')
	Artists
@endsection

@section('content')
	<h1>Artists</h1>
	<ul>
		@foreach($artists as $artist)
			<li>{{$artist['artist_name']}}</li>
			<a href="{{url('artist/edit', $artist['id'])}}">Edit</a>
		@endforeach
	</ul>
@endsection