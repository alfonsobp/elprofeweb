@extends('template')

@section('vertical_links')
	<a id="nav_top" href="bienvenido" data-transition="slidedown"></a>
	<a id="nav_bottom" href="#" data-transition="slideup"></a>
@stop

@section('horizontal_links')
	<a id="nav_right" href="#" data-transition="slide"></a>
	<a id="nav_left" href="asignaturas" data-transition="slide" data-direction="reverse"></a>
@stop

@section('page')
	<h2>Búsqueda</h2>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<a id="science" href="asignaturas" data-transition="slide">Ciencias</a>
	<a id="humanities" href="asignaturas" data-transition="slide">Letras y humanidades</a>
	<a id="companies" href="asignaturas" data-transition="slide">Empresas y negocios</a>
	<a id="music" href="asignaturas" data-transition="slide">Música</a>
	<a id="sports" href="asignaturas" data-transition="slide">Deportes</a>
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
	<a id="computing" href="asignaturas" data-transition="slide">Informática</a>
	<a id="support" href="asignaturas" data-transition="slide">Apoyo escolar</a>
	<a id="languages" href="asignaturas" data-transition="slide">Idiomas</a>
	<a id="art" href="asignaturas" data-transition="slide">Arte</a>
	<a id="leisure" href="asignaturas" data-transition="slide">Ocio</a>
	{{HTML::script("js/middle/filters.js")}}
	{{HTML::style("css/middle/filters.css")}}
@stop