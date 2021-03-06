<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="host" content="{{URL::to('/')}}">
	<title> @yield('title') | WorkStack </title>
	@include('web.includes.style')
	@yield('addStyle')
</head>

<body>

	@include('web.includes.header')

	@yield('content')

	@include('web.includes.footer')

    @include('web.includes.modal')

	@include('web.includes.script')

</body>
</html>
