@extends('layouts/master')

@section('title')
	Order Review
@endsection

@section('content')

	<h1>Your Order was Placed!</h1>

	<h2>Total: {{ $totalPrice }}</h2>

	<ul>
		
		@foreach ($items as $item)
		
			<li>{{ $item['item']['album_title'] }}</li>

		@endforeach

	</ul>

@endsection