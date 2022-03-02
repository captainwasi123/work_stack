<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title> @yield('title') | WorkStack </title>
	@include('user.includes.style')
	@yield('addStyle')
</head>

<body>

	@include('user.includes.header')

	@yield('content')
	
	@include('user.includes.footer')

	@include('user.includes.script')
	
</body>
</html>