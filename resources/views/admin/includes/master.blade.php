<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title> @yield('title') | WorkStack </title>
	@include('admin.includes.style')
	@yield('addStyle')
</head>

<body>

	<div id="main-wrapper">

	@include('admin.includes.header')

	@yield('content')

	@include('admin.includes.footer')

	@include('admin.includes.script')
	
	</div>
	
</body>
</html>