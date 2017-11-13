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
				<a id="rock-thumbnail" href=""><p>Rock</p></a>
			</li>
			<li>
				<a id="indie-thumbnail" href=""><p>Indie</p></a>
			</li>
			<li>
				<a id="hiphop-thumbnail" href=""><p>Hip Hop</p></a>
			</li>
			<li>
				<a id="pop-thumbnail" href=""><p>Pop</p></a>
			</li>
			<li>
				<a id="electronic-thumbnail" href=""><p>Electronic</p></a>
			</li>
			<li>
				<a id="classical-thumbnail" href=""><p>Classical</p></a>
			</li>
			<li>
				<a id="jazz-thumbnail" href=""><p>Jazz</p></a>
			</li>
			<li>
				<a id="punk-thumbnail" href=""><p>Punk</p></a>
			</li>
			<li>
				<a id="metal-thumbnail" href=""><p>Metal</p></a>
			</li>
			<li>
				<a id="funk-thumbnail" href=""><p>Funk</p></a>
			</li>
			<li>
				<a id="country-thumbnail" href=""><p>Country</p></a>
			</li>
			<li>
				<a id="soul-thumbnail" href=""><p>Soul</p></a>
			</li>
			<li>
				<a id="blues-thumbnail" href=""><p>Blues</p></a>
			</li>
			<li>
				<a id="rnb-thumbnail" href=""><p>R&B</p></a>
			</li>
			<li>
				<a id="latin-thumbnail" href=""><p>Latin</p></a>
			</li>
			<li>
				<a id="reggae-thumbnail" href=""><p>Reggae</p></a>
			</li>
		</ul>

	</section>

@endsection