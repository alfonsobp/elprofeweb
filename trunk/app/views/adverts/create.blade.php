@extends('layouts.master')

@section('js')
<script type="text/javascript" src="{{asset('js/adverts/functions.js')}}">  </script>
@stop

@section('content')
<div class="container">
	<h1>Crear Anuncio</h1>
	<div class="row">
		{{ Form::open(array('action' => 'AdvertsController@store')) }}

		<div class="col-md-4">

			{{ Form::label('title', '(*)Título:') }} <br>
			{{ Form::text('title') }}
			<br><br>
			{{ Form::label('content', '(*)Contenido:') }} <br>
			{{ Form::textarea('content') }}
			<br><br>
			{{ Form::label('rate', '(*)Tarifa:') }} <br>
			{{ Form::text('rate') }}
			<br><br>

			<div class="place">
				{{ Form::label('rate', '(*)Lugar de dictado:') }} <br>
			</div>
		</div>
		<div class="col-md-4">

			<label for="categories" >(*)Categoria</label> <br>
			<select id="category" name="category_id">
				@foreach($categories as $category)	
				<option value="{{$category->id}}" >{{$category->name}}</option>
				@endforeach	
			</select> <br><br>
			
			<label for="subjets" >Provincia</label>	<br>
			<select id="subject" name="subject_id">					
				<option>Elige una categoría primero</option>
			</select> <br><br>

			<fieldset>
				<legend>(*)Nivel:</legend>
				{{ Form::checkbox('level', 'Todos los niveles', true) }} Todos los niveles<br>
				{{ Form::checkbox('level', 'Educación inicial') }} Educación inicial<br>
				{{ Form::checkbox('level', 'Educación primaria') }} Educación primaria<br>
				{{ Form::checkbox('level', 'Educación secundaria') }} Educación secundaria<br>
				{{ Form::checkbox('level', 'Enseñanza superior') }} Enseñanza superior<br>
				{{ Form::checkbox('level', 'Formación profecional') }} Formación profecional<br><br>
			</fieldset>

			<fieldset>
				<legend>(*)Tipo de clase:</legend>
				{{ Form::checkbox('level', 'Todos los tipos', true) }} Todos los tipos<br>
				{{ Form::checkbox('level', 'Presencial donde el alumno') }} Presencial donde el alumno<br>
				{{ Form::checkbox('level', 'Presencial donde el profesor') }} Presencial donde el profesor<br>
				{{ Form::checkbox('level', 'On-line') }} On-line<br><br>
			</fieldset>
		</div>
		<div class="col-md-4">
			<fieldset>
				<legend>(*)Idiomas:</legend>
				{{ Form::checkbox('level', 'Todos los indiomas', true) }} Todos los indiomas<br>
				{{ Form::checkbox('level', 'Español') }} Español<br>
				{{ Form::checkbox('level', 'Ingles') }} Ingles<br>
				{{ Form::checkbox('level', 'Aleman') }} Aleman<br>
				{{ Form::checkbox('level', 'Quechua') }} Quechua<br>
				{{ Form::checkbox('level', 'Aymara') }} Aymara<br><br>
			</fieldset>
		</div>

	</div>
	<br><br><br><br><br>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3">
			{{ HTML::link(action('AdvertsController@index'), 'Cancelar' , array('class' => 'btn btn-info')) }}
		</div>
		<div class="col-md-3">
			{{ Form::submit('Publicar', array('class' => 'btn btn-info')) }}
		</div>		
		<div class="col-md-3"></div>
	</div>
	
	{{ Form::close() }}


	@if($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
</div>
@endif

@stop