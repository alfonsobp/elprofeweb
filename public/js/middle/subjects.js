$().ready(function(){
	$("#nav_top").click(function(){
		$("#nav_bottom").attr('href', 'asignaturas');
	});
	$("#nav_right").click(function(){
		$("#nav_left").attr('href', 'asignaturas');
	});
});