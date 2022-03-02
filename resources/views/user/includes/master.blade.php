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

	<section class="comparison-sec">
		<div class="comparison-sec1 yellow-bg pad-top-20 pad-bot-20">
			<h3 class="blue-color no-margin text-center"> Favorites </h3>
		</div>

		<div class="container pad-top-50 pad-bot-50">
			<div class="row">
				<div class="col-md-4 col-lg-3 col-sm-4 col-xs-12 pad-bot-50">
					@include('user.includes.sidebar')
				</div>
				<div class="col-md-8 col-lg-9 col-sm-8 col-xs-12">
					@yield('content')
				</div>
			</div>
		</div>
	</section>
	
	@include('user.includes.footer')

	@include('user.includes.script')
	
</body>
</html>