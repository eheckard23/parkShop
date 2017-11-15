@extends('layouts/master')

@section('title')
	Cart
@endsection

@section('content')

	<h1>Your Cart ({{ $totalQty }})</h1>

	<h1>${{ $totalPrice }}</h1>
	
	<ul>
		@foreach($items as $item)
			<li>
				<span>{{ $item['item']['album_title'] }} ({{ $item['qty'] }})</span>
				<span><a href="{{ url('cart/add-one', $item['item']['id']) }}">Add</a></span>
				<span><a href="{{ url('cart/remove-one', $item['item']['id']) }}">Remove</a></span>
				<span><a href="{{ url('cart/remove', $item['item']['id']) }}">Delete</a></span>
			</li>
			
			
		@endforeach
	</ul>
	
@endsection