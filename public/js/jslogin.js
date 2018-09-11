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

    $.ajax({
        data : {

        },
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