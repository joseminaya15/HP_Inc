var paisGlobal = '';
function buscador() {
	var pais  	= $('#pais').val();
	var canal 	= $('#canal').val();
	var persona = $('#persona').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	canal = (paisGlobal != pais) ? null : canal; 
	$.ajax({
		data: { pais    : pais,
				canal   : canal,
				persona : persona },
		url:  'directorio/buscador',
		type: 'POST'
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#totalUser').text('');
				$('#totalUser').text(data.totaUser);
				$('#bodyUsers').html('');
				$('#bodyUsers').append(data.htmlBody);
				if (paisGlobal != pais) {
					$('#canal').html('');
					$('#canal').append(data.comboCanal);
					$('#canal').selectpicker('refresh');	
				}
				paisGlobal = pais;
			} else {
		        toastr.remove();
		        msj('error', data.error);
			}
		} catch(err) {
	        toastr.remove();
	        msj('error',err.message);
		}
	});
}

function buscadorTipo() {
	var tipo = $().val();
	$.ajax({
		data : {},
		url  : 'directorio/buscadorTipo',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if (data.error == 0) {

			} else {
				toastr.remove();
				msj('error', data.msj);
			}
		} catch (err){
			toastr.remove();
			msj('error', err.message);
		}
	});
}