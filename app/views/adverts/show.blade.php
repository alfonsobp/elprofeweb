@extends('layouts.master')

@section('content')

<h1>Anuncio</h1>

<p>{{ HTML::link(action('AdvertsController@index'), 'Regresar a todos los anuncios') }}</p>

<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Contenido</th>
			<th>Tarifa (S/.)</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{ $advert->title }}</td>
			<td>{{ $advert->content }}</td>
			<td>{{ $advert->rate }}</td>
			<td>
				{{ HTML::link(action('AdvertsController@edit'), 'Editar', array($advert->id), array('class' => 'btn btn-info')) }}
			</td>
			<td>
				{{ Form::open(array('method' => 'DELETE', 'action' => array('AdvertsController@destroy', $advert->id))) }}
					{{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop