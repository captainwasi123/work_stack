<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title> @yield('title') | WorkStack </title>
	@include('seller.includes.style')
	@yield('addStyle')
</head>

<body>

	<div id="main-wrapper">

	@include('seller.includes.header')
	
	@include('seller.includes.sidebar')

	@yield('content')

	@include('seller.includes.footer')

	@include('seller.includes.script')
	
	</div>
	
</body>
</html>