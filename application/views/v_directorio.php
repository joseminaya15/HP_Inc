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
                    <div class="js-input js-select">
                        <select name="pais" id="pais" title="País" onchange=""> 
                            <option value="">Seleccionar Todo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="República Dominicana">Rep&uacute;blica Dominicana</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Panamá">Panamá</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Estados Unidos">Estados Unidos</option>
                            <option value="Venezuela">Venezuela</option>
                        </select>
                    </div>
                    <div class="js-input js-select">
                        <select name="tipo" id="tipo" title="Tipo" onchange=""> 
                            <option value="Sesonals">Sesonals</option>
                            <option value="Saludo Cumpleaños">Saludo Cumplea&ntilde;os</option>
                            <option value="Saludo Aniversario">Saludo Aniversario</option>
                            <option value="Saludo Buen Negocio">Saludo Buen Negocio</option>
                        </select>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">Guardar configuraci&oacute;</button>
                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button">Preview</button>
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
                                            <th class="text-left">Usuario <span class="js-span">222</span></th>
                                            <th class="text-left">Pá&iacute;s</th>
                                            <th class="text-left">Canal/Empresa</th>
                                            <th class="text-left">Cumplea&ntilde;os</th>
                                            <th class="text-center">Acci&oacute;n</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablecity">
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                                <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user1.jpg"><span>Anna K.</span></td>
                                            <td>Panam&aacute;</td>
                                            <td>Yoytec Computer, S.A</td>
                                            <td>7/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-1" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-1">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
                                                <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user2.jpg"><span>Bethany D.</span></td>
                                            <td>Costa Rica</td>
                                            <td>Tecnasa</td>
                                            <td>7/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-2" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-2">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-3">
                                                <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user3.jpg"><span>Luke C.</span></td>
                                            <td>Costa Rica</td>
                                            <td>Tecnasa</td>
                                            <td>10/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-3" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-3">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-4">
                                                <input type="checkbox" id="checkbox-4" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user4.jpg"><span>Sthephen O.</span></td>
                                            <td>El Salvador</td>
                                            <td>Tecnasa</td>
                                            <td>12/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-4" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-4">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-5">
                                                <input type="checkbox" id="checkbox-5" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user5.jpg"><span>Tyler O.</span></td>
                                            <td>Ecuador</td>
                                            <td>Tecnasa</td>
                                            <td>27/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-5" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-5">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-6">
                                                <input type="checkbox" id="checkbox-6" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user1.jpg"><span>Anna K.</span></td>
                                            <td>Panam&aacute;</td>
                                            <td>Yoytec Computer, S.A</td>
                                            <td>7/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-6" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-6">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-7">
                                                <input type="checkbox" id="checkbox-7" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user2.jpg"><span>Bethany D.</span></td>
                                            <td>Costa Rica</td>
                                            <td>Tecnasa</td>
                                            <td>7/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-7" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-7">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-8">
                                                <input type="checkbox" id="checkbox-8" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user3.jpg"><span>Luke C.</span></td>
                                            <td>Costa Rica</td>
                                            <td>Tecnasa</td>
                                            <td>10/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-8" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-8">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-9">
                                                <input type="checkbox" id="checkbox-9" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user4.jpg"><span>Sthephen O.</span></td>
                                            <td>El Salvador</td>
                                            <td>Tecnasa</td>
                                            <td>12/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-9" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-9">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-10">
                                                <input type="checkbox" id="checkbox-10" class="mdl-checkbox__input">
                                            </label></td>
                                            <td class="js-flex"><img class="js-image" src="<?php echo RUTA_IMG?>user/user5.jpg"><span>Tyler O.</span></td>
                                            <td>Ecuador</td>
                                            <td>Tecnasa</td>
                                            <td>27/7/18</td>
                                            <td class="text-center">
                                                <button id="menu-10" class="mdl-button mdl-js-button mdl-button--icon">
                                                    <i class="mdi mdi-more_vert"></i>
                                                </button>
                                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu-10">
                                                    <li class="mdl-menu__item">Editar</li>
                                                    <li class="mdl-menu__item">Eliminar</li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
                <div class="js-subtitle">
                    <h2>Programados</h2>
                </div>
                <div class="js-programados">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><a><i class="mdi mdi-visibility"></i>Saludo de Cumplea&ntilde;o</a></td>
                                    <td></td>
                                    <td></td>
                                    <td>Usuarios <span class="js-span">23</span></td>
                                    <td><a class="js-reporte">Generar Base<i class="mdi mdi-arrow_downward"></i></a></td>
                                    <td><a class="js-reporte">Reporte<i class="mdi mdi-arrow_downward"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a><i class="mdi mdi-visibility"></i>Saludo de Cumplea&ntilde;o</a></td>
                                    <td></td>
                                    <td></td>
                                    <td>Usuarios <span class="js-span">54</span></td>
                                    <td><a class="js-reporte">Generar Base<i class="mdi mdi-arrow_downward"></i></a></td>
                                    <td><a class="js-reporte">Reporte<i class="mdi mdi-arrow_downward"></i></a></td>
                                </tr>
                                <tr>
                                    <td><a><i class="mdi mdi-visibility"></i>Saludo de Cumplea&ntilde;o</a></td>
                                    <td></td>
                                    <td></td>
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
    </body>
</html>