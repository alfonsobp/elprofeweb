@extends('layouts.master')

@section('content')

<h1>Todos los Anuncios</h1>

<p> {{ HTML::link(action('AdvertsController@create'), 'Crear un nuevo anuncio') }} </p>

@if ($adverts->count())
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th>Titulo</th>
				<th>Anuncio</th>
				<th>Tarifa (S/.)</th>
			</tr>
		</thead>
		<tbody>
			@foreach($adverts as $advert)
			<tr>
				<td>{{ $advert->title }}</td>
				<td>{{ $advert->content }}</td>
				<td>{{ $advert->rate }}</td>
				<td>{{ HTML::link(action('AdvertsController@show'), 'Ver', array($advert->id), array('class' => 'btn btn-primary')) }}
				</td>
				<td>{{ HTML::link(action('AdvertsController@edit'), 'Editar', array($advert->id), array('class' => 'btn btn-info')) }}
				</td>
				<td>
					{{ Form::open(array('method' => 'DELETE', 'action' => array('AdvertsController@destroy', $advert->id))) }}
						{{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
					{{ Form::close() }}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@else
	No hay ningún anuncio
@endif

@stop