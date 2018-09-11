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

    if(nombre == '') {
        toastr.remove();
        msj('error', 'Complete su nombre.');
    }
    if(apellido == '') {
        toastr.remove();
        msj('error', 'Complete su apellido.');
    }
    if(correo == '') {
        toastr.remove();
        msj('error', 'Complete su correo.');
    }
    if(password == '') {
        toastr.remove();
        msj('error', 'Complete su password.');
    }
    if(empresa == '') {
        toastr.remove();
        msj('error', 'Complete su empresa.');
    }
    if(pais == '') {
        toastr.remove();
        msj('error', 'Seleccione su pais.');
    }
    if(cargo == '') {
        toastr.remove();
        msj('error', 'Complete su cargo.');
    }
    if(celular == '') {
        toastr.remove();
        msj('error', 'Complete su celular.');
    }
    if(fechaNacimiento == '') {
        toastr.remove();
        msj('error', 'Complete su fechaNacimiento.');
    }
    if(fechaIngreso == '') {
        toastr.remove();
        msj('error', 'Complete su fechaIngreso.');
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
                fechaIngreso    : fechaIngreso },
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