<!DOCTYPE html>
<html>
	<head>
		{{HTML::script("js/jquery-2.1.0.min.js")}}
		{{HTML::script("js/jquery.mobile-1.4.2.min.js")}}
		{{HTML::style("css/template.css")}}
		{{HTML::style("css/jquery.mobile-1.4.2.min.css")}}
		@yield('header')
	</head>
	<body>
		<div id="logo">
			<a href="#">elprofe.pe</a>
		</div>
		<div id="user">
		</div>
		<div id="options_account">
		</div>
		@yield('vertical_links')
		<div data-role="page">
			@yield('horizontal_links')
			<div id="content">
				@yield('page')
			</div>
		</div>
	</body>
</html>