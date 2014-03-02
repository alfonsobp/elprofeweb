$().ready(function(){
	$("#nav_left").click(function(){
		$("#nav_right").attr('href','filtros');
	});
	$("#nav_top").click(function(){
		$("#nav_bottom").attr('href', 'filtros');
	});
});