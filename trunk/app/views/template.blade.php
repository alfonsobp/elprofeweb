<!DOCTYPE html>
<html>
	<head>
		{{HTML::script("js/jquery-2.1.0.min.js")}}
		{{HTML::script("js/jquery.mobile-1.4.1.min.js")}}
		{{HTML::style("css/template.css")}}
		{{HTML::style("css/jquery.mobile-1.4.1.min.css")}}
	</head>
	<body>
		<div id="logo">
			<a href="#">elprofe.pe</a>
		</div>
		<div id="user">
		</div>
		<div id="nav_top">
		</div>
		<a id="nav_right" href="page2" data-transition="slide"></a>
		<a id="nav_left" href="#" data-transition="slide" data-direction="reverse" style="display:none;"></a>
		<a id="nav_bottom" href="#" data-transition="slidedown"></a>
		<div data-role="page" class="ui-page ui-page-theme-a ui-page-active">
			@yield('page')
		</div>
	</body>
</html>