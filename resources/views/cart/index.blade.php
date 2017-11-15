@extends('layouts/master')

@section('title')
	Cart
@endsection

@section('content')

	<h1>Your Cart ({{ $totalQty }})</h1>

	<h1>${{ $totalPrice }}</h1>
	
	<ul>
		@foreach($items as $item)
			<li>{{ $item['item']['album_title'] }}</li>
		@endforeach
	</ul>
	
@endsection