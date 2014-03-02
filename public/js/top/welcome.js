$().ready(function(){
	$("#nav_right").click(function(){
		$("#nav_left").attr('href', 'bienvenido');
	});
	$("#nav_bottom").click(function(){
		$("#nav_top").attr('href', 'bienvenido');
	});
});