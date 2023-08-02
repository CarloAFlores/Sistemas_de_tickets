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



 	<div class="botones__nuevos">
    	<button class="boton3">Volver</button>
    	<!--<button class="boton2">Crear</button>-->
	</div>


    <div class="d-none d-md-block content">

        <h1 class="brand">Alta de Tickets <span>(^w^)-☆</span> </h1>

        <div class="alta-wrapper">

            <div class="alta-form">
                <h3>Crea tu Ticket</h3>

                <form action="">

                    <div class="  div" >
                        <label>Etiqueta</label>
                        <select > 
                            <option value="1" >N/A</option>
                            <option value="2" >Papeletas</option>
                            <option value="3" >Formulario</option>
                            <option value="4" >Gafetes</option>
                        </select>
    
                    </div>
                    
                    <div class="div">
                        <label>Asunto</label>
                        <input type="text" name="asunto">
                    </div>
                    <div class="block div_personal">
                        <label>Motivo</label>
                        <textarea name="motivo" rows="2"></textarea>
                    </div>

                    <!--<div class="segundo_div">-->
                
                    <div class="div">
                        <label>Usuario Responsable</label>
                        <input type="text" name="usuario_r">
                    </div>


                    <div class="div">
                        <label>Puesto Responsable</label>
                        <select>
                            <option value="1">Auxiliar Sistemas</option>
                            <option value="2">Coach</option>
                            <option value="3">Auxiliar RH</option>
                            <option value="4">Asesor de Calidad</option>
                            <option value="5">Asistente personal del Consejo Directivo</option>
                        </select>

                    </div>


                   <div class="div"> 
                        <label>Usuario Corresponsable</label>
                        <div class="corresponsable">
                        <input type="text" name="usuario_c">
                        <button class="div_btn">+</button>
                        </div>
                   </div>


                    <div class="div div_upload">
                        <label>Adjunto</label>
                        <button class="upload_file" type="submit" title="Sube tu archivo">Upload file</button>
                    </div>

                    <div class="block div_personal">
                        <button class="submit_guardar" type="submit">Guardar</button>
                    </div>

                    <!--</div>-->
                    
                </form>
            </div>


        <div class="alta-info--principal">
            <div class="alta-info">
                <h4>More Info</h4>

                <p>Hola, por favor llena todos los Datos</p>

                <ul class="imagenes__totales">
                    
                    <li class="imagenes"><i class='bx bxl-tiktok' style='color:#fffcfc' ></i></li>
                    <li class="imagenes"><i class='bx bxl-facebook-circle' style='color:#ffffff' ></i></li>
                </ul>
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
                <div class="num">
                    <span>1</span>
                </div>
                <div class="check"><i class='bx bx-check'></i></div>
            </div>
            <div class="paso">
                <p>General</p>
                <div class="num">
                    <span>2</span>
                </div>
                <div class="check "><i class='bx bx-check'></i></div>
            </div>
            <div class="paso">
                <p>Archivo</p>
                <div class="num">
                    <span>3</span>
                </div>
                <div class="check"> <i class='bx bx-check'></i></div>
            </div>
        </div>

        <div class="form-princ">
            <form action="#">
                
                <!--PAGINA 1-->
                <div class="pagina" id="parte1">
                    <div class="titulo">Información principal</div>
                    <div class="campo">
                        <div class="label">Etiqueta</div>
                        
                        <select id="etiqueta"> 
                            <option value="1" >N/A</option>
                            <option value="2" >Papeletas</option>
                            <option value="3" >Formulario</option>
                            <option value="4" >Gafetes</option>
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
                    <div class="campo">
                        <button type="button" id="sgt" onclick="pulsar(1)" class="btn_sgnts">Siguiente</button>
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
                        <button class="adjunto" type="submit" title="Sube tu archivo">Upload file</button>
                    </div>
                    
                    <div class="campo btns">
                        <button class="volver-pag2 volver" type="button" onclick="volver(2)">Anterior</button>
                        <button class="fin" type="button">Guardar</button>
                    </div>                    
                </div>
            </form>
        </div>
    </div>

</div>
 	
    <script src="../../src/js/movimiento.js"></script>


 </body>
 </html>