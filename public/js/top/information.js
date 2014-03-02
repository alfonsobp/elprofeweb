$().ready(function(){
	$("#nav_left").click(function(){
		$("#nav_right").attr('href','informacion');
	});
	$("#nav_bottom").click(function(){
		$("#nav_top").attr('href', 'informacion');
	});
});