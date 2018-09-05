<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="HP Inc">
        <meta name="keywords"               content="HP Inc">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="Febrero 15, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
    	<title>HP Inc</title>
    	<link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.png">
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>simplified.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <div class="js-header">
            <div class="js-header--left">
                <img src="<?php echo RUTA_IMG?>logo/hp-logo.png">
                <p>Marketing al d&iacute;a</p>
            </div>
        </div>
        <section class="js-section js-height">
            <div class="js-container js-flex">
                <div class="js-login">
                    <h2>Construyendo un mejor equipo</h2>
                    <div class="js-input">
                        <input type="text" id="usuario" class="form-control" placeholder="Correo" onkeyup="verificarDatos(event);">
                    </div>
                    <div class="js-input">
                        <input type="password" id="password" class="form-control" placeholder="Contraseña" onkeyup="verificarDatos(event);">
                    </div>
                    <div class="js-flex">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--login" onclick="ingresar()">Ingresar</button>
                        <div class="js-radio">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                                <input type="checkbox" id="remember" class="mdl-checkbox__input">
                                <span class="mdl-checkbox__label">Recuerdame</span>
                            </label>
                        </div>
                        <a href="">¿Olvidaste tu contrase&ntilde;a?</a>
                    </div>
                    <img src="<?php echo RUTA_IMG?>logo/icon-login.png"">
                </div>
            </div>
        </section>
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jslogin.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                let CHECK = sessionStorage.getItem('CHECK');
                let USERNAME = sessionStorage.getItem('USERNAME');
                let PASS = sessionStorage.getItem('PASS');
                if(CHECK == 1) {
                    $('#checkbox-2').prop('checked', true);
                    $('#usuario').val(USERNAME);
                    $('#password').val(PASS);
                }else {
                    $('#checkbox-2').prop('checked', false);
                    $('#usuario').val('');
                    $('#password').val('');
                }
            });
        </script>
    </body>
</html>