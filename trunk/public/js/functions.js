jQuery(document).ready(function($){
  	$('#localization_dept').change(function(){
  			var cod_dept = $('#localization_dept').val() ;
			$.ajax({

				url: base_url+"/provincias/"+cod_dept,
				type: "GET",
				datatype: 'json',
				success: function(data) {
					var select_prov = $('#localization_prov');
					select_prov.empty();
					$.each(data, function(index, element) { 
						select_prov.append("<option	value='"+ element.cod_prov +"'>" + element.name + "</option>")
			        });					

			        }

				});
		});

  	$('#localization_prov').change(function(){
  			var cod_dept = $('#localization_dept').val() ;
  			var cod_prov = $('#localization_prov').val() ;
			$.ajax({

				url: base_url+"/distritos/"+cod_dept+"/"+cod_prov,
				type: "GET",
				datatype: 'json',
				success: function(data) {
					var select_dist = $('#localization_dist');
					select_dist.empty();
					$.each(data, function(index, element) { 
						select_dist.append("<option	value='"+ element.cod_dist +"'>" + element.name + "</option>")
			        });					

			        }

				});
		});

  	$('#addPhone').click(function(){
  			$('#phoneTable').append("<tr><td><select id='phone_type' name='phone_type[]'><option value='fijo' selected='selected'>Fijo</option><option value='celular'>Celular</option></select></td><td><input type='text' class='form-control' name='mobile_number[]'/></td></tr>");
  		});

	});

/*function addPhone() {
		
		$('#phoneTable').append("<tr><td><select id='phone_sel' name='phone_sel'><option value='fijo' selected='selected'>Fijo</option><option value='celular'>Celular</option></select></td><td><input type='text' class='form-control' name='mobile_number'/></td></tr>");
}*/