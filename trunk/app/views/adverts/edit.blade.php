@extends('layouts.master')

@section('content')

<h1>Editar Anuncio</h1>

{{ Form::model($advert, array('method' => 'PATCH', 'action' => array('AdvertsController@update', $advert->id))) }}

<ul>
	<li>
		{{ Form::label('title', 'Título:') }}
		{{ Form::text('title') }}
	</li>
	<li>
		{{ Form::label('content', 'Contenido:') }}
		{{ Form::textarea('content') }}
	</li>
	<li>
		{{ Form::label('rate', 'Tarifa:') }}
		{{ Form::text('rate') }}
	</li>
	<li>
		{{ Form::submit('Grabar', array('class' => 'btn btn-success')) }}
		{{ HTML::link(action('AdvertsController@show'), 'Cancelar' , $advert->id, array('class' => 'btn btn-warning')) }}
	</li>
</ul>
{{ Form::close() }}

@if($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop