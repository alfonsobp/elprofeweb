@extends('layout')

@section('content')
<div class="page-header" >
	<h1>Creación de cuenta</h1>
</div>

<form action="{{action('PersonController@handleCreate')}}" method="post" role="form" >			
	<table>
		<tr>
			<td>
				<h3>Datos Personales <small>Los campos con (*) son obligatorios</small> </h3>
				<div >
					<label for="names">Nombres(*)</label>
					<input type="text" class="form-control" name="names" />
				</div>
				<div >
					<label for="last_name">Apellidos(*)</label>
					<input type="text" class="form-control" name="last_name" />

				</div>
				<div >
					<label for="doc_number">Doc. Identidad(*)</label>
					<select id="doc_type" name="doc_type">
						<option value="DNI" selected="selected">DNI</option>
						<option value="Carnet de extranjería">Carnet Extranjería</option>
						<option value="RUC">RUC</option>
					</select>
					<input type="text" class="form-control" name="doc_number"/>
				</div>
				<div>
					<label for="born_date" >Fecha Nacimiento(*)</label>	
					<input type="text" class="form-control" name="born_date"/>
				</div>
				<div>
					<label for="nationality" >Nacionalidad</label>	
					<input type="text" class="form-control" name="nationality"/>
				</div>
				<h3>Medios de comunicación</h3>
				<div>
					<label for="email" >Correo</label>	
					<input type="text" class="form-control" name="email"/>
				</div>
				<div>
					<label for="mobile_number" >Teléfono</label>	
					
					<table id="phoneTable">
						<tr>
							<td><select id="phone_type" name="phone_type[]">
								<option value="fijo" selected="selected">Fijo</option>
								<option value="celular">Celular</option>
							</select></td>
							<td><input type="text" class="form-control" name="mobile_number[]"/></td>
						</tr>
					</table>
					<br><a id="addPhone" href="javascript:void()">Agregar otro telefono</a>
				</div>

			</td>
			<td>

				<h3>Centro de dictado <small>lalalla</small> </h3>
				<div>
					<label for="localization_dept" >Departamento</label>	
					<select id="localization_dept" name="localization_dept">
						@foreach($localizations_depts as $localization_dept)	
						<option value="{{$localization_dept->cod_dept}}" >{{$localization_dept->name}}</option>
						@endforeach	
					</select>
				</div>
				<div>
					<label for="localization_prov" >Provincia</label>	
					<select id="localization_prov" name="localization_prov">					
						<option>Elige un departamento primero</option>
					</select> 
					
				</div>
				<div>
					<label for="localization_dist" >Distrito</label>	
					<select id="localization_dist" name="localization_dist">
						<option>Elige una provincia primero</option>
					</select>
					
				</div>

				<h3>Formación académica</h3>
				<div>
					<label for="academicdegree_id" >Grado academico</label>	
					<select id="academicdegree_id" name="academicdegree_id">
						@foreach($academicdegrees as $academicdegree)	
						<option value="{{$academicdegree->id}}" selected="selected">{{$academicdegree->name}}</option>
						@endforeach	
					</select>
				</div>
				<div>
					<label for="academicrec" >Carrera u ocupación</label>	
					<input type="text" class="form-control" name="academicrec"/>
				</div>
				<div>
					<label for="curriculum" >Curriculum</label>	
					<input type="file" class="form-control" name="curriculum"/>
				</div>
				<br>
				<div>

					<label for="notif1">
						<input type="checkbox" class="form-control" name="notif1"/>Deseo recibir notificaciones
					</label>
					<label for="notif2">
						<input type="checkbox" class="form-control" name="notif2"/>Deseo recibir promociones
					</label>
					<label for="notif3">
						<input type="checkbox" class="form-control" name="notif3"/>Acepto los terminos y condiciones
					</label>
				</div>
				<br>
				<div>
					<input type="submit" value="Registrar" class="btn btn-primary" />
				</div>

			</td>
		</tr>
	</table>
</form>	
@stop