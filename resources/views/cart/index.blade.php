@extends('layouts/master')

@section('title')
	Cart
@endsection

@section('content')

	@if (Session::get('cart'))

		@if ($totalQty > 0)

			<h1>Your Cart ({{ $totalQty }})</h1>
			<h4>${{ $totalPrice }}</h4>

			<form class="checkout-form" action="{{ url('checkout') }}" method="POST">
	
				{{ csrf_field() }}

			  <script
			    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
			    data-key="pk_test_251yK3wCOeqhMdNdxYB42VfX"
			    data-amount="{{ $totalPrice }}00"
			    data-name="Park Shop"
			    data-description="Checkout Button"
			    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
			    data-locale="auto"
			    data-zip-code="true">
			  </script>

				<input type="hidden" name="totalPrice" value="{{ $totalPrice }}" />

			</form>
			
			<ol class="cart-list">

				@foreach ($items as $item)
					
					<li>

						<div class="cart-image-container">
							<img src="{{ $item['item']['img_url'] }}" alt="{{ $item['item']['album_title'] }}">
						</div>
						
						<ul class="cart-actions">
							
							<li><a href="{{ action('AlbumController@show', $item['item']['id']) }}">{{ $item['item']['album_title'] }}</a> ({{$item['qty']}}) </li>
							<li><a href="{{ url('cart/add-one', $item['item']['id']) }}">Add</a></li>
							<li><a href="{{ url('cart/remove-one', $item['item']['id']) }}">Remove</a></li>
							<li><a href="{{ url('cart/remove', $item['item']['id']) }}">Delete</a></li>

						</ul>

					</li>

				@endforeach

			</ol>

		@else

			<p>There are no items in your cart!</p>
		
		@endif

		

	@else

		<p>There are no items in your cart!</p>

	@endif

	


	
@endsection