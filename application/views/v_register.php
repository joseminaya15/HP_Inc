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
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>simplified.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
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
            <div class="js-container js-flex js-register">
                <div class="row js-flex">
                    <div class="col-md-6 col-sm-6 text-center">
                        <img src="<?php echo RUTA_IMG?>logo/icon-login.png">
                        <p>Construyamos juntos un mejor equipo</p>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="col-xs-12 js-register__title">
                            <h2>Reg&iacute;strate</h2>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input">
                                <input type="text" id="nombre" class="form-control" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input">
                                <input type="text" id="apellido" class="form-control" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="js-input">
                                <input type="text" id="correo" class="form-control" placeholder="Correo">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="js-input">
                                <input type="password" id="password" class="form-control" placeholder="Contraseña">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input js-select">
                                <select name="empresa" id="empresa" title="Empresa">
                                    <?php echo $comboCanal ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input js-select">
                                <select name="pais" id="pais" title="País">
                                    <?php echo $comboPais ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input">
                                <input type="text" id="cargo" class="form-control" placeholder="Cargo">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-input">
                                <input type="text" id="celular" class="form-control" placeholder="Celular">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-form">
                                <input type="text" id="fechaNacimiento" name="fechaNacimiento" maxlength="10" class="form-control" placeholder="Fecha de nacimiento">
                                <div class="js-icon">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-date_range"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="js-form">
                                <input type="text" id="fechaIngreso" name="fechaIngreso" maxlength="10" class="form-control" placeholder="Fecha de ingreso empresa">
                                <div class="js-icon">
                                    <button class="mdl-button mdl-js-button mdl-button--icon">
                                        <i class="mdi mdi-date_range"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1">
                                <span class="mdl-radio__label">Hombre</span>
                            </label>
                        </div>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                                <span class="mdl-radio__label">Mujer</span>
                            </label>
                        </div>
                        <div class="col-xs-12">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-button--login" onclick="registrar()">Registrar</button>
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
        <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>jquery-mask/jquery.mask.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jslogin.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            initButtonCalendar('fechaNacimiento');
            initButtonCalendar('fechaIngreso');
            initMaskInputs('fechaNacimiento','fechaIngreso');
        </script>
    </body>
</html>