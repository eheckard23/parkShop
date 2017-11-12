<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" />
	@yield('styles')
</head>
<body>
@include('partials/header')
<div class='album-container'>
	@yield('content')
</div>
@yield('scripts')
</body>
</html>