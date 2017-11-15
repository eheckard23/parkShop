@extends('layouts/master')

@section('title')
	Cart
@endsection

@section('content')

	<h1>Your Cart ({{ $totalQty }})</h1>

	<h1>${{ $totalPrice }}</h1>
	
	<ul>
		@foreach($items as $item)
			<li>{{ $item['item']['album_title'] }} ({{ $item['qty'] }})</li>
			<a href="{{ url('cart/remove-one', $item['item']['id']) }}">Remove One</a>
			<a href="{{ url('cart/remove', $item['item']['id']) }}">Remove All</a>
		@endforeach
	</ul>
	
@endsection