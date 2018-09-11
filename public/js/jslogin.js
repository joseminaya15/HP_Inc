function ingresar(){
    var usuario  = $('#usuario').val();
    var password = $('#password').val();
    if(usuario == null){
        msj('error', 'Ingrese un usuario');
        return;
    }
    if(password == null){
        msj('error', 'Ingrese un usuario');
        return;
    }
    $.ajax({
        data : {usuario : usuario,
                password : password},
        url  : 'login/ingresar',
        type : 'POST'
    }).done(function(data){
        try{
            data = JSON.parse(data);
            if(data.error == 0){
                location.href = 'directorio';
                $('#usuario').val("");
                $('#password').val("");
            }else {
                toastr.remove();
                msj('error', data.msj);
                return;
            }
        }catch(err){
            toastr.remove();
            msj('error',err.message);
        }
    });
}
function verificarDatos(e){
    if(e.keyCode === 13){
        e.preventDefault();
        ingresar();
    }
}
function registrar() {
    var nombre          = $('#nombre').val();
    var apellido        = $('#apellido').val();
    var correo          = $('#correo').val();
    var password        = $('#password').val();
    var empresa         = $('#empresa').val();
    var pais            = $('#pais').val();
    var cargo           = $('#cargo').val();
    var celular         = $('#celular').val();
    var fechaNacimiento = $('#fechaNacimiento').val();
    var fechaIngreso    = $('#fechaIngreso').val();
    var sexo            = $('.mdl-radio.is-checked').find('input').val();
    sexo = (sexo == 1) ? 'Hombre' : 'Mujer';
    if(nombre == '') {
        toastr.remove();
        msj('error', 'Complete su nombre.');
        return;
    }
    if(apellido == '') {
        toastr.remove();
        msj('error', 'Complete su apellido.');
        return;
    }
    if(correo == '') {
        toastr.remove();
        msj('error', 'Complete su correo.');
        return;
    }
    if(password == '') {
        toastr.remove();
        msj('error', 'Complete su password.');
        return;
    }
    if(empresa == '') {
        toastr.remove();
        msj('error', 'Complete su empresa.');
        return;
    }
    if(pais == '') {
        toastr.remove();
        msj('error', 'Seleccione su pais.');
        return;
    }
    if(cargo == '') {
        toastr.remove();
        msj('error', 'Complete su cargo.');
        return;
    }
    if(celular == '') {
        toastr.remove();
        msj('error', 'Complete su celular.');
        return;
    }
    if(fechaNacimiento == '') {
        toastr.remove();
        msj('error', 'Complete su fecha de nacimiento.');
        return;
    }
    if(fechaIngreso == '') {
        toastr.remove();
        msj('error', 'Complete su fecha de ingreso.');
        return;
    }

    $.ajax({
        data : {nombre          : nombre,
                apellido        : apellido,
                correo          : correo,
                password        : password,
                empresa         : empresa,
                pais            : pais,
                cargo           : cargo,
                celular         : celular,
                fechaNacimiento : fechaNacimiento,
                fechaIngreso    : fechaIngreso,
                sexo            : sexo },
        url  : 'Register/register',
        type : 'POST'
    }).done(function(data){
        try {
            data = JSON.parse(data);
            if(data.error == 0) {
                msj('success', data.msj);
                location.href = 'login';
            } else {
                toastr.remove();
                msj('error', data.msj);
                return;
            }
        } catch(err) {
            toastr.remove();
            msj('error', err.message);
        }
    });
}