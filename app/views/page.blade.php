@extends('template')

@section('page')
	<div id="content">
		<h1>Bienvenido</h1>
		<script type="text/javascript">
			$("#nav_right").click(function(){
				$("#nav_left").css('display','block');
				$("#nav_left").attr('href', '{{URL::to('/')}}');
				$("#nav_bottom").attr('href', 'welcome');
			});
		</script>
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
		<br>
		<br>
		<br>
		<br>
		<br>
	</div>
@stop