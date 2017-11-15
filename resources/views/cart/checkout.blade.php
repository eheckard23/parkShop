@extends('layouts/master')

@section('title')
	Checkout
@endsection

@section('content')

	<h1>Checkout</h1>
	<h4>{{ $totalPrice }}</h4>

	<form action="{{ url('checkout') }}" method="POST">
	
		{{ csrf_field() }}

	  <script
	    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	    data-key="pk_test_251yK3wCOeqhMdNdxYB42VfX"
	    data-amount="{{ $totalPrice }}00"
	    data-name="Demo Site"
	    data-description="Widget"
	    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
	    data-locale="auto"
	    data-zip-code="true">
	  </script>

		<input type="hidden" name="totalPrice" value="{{ $totalPrice }}" />

	</form>
	
@endsection