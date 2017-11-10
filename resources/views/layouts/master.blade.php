<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	@yield('styles')
</head>
<body>
<div class='container'>
	@yield('content')
</div>
@yield('scripts')
</body>
</html>