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
function validar(){
	var tipo 	 = $('#tipo').val();
	var fechaIni = $('#fechainicio').val();
	var fechaFin = $('#fechafin').val();
	if(tipo == '' || fechaIni == '' || fechaFin == '') {
		$('#guardar').attr('disabled');
	} else {
		$('#guardar').removeAttr('disabled');
	}
}
var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1;
var yy = today.getFullYear();
var arrayIds    = [];
function saveConfig(){
	dd = (dd<10) ? '0'+dd : dd; 
	dd = (mm<10) ? '0'+mm : mm;
	today = dd + '/' + mm + '/' + yy;
	var tipo 	 = $('#tipo').val();
	var fechaIni = ($('#fechainicio').val() == '') ? today : $('#fechainicio').val();
	var fechaFin = ($('#fechafin').val() == '') ? $('#fechainicio').val() : $('#fechafin').val() ;
	var eblast 	 = $('.js-transform').find('.is-checked').find('input').attr('data-id');
	fechaIni = fechaIni.split("/").reverse().join("-");
	fechaFin = fechaFin.split("/").reverse().join("-");
	$(".mdl-checkbox.is-checked").each(function (){
		var isChecked = $(this);
		var user 	  = isChecked.find('input').attr('data-id');
		arrayIds.push(user);
    })
	$.ajax({
		data : { tipo 	  : tipo,
				 fechaIni : fechaIni,
				 fechaFin : fechaFin,
				 user 	  : arrayIds,
				 eblast   : eblast },
		url  : 'directorio/guardarProgramacion',
		type : 'POST'
	}).done(function (data){
		try{
			data = JSON.parse(data);
			if(data.error == 0) {
				$('.mdl-js-checkbox').removeClass('is-checked');
			} else {
				toastr.remove();
				msj('msj', data.msj);
			}
		} catch(err) {
			toastr.remove();
			msj('error', err.message);
		}
	});
}