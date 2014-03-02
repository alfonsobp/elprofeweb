@extends('template')

@section('vertical_links')
	<a id="nav_top" href="#" data-transition="slidedown"></a>
	<a id="nav_bottom" href="categorias" data-transition="slideup"></a>
@stop

@section('horizontal_links')
	<a id="nav_right" href="#" data-transition="slide"></a>
	<a id="nav_left" href="bienvenido" data-transition="slide" data-direction="reverse"></a>
@stop

@section('page')
	<h2>Enterate más</h1>
	<br>
	<br>
	<br>
	<p>Imagen</p>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<a id="register" href="#" data-transition="slide">Quienes somos</a>
	<a id="publish" href="#" data-transition="slide">Términos y condiciones</a>
	<a id="search" href="#" data-transition="slide">Manual de uso</a>
	{{HTML::script("js/top/information.js")}}
	{{HTML::style("css/top/information.css")}}
@stop