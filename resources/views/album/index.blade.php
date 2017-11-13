@extends('layouts/master')

@section('title')
	Albums
@endsection

@section('content')
	<h1>Albums</h1>

	<a href="{{ url('artist') }}">Create New Album</a>

	<section>
		
		<ul id="genre-list">
			<li>
				<a id="rock-thumbnail" href="{{ url('genre', 'rock') }}"><p>Rock</p></a>
			</li>
			<li>
				<a id="indie-thumbnail" href="{{ url('genre', 'indie') }}"><p>Indie</p></a>
			</li>
			<li>
				<a id="hiphop-thumbnail" href="{{ url('genre', 'hiphop') }}"><p>Hip Hop</p></a>
			</li>
			<li>
				<a id="pop-thumbnail" href="{{ url('genre', 'pop') }}"><p>Pop</p></a>
			</li>
			<li>
				<a id="electronic-thumbnail" href="{{ url('genre', 'electronic') }}"><p>Electronic</p></a>
			</li>
			<li>
				<a id="classical-thumbnail" href="{{ url('genre', 'classical') }}"><p>Classical</p></a>
			</li>
			<li>
				<a id="jazz-thumbnail" href="{{ url('genre', 'jazz') }}"><p>Jazz</p></a>
			</li>
			<li>
				<a id="punk-thumbnail" href="{{ url('genre', 'punk') }}"><p>Punk</p></a>
			</li>
			<li>
				<a id="metal-thumbnail" href="{{ url('genre', 'metal') }}"><p>Metal</p></a>
			</li>
			<li>
				<a id="funk-thumbnail" href="{{ url('genre', 'funk') }}"><p>Funk</p></a>
			</li>
			<li>
				<a id="country-thumbnail" href="{{ url('genre', 'country') }}"><p>Country</p></a>
			</li>
			<li>
				<a id="soul-thumbnail" href="{{ url('genre', 'soul') }}"><p>Soul</p></a>
			</li>
			<li>
				<a id="blues-thumbnail" href="{{ url('genre', 'blues') }}"><p>Blues</p></a>
			</li>
			<li>
				<a id="rnb-thumbnail" href="{{ url('genre', 'rb') }}"><p>R&B</p></a>
			</li>
			<li>
				<a id="latin-thumbnail" href="{{ url('genre', 'latin') }}"><p>Latin</p></a>
			</li>
			<li>
				<a id="reggae-thumbnail" href="{{ url('genre', 'reggae') }}"><p>Reggae</p></a>
			</li>
		</ul>

	</section>

@endsection