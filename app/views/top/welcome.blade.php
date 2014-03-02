@extends('template')

@section('vertical_links')
	<a id="nav_top" href="#" data-transition="slidedown"></a>
	<a id="nav_bottom" href="categorias" data-transition="slideup"></a>
@stop

@section('horizontal_links')
	<a id="nav_right" href="informacion" data-transition="slide"></a>
	<a id="nav_left" href="#" data-transition="slide" data-direction="reverse"></a>
@stop

@section('page')
	<h1>Bienvenido</h1>
	<br>
	<br>
	<br>
	<p>El profe es una pagina Web</p>
	<br>
	<br>
	<br>
	<p>¿Qué desea hacer?</p>
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
	<a id="register" href="#" data-transition="slide">Registrarse</a>
	<a id="publish" href="#" data-transition="slide">Publicar anuncio</a>
	<a id="search" href="#" data-transition="slide">Buscar</a>
	{{HTML::script("js/top/welcome.js")}}
	{{HTML::style("css/top/welcome.css")}}
@stop