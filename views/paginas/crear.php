<?php 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="../../node_modules/boxicons/css/boxicons.min.css">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Crear Ticket |ECI</title>
 	<link rel="stylesheet" href="../../src/css/style_crear.css">
    <link rel="stylesheet" href="../../src/css/style_crear_chiquito.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">

 </head>

 <body>
    <div>
        <!--<?php foreach ($usuarios as $usuario) {
            var_dump($usuario);
        }  ?>
    </div>-->

 	<div class="botones__nuevos">
    	<a  href="inicio" class="boton3">Volver</a>
    	<!--<button class="boton2">Crear</button>-->
	</div>


    <div class="d-none d-md-block content">

        <h1 class="brand">Alta de Tickets <span>(^w^)-☆</span> </h1>

        <div class="alta-wrapper">

            <div class="alta-form">
                <h3>Crea tu Ticket</h3>

                <form action="crear" method="POST" enctype="multipart/form-data">

                    <div class="  div" >
                        <label>Etiqueta</label>
                        <select id="etiqueta1" name="etiqueta"> 
                            <option value="" >N/A</option>
                            <option value="Papeletas" >Papeletas</option>
                            <option value="Formulario" >Formulario</option>
                            <option value="Gafetes" >Gafetes</option>
                            <option value="Modulos">Modulos</option>
                            <option value="Permisos">Permisos</option>
                        </select>
    
                    </div>
                    
                    <div class="div">
                        <label>Asunto</label>
                        <input type="text" name="asunto" id="asunto1"> 
                    </div>
                    <div class="block div_personal">
                        <label>Motivo</label>
                        <textarea name="motivo" rows="2" id="motivo1"></textarea>
                    </div>

                    <!--<div class="segundo_div">-->
                

                    <div class="div">
                        <label>Usuario Responsable</label>
                        <input type="hidden" name="id_usuariores" id="id_usuariores">

                        <input type="text" name="usuario_r" id="userRespon" class="">
                        <div id="resultado" class="resultadoc">
                            <select id="nombreList" style="display: none;">
                                <option value="">N/A</option>
                            </select>
                        </div>
                    </div>
                        

                    <div class="div divUserCorres">
                        <label>Usuario Corresponsable</label>
                        <input type="hidden" name="id_usuariocor" id="id_usuariocor">
                        <div class="corresponsable">
                            <input type="text" name="usuario_c" id="userCorres" class="">
                            <button class="div_btn" type="button">+</button>
                        </div>
                        <div id="resultado" class="resultadoc">
                            <select id="nombreList2" style="display: none;">
                                <option value="">N/A</option>
                            </select>
                        </div>
                        <input type="hidden" name="id_todosUserCorrespon" id="id_todosUserCorrespon">
                        <div class="contenedor-azul" style="background: blue;">
                          <!-- Los valores seleccionados se agregarán aquí -->
                        </div>
                    </div>
                    
                    <div class="block div_upload">
                        <label>Adjunto</label>
                        <input class="upload_file" type="file" name="archivo_adjunto" title="Sube tu archivo">
                    </div>


                    <input type="hidden" name="hora" value="<?php echo date('H:i:s')?>">
                    <input type="hidden" name="fecha" value="<?php echo date('Y-m-d') ?>">
                    <input type="hidden" name="nomina" value="<?php echo $_SESSION['identificador']?>">
                    
                    
                    <div class="block div_personal boton__guardar">
                        <button class="submit_guardar" type="submit" id="guardar1">Guardar</button>
                    </div>

                    <!--</div>-->
                    
                </form>
            </div>


            <div class="alta-info--principal">
                <div class="alta-info">
                    <h4>Buen Día</h4>
    
                        <p>Hola, por favor llena todos los Campos Correctamente</p>

                        <img src="../../src/img/ilustracion7.svg" alt="ilustracion" class="
                        imagen">
 
                </div>
            </div>
        </div>

    </div>


<!------------FORMULARIO PEQUEÑO RESPONSIVO--------------->


    <div class="d-md-none content">

        <h1 class="brand">Alta de Tickets <span><⁠(⁠￣⁠︶⁠￣⁠)⁠></span></h1>

    <div class="container">
        <h3>Crea tu Ticket</h3>

        <div class="progress-bar">
            <div class="paso">
                <p>Principal</p>
                <div class="num" id="num1">
                    <span>1</span>
                </div>
                <div class="check"><i class='bx bx-check'></i></div>
            </div>
            <div class="paso">
                <p>General</p>
                <div class="num" id="num2">
                    <span>2</span>
                </div>
                <div class="check "><i class='bx bx-check'></i></div>
            </div>
            <div class="paso">
                <p>Archivo</p>
                <div class="num" id="num3">
                    <span>3</span>
                </div>
                <div class="check"> <i class='bx bx-check'></i></div>
            </div>
        </div>

        <div class="form-princ">
            <form action="#">
                
                <!--PAGINA 1-->
                <div class="pagina movPag" id="parte1">
                    <div class="titulo">Información principal</div>
                    <div class="campo">
                        <div class="label">Etiqueta</div>
                        
                        <select id="etiqueta"> 
                            <option value="" >N/A</option>
                            <option value="1" >Papeletas</option>
                            <option value="2" >Formulario</option>
                            <option value="3" >Gafetes</option>
                        </select>
                    </div>
                    <div class="campo">
                        <div class="label">Asunto</div>
                        <input type="text" id="asunto">
                    </div>
                    <div class="campo">
                        <div class="label">Motivo</div>
                        <textarea id="motivo" rows="2"></textarea>
                    </div>
                    <div class="campo sigPag">
                        <button class="btn5" type="button" id="sgt" onclick="pulsar(1)">Siguiente</button>
                    </div>                    
                </div>

                <!--PAGINA 2-->
                <div class="pagina" id="parte2">
                    <div class="titulo">Información secundaria</div>
                    <div class="campo">
                        <div class="label">Usuario Responsable</div>
                        
                        <input type="text" id="usuario_r" placeholder="Usuario responsable">
                    </div>
                    <div class="campo">
                        <div class="label">Puesto Responsable</div>
                        <select id="puesto_responsable">
                            <option value="1">Auxiliar Sistemas</option>
                            <option value="2">Coach</option>
                            <option value="3">Auxiliar RH</option>
                            <option value="4">Asesor de Calidad</option>
                            
                        </select>
                    </div>
                    <div class="campo">
                        <div class="label">Usuario Corresponsable</div>
                        
                        <input type="text" id="user_corres" placeholder="Usuario Corresponsable">
                        <button class="btn_corres">+</button>
                    </div>
                    <div class="campo btns">
                        <button class="volver-pag1 volver" type="button" onclick="volver(1)">Anterior</button>
                        <button class="adelante-pag3 adelante" type="button" onclick="pulsar(2)">Siguiente</button>
                    </div>                    
                </div>

                <!--PAGINA 3-->
                <div class="pagina" id="parte3">
                    <div class="titulo">Información adjunta</div>
                    <div class="campo">
                        <div class="label">Adjunto</div>
                        <input class="upload_file" type="file" title="Sube tu archivo">
                    </div>
                    
                    <div class="campo btns" id="parte3_btns">
                        <button class="volver-pag2 volver" type="button" onclick="volver(2)" >Anterior</button>
                        <button class="fin" type="submit" id="guardar2" onclick="pulsar(3)">Guardar</button>
                    </div>                    
                </div>
            </form>
        </div>
    </div>

</div>
 	
    <script src="../../src/js/movimiento.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="../../src/js/sweetAlert.js"></script>

 </body>
 </html>