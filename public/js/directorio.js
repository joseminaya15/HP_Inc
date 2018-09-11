var paisGlobal = '';
function buscador() {
	var pais  	= $('#pais').val();
	var canal 	= $('#canal').val();
	var persona = $('#persona').val();
	var fechaIni= $('#fechainicio').val();
	var fechaFin= $('#fechafin').val();
	canal = (paisGlobal != pais) ? null : canal; 
	$.ajax({
		data: { pais    : pais,
				canal   : canal,
				persona : persona,
				fechaIni: fechaIni,
				fechaFin: fechaFin },
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
				componentHandler.upgradeAllRegistered();
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
	var tipo = $('#tipo').val();
	$.ajax({
		data : { tipo : tipo },
		url  : 'directorio/buscadorTipo',
		type : 'POST'
	}).done(function(data){
		try {
			data = JSON.parse(data);
			if (data.error == 0) {
				$('#eblast').html('');
				$('#eblast').append(data.eblast);
				componentHandler.upgradeAllRegistered();
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
function preview(){
	$('#modalPreview').modal('show');
	var url = document.getElementsByTagName('directorio.php');
	console.log(url);
	url.innerHTML();
}
function selectAll() {
	$('.mdl-js-checkbox').addClass('is-checked');
}
function removeAll(){
	$('.mdl-js-checkbox').removeClass('is-checked');	
}
function limpiar(){
	$('.mdl-js-checkbox').removeClass('is-checked');
	$('.js-select').selectpicker(0);
	$('.js-select').selectpicker('refresh');
}