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
        <section class="js-section m-t-30">
            <div class="js-container">
                <div class="js-title">
                    <h2>Comunicados Editor</h2>
                    <p>Elige el estilo de tus comunicaciones</p>
                </div>
                <div class="js-menu js-flex">
                    <div class="js-input js-select">
                        <select name="pais" id="pais" title="País" onchange="buscador();"> 
                            <?php echo $comboPais?>
                        </select>
                    </div>
                    <div class="js-input js-select">
                        <select name="canal" id="canal" title="Buscar canal" onchange="buscador();"> 
                            <?php echo $comboCanal?>
                        </select>
                    </div>
                    <div class="js-form">
                        <input type="text" id="persona" class="form-control" placeholder="Buscar por persona" onchange="buscador();">
                        <div class="js-icon">
                            <button class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="mdi mdi-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="js-select">
                        <select name="tipo" id="tipo" title="Tipo" onchange="buscadorTipo(); validar();"> 
                            <?php echo $comboTipo?>
                        </select>
                    </div>
                    <div class="js-form">
                        <input type="text" id="fechainicio" name="fechainicio" maxlength="10" class="form-control" placeholder="Fecha de Inicio" onchange="validar();">
                        <div class="js-icon">
                            <button class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="mdi mdi-date_range"></i>
                            </button>
                        </div>
                    </div>
                    <div class="js-form">
                        <input type="text" id="fechafin" name="fechafin" maxlength="10" class="form-control" placeholder="Fecha Final" onchange="validar();">
                        <div class="js-icon">
                            <button class="mdl-button mdl-js-button mdl-button--icon">
                                <i class="mdi mdi-date_range"></i>
                            </button>
                        </div>
                    </div>
                    <button id="guardar" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-configuracion" onclick="saveConfig();" disabled>Guardar configuraci&oacute;n</button>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-preview" onclick="preview()">Preview</button>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-6">
                        <div class="js-usuarios">
                            <div class="js-usuarios--menu">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--usuario" onclick="selectAll();">Seleccionar Todo</button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--usuario" onclick="removeAll();">Limpiar</button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--usuario">Mostrar solo seleccionados</button>
                            </div>
                            <div class="table-responsive js-table">
                                <table id="example" class="display nowrap table table-hover dt-responsive" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th class="text-left">Usuario <span class="js-span" id="totalUser"><?php echo $totaUser?></span></th>
                                            <th class="text-left">Pá&iacute;s</th>
                                            <th class="text-left">Canal/Empresa</th>
                                            <th class="text-left">Cumplea&ntilde;os</th>
                                            <th class="text-center">Acci&oacute;n</th>
                                        </tr>
                                    </thead>
                                    <tbody id="bodyUsers">
                                        <?php echo $bodyUsers?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="js-template">
                            <p class="m-b-30">Elige aqu&iacute; el template a usar</p>
                            <div id="eblast">
                                <?php echo $eblast?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-subtitle">
                    <h2>Programados</h2>
                </div>
                <div class="js-programados">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><a><i class="mdi mdi-visibility"></i>Saludo de Cumplea&ntilde;o</a></td>
                                    <td class="js-flex">
                                        <div class="js-date">
                                            <input type="text" id="fechainicio" class="form-control" placeholder="Fecha de Inicio">
                                        </div>
                                        <span>al</span>
                                        <div class="js-date">
                                            <input type="text" id="fechainicio" class="form-control" placeholder="Fecha Final">
                                        </div>
                                    </td>
                                    <td>Usuarios <span class="js-span">23</span></td>
                                    <td><a class="js-reporte">Generar Base<i class="mdi mdi-arrow_downward"></i></a></td>
                                    <td><a class="js-reporte">Reporte<i class="mdi mdi-arrow_downward"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a><i class="mdi mdi-visibility"></i>Saludo de Cumplea&ntilde;o</a></td>
                                    <td class="js-flex">
                                        <div class="js-date">
                                            <input type="text" id="fechainicio" class="form-control" placeholder="Fecha de Inicio">
                                        </div>
                                        <span>al</span>
                                        <div class="js-date">
                                            <input type="text" id="fechainicio" class="form-control" placeholder="Fecha Final">
                                        </div>
                                    </td>
                                    <td>Usuarios <span class="js-span">54</span></td>
                                    <td><a class="js-reporte">Generar Base<i class="mdi mdi-arrow_downward"></i></a></td>
                                    <td><a class="js-reporte">Reporte<i class="mdi mdi-arrow_downward"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a><i class="mdi mdi-visibility"></i>Saludo de Cumplea&ntilde;o</a></td>
                                    <td class="js-flex">
                                        <div class="js-date">
                                            <input type="text" id="fechainicio" class="form-control" placeholder="Fecha de Inicio">
                                        </div>
                                        <span>al</span>
                                        <div class="js-date">
                                            <input type="text" id="fechainicio" class="form-control" placeholder="Fecha Final">
                                        </div>
                                    </td>
                                    <td>Usuarios <span class="js-span">250</span></td>
                                    <td><a class="js-reporte">Generar Base<i class="mdi mdi-arrow_downward"></i></a></td>
                                    <td><a class="js-reporte">Reporte<i class="mdi mdi-arrow_downward"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="js-fechas">
                    <div class="js-subtitle">
                        <h2>Fechas importantes en camino</h2>
                        <div class="js-flex-wrap">
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a de la Madre</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a Internacional del Trabajo</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a de la Mujer</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a del Padre</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a del Planeta</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a del Ni&ntilde;o</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a de la Madre</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a de la Madre</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                            <div class="js-fecha">
                                <div class="js-fecha__title">
                                    <h2>13</h2>
                                    <span>mayo</span>
                                </div>
                                <div class="js-fecha__contenido">
                                    <h2>D&iacute;a de la Madre</h2>
                                    <a>Ver template</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="modalPreview" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="mdl-card">
                        <div class="mdl-card__supporting-text">
                        </div>
                        <div class="mdl-card__menu">
                            <button class="mdl-button mdl-js-button mdl-button--icon" data-dismiss="modal">
                                <i class="mdi mdi-close"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>directorio.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            initButtonCalendar('fechainicio');
            initButtonCalendar('fechafin');
            initMaskInputs('fechainicio','fechafin');
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip(); 
            });
        </script>
    </body>
</html>