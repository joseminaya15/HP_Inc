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
                    <div class="js-select">
                        <select name="pais" id="pais" title="País" onchange="cambiaPais();"> 
                            <?php echo $comboPais?>
                        </select>
                    </div>
                    <div class="js-select">
                        <select name="canal" id="canal" title="Buscar canal" onchange=""> 
                            <?php echo $comboTipo?>
                        </select>
                    </div>
                    <div class="js-form">
                        <input type="text" id="fechafin" class="form-control" placeholder="Buscar por persona">
                    </div>
                    <div class="js-select">
                        <select name="tipo" id="tipo" title="Tipo" onchange=""> 
                            <?php echo $comboTipo?>
                        </select>
                    </div>
                    <div class="js-form">
                        <input type="text" id="fechainicio" class="form-control" placeholder="Fecha de Inicio">
                    </div>
                    <div class="js-form">
                        <input type="text" id="fechafin" class="form-control" placeholder="Fecha Final">
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-configuracion">Guardar configuraci&oacute;n</button>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button js-preview">Preview</button>
                </div>
                <div class="row m-t-20">
                    <div class="col-md-6">
                        <div class="js-usuarios">
                            <div class="js-usuarios--menu">
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--usuario">Seleccionar Todo</button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--usuario">Borrar Selecci&Oacute;n</button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--usuario">Mostrar solo seleccionados</button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--usuario">Limpiar</button>
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
                            <div class="js-card">
                                <div class="js-card__contenido">
                                    <img src="<?php echo RUTA_IMG?>template/template1.png">
                                </div>
                                <div class="js-card__select">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                        <input type="radio" id="option-1" class="mdl-radio__button" name="options-1" value="1" onclick="selectTemplate(this.id)">
                                        <span class="mdl-radio__label">Seleccionar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="js-card js-transform">
                                <div class="js-card__contenido">
                                    <img src="<?php echo RUTA_IMG?>template/template2.png">
                                </div>
                                <div class="js-card__select">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                        <input type="radio" id="option-2" class="mdl-radio__button" name="options-1" value="2" onclick="selectTemplate(this.id)" checked>
                                        <span class="mdl-radio__label">Seleccionar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="js-card">
                                <div class="js-card__contenido">
                                    <img src="<?php echo RUTA_IMG?>template/template1.png">
                                </div>
                                <div class="js-card__select">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
                                        <input type="radio" id="option-3" class="mdl-radio__button" name="options-1" value="3" onclick="selectTemplate(this.id)">
                                        <span class="mdl-radio__label">Seleccionar</span>
                                    </label>
                                </div>
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
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>directorio.js?v=<?php echo time();?>"></script>
    </body>
</html>