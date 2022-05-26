<!doctype html>
<html lang="en">
	@include('partials.head')
	<body>
		<div class="container d-flex flex-column min-vh-100">
			<!-- NAVBAR -->
			@include('partials.navbar')
			<!-- Content --> @yield('content')
			<!-- FOOTER -->
			@include('partials.footer')
		</div>
	</body>
</html>