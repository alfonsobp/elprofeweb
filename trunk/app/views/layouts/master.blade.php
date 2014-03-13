<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>El Profe Web</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	@yield('js')
	<style>
		table form { margin-bottom: 0; }
		form ul { margin-left: 0; list-style: none; }
		.error { color: red; font-style: italic; }
		body { padding-top: 20px; }
	</style>
</head>
<body>
	<div class="container">
		@if (Session::has('message'))
			<div class="flash alert">
				<p>{{ Session::get('message') }}</p>
			</div>
		@endif
		@yield('content')
	</div>
</body>
</html>