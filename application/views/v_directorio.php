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
    	<link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
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
                <p>Directorio de Marketing</p>
            </div>
        </div>
        <section class="js-section m-t-30">
            <div class="js-container">
                <div class="js-title">
                    <h2>Comunicados Editor</h2>
                    <p>Elige el estilo de tus comunicaciones</p>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table id="example" class="display nowrap table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-left">Usuario</th>
                                        <th class="text-left">Pá&iacute;s</th>
                                        <th class="text-left">Canal/Empresa</th>
                                        <th class="text-left">Cumplea&ntilde;os</th>
                                        <td class="text-center">Acci&oacute;n</td>
                                    </tr>
                                </thead>
                                <tbody id="tablecity">
                                    <tr>
                                        <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                            <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                        </label></td>
                                        <td>Anna K.</td>
                                        <td>Panam&aacute;</td>
                                        <td>Yoytec Computer, S.A</td>
                                        <td>7/7/18</td>
                                        <td class="text-center"><button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                            <i class="mdi mdi-more_vert"></i>
                                        </button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                            <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                                        </label></td>
                                        <td>Bethany D.</td>
                                        <td>Costa Rica</td>
                                        <td>Tecnasa</td>
                                        <td>7/7/18</td>
                                        <td class="text-center"><button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                            <i class="mdi mdi-more_vert"></i>
                                        </button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                                            <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                                        </label></td>
                                        <td>Luke C.</td>
                                        <td>Costa Rica</td>
                                        <td>Tecnasa</td>
                                        <td>10/7/18</td>
                                        <td class="text-center"><button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                            <i class="mdi mdi-more_vert"></i>
                                        </button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                                            <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                                        </label></td>
                                        <td>Sthephen O.</td>
                                        <td>El Salvador</td>
                                        <td>Tecnasa</td>
                                        <td>12/7/18</td>
                                        <td class="text-center"><button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                            <i class="mdi mdi-more_vert"></i>
                                        </button></td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
                                            <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input">
                                        </label></td>
                                        <td>Tyler O.</td>
                                        <td>Ecuador</td>
                                        <td>Tecnasa</td>
                                        <td>27/7/18</td>
                                        <td class="text-center"><button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                            <i class="mdi mdi-more_vert"></i>
                                        </button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="js-template">
                            <p>Elige aqu&iacute; el template a usar</p>
                            <div class="js-card">
                                <div class="js-card__contenido">
                                    
                                </div>
                                <div class="js-card__select">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options-1" value="1">
                                        <span class="mdl-radio__label">Seleccionar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="js-card">
                                <div class="js-card__contenido">
                                    
                                </div>
                                <div class="js-card__select">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                        <input type="radio" id="option-2" class="mdl-radio__button" name="options-1" value="2" checked>
                                        <span class="mdl-radio__label">Seleccionar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="js-card">
                                <div class="js-card__contenido">
                                    
                                </div>
                                <div class="js-card__select">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                        <input type="radio" id="option-3" class="mdl-radio__button" name="options-1" value="3">
                                        <span class="mdl-radio__label">Seleccionar</span>
                                    </label>
                                </div>
                            </div>
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
        <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    </body>
</html>