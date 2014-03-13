jQuery(document).ready(function($){
	$('#category').change(function(){
		var cod_category = $('#category').val() ;
		$.ajax({

			url: "/asignaturas/"+cod_category,
			type: "GET",
			datatype: 'json',
			success: function(data) {
				var select = $('#subject');
				select.empty();
				$.each(data, function(index, element) { 
					select.append("<option	value='"+ element.id +"'>" + element.name + "</option>")
				});						

			}

		});

	});
});