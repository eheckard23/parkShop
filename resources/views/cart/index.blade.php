@extends('layouts/master')

@section('title')
	Cart
@endsection

@section('content')

	<h1>Your Cart ({{ $totalQty }})</h1>

	@if($totalQty > 0)
	
		<h1>${{ $totalPrice }}</h1>

		<a href="#">Checkout</a>
	
		<ol class="cart-list">
			@foreach($items as $item)
				<li>
					<div class="cart-image-container">
						<img src="{{ $item['item']['img_url'] }}" alt="{{ $item['item']['album_title'] }}" />
					</div>
					<ul class="cart-actions">
						<li><span>{{ $item['item']['album_title'] }} ({{ $item['qty'] }})</span></li>
						<li><a href="{{ url('cart/add-one', $item['item']['id']) }}">Add</a></li>
						<li><a href="{{ url('cart/remove-one', $item['item']['id']) }}">Remove</a></li>
						<li><a href="{{ url('cart/remove', $item['item']['id']) }}">Delete</a></li>
					</ul>
					
				</li>
				
				
			@endforeach
		</ol>

	@else

		<p>You have no items in your cart!</p>

	@endif

	
	
@endsection