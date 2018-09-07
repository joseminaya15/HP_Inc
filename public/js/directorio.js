function cambiaPais() {
	var pais = $('#pais').val();
	var tipo = $('#tipo').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	// var pais = $('#pais').val();
	$.ajax({
		data: { pais : pais,
				tipo : tipo },
		url:  'directorio/changePais',
		type: 'POST'
	}).done(function(data){
		try{
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#totalUser').text('');
				$('#totalUser').text(data.totaUser);
				$('#bodyUsers').html('');
				$('#bodyUsers').append(data.htmlBody);
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