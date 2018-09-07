function buscador() {
	var pais  = $('#pais').val();
	var canal = $('#canal').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	$.ajax({
		data: { pais  : pais,
				canal : canal },
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
				$('#canal').html('');
				$('#canal').append(data.comboCanal);
				console.log(data.comboCanal);
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