@extends('layouts/master')

@section('title')
	Tracks
@endsection

@section('content')
	<h1>{{ $track['track_title'] }}</h1>
	{{ $track['track_length'] }}

	<a href="{{ action('TrackController@edit', $track['id']) }}">Edit Track</a>

@endsection