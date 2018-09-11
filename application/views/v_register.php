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
                <p>Planificador de Comunicaciones</p>
            </div>
        </div>
        <section class="js-section js-height">
            <div class="js-container js-flex">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <img src="<?php echo RUTA_IMG?>logo/icon-login.png">
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input">
                                <input type="text" id="usuario" class="form-control" placeholder="Correo" onkeyup="verificarDatos(event);">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input">
                                <input type="text" id="usuario" class="form-control" placeholder="Correo" onkeyup="verificarDatos(event);">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="js-input">
                                <input type="text" id="usuario" class="form-control" placeholder="Correo" onkeyup="verificarDatos(event);">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="js-input">
                                <input type="password" id="usuario" class="form-control" placeholder="Correo" onkeyup="verificarDatos(event);">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            
                        </div>
                        <div class="col-xs-12">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--login" onclick="ingresar()">Ingresar</button>
                        </div>
                    </div>
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

        </script>
    </body>
</html>