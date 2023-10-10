<?php 
$auth = $_SESSION['login'];
$id = $_GET['id'];

if($auth == false){
header('Location: pagina_no_encontrada');
}

 ?>
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

                <form action="terminados" method="POST" enctype="multipart/form-data">

                    <div class="  div" >
                        <label>Etiqueta</label>
                        <?php $etiquetaSeleccionada = $val->etiqueta; ?>
                        <select id="etiqueta1" name="etiqueta"> 
                            <option value="" <?php echo ($etiquetaSeleccionada === '' ? 'selected' : ''); ?>>N/A</option>
                            <option value="Papeletas" <?php echo ($etiquetaSeleccionada === 'Papeletas' ? 'selected' : ''); ?>>Papeletas</option>
                            <option value="Formulario" <?php echo ($etiquetaSeleccionada === 'Formulario' ? 'selected' : ''); ?>>Formulario</option>
                            <option value="Gafetes" <?php echo ($etiquetaSeleccionada === 'Gafetes' ? 'selected' : ''); ?>>Gafetes</option>
                            <option value="Modulos" <?php echo ($etiquetaSeleccionada === 'Modulos' ? 'selected' : ''); ?>>Modulos</option>
                            <option value="Permisos" <?php echo ($etiquetaSeleccionada === 'Permisos' ? 'selected' : ''); ?>>Permisos</option>
                        </select>
    
                    </div>

                    <div class="div">
                        <label>Asunto</label>
                        <input type="text" name="asunto" id="asunto1" value="<?php echo $val->asunto; ?>"> 
                    </div>

                    <div class="block div_personal">
                        <label>Motivo</label>
                        <textarea name="motivo" rows="2" id="motivo1"><?php echo $val->descripcion; ?></textarea>
                    </div>

                    <!--<div class="segundo_div">-->
                
                    	<?php $usuarioResponsable = $val->responsable; ?>
                    	<?php $idResponsable = $val->id_responsable; ?>


                    <div class="div">
                        <label>Usuario Responsable</label>
                        <input type="hidden" name="id_usuariores" id="id_usuariores" value="<?php echo $idResponsable; ?>">
                        <input type="text" name="usuario_r" id="userRespon" class="" value="<?php echo $usuarioResponsable; ?>">
                        <div id="resultado" class="resultadoc">
                            <select id="nombreList" style="display: none;">
                                <option value="">N/A</option>
                            </select>
                        </div>
                    </div>

                        
                    <?php $usuarioCorresponsable = $val->corresponsable; ?>
                    <?php $idCorresponsable = $val->id_corresponsable; ?>

                    <div class="div divUserCorres">
                        <label>Usuario Corresponsable</label>
                        <input type="hidden" name="id_usuariocor" id="id_usuariocor">
                        <div class="corresponsable">
                            <input type="text" name="usuario_c" id="userCorres" class="" >
                            <button class="div_btn" type="button">+</button>
                        </div>
                        <div id="resultado" class="resultadoc">
                            <select id="nombreList2" style="display: none;">
                                <option value="">N/A</option>
                            </select>
                        </div>
                        <input type="hidden" name="id_todosUserCorrespon" id="id_todosUserCorrespon" value="<?php echo $idCorresponsable; ?>">
                        	
                        	<?php
                            $corresponsables = explode(',', $val->corresponsable);
                            $idsCorresponsables = explode(',', $val->id_corresponsable);
                            foreach ($corresponsables as $index => $usuarioCorresponsable) : ?>
                                


                                <div class="contenedor-azul" id="contenedorUsuariosCorresponsables">
                                        <div class="usuario-container">
                                            <div class="usuario-seleccionado">
                                                <?php echo trim($usuarioCorresponsable); ?>
                                                <button type="button" class="eliminar-usuario" data-id="<?php echo $idsCorresponsables[$index]; ?>">X</button>
                                            </div>
                                            <input type="hidden" id="adios_<?php echo $idsCorresponsables[$index]; ?>" class="input-nuevo" value="<?php echo $idsCorresponsables[$index]; ?>">
                                        </div>
                                    </div>
                            <?php endforeach; ?>
                    </div>
                    
                    <div class="block div_upload">
                        <label>Adjunto</label>
                        <input class="upload_file" type="file" name="archivo_adjunto" title="Sube tu archivo">
                    </div>

                    <div class="block div_upload">
                        <label>Adjunto</label>
                        <?php
                        $rutaAdjunto = $val->adjunto; // Obtener la ruta del archivo adjunto desde la base de datos
                        if (!empty($rutaAdjunto)) {
                            // Construir la URL completa al archivo adjunto
                            $urlAdjunto = 'http://localhost/Sistemas_de_tickets/archivos/' . basename($rutaAdjunto);
                            // Crear un enlace al archivo
                            echo '<a href="' . $urlAdjunto . '" target="_blank">' . basename($rutaAdjunto) . '</a>';
                        } else {
                            echo 'No hay archivo adjunto.';
                        }
                        ?>
                    </div>



                    <input type="hidden" name="hora" value="<?php echo date('H:i:s')?>">
                    <input type="hidden" name="fecha" value="<?php echo date('Y-m-d') ?>">
                    <input type="hidden" name="nomina" value="<?php echo $_SESSION['identificador']?>">
                    
                    
                    <div class="block div_personal boton__guardar">
                        <button class="submit_guardar" type="submit" id="guardar1">Guardar</button>
                    </div>
                    <input type="hidden" name="id_registro" value="<?php echo $val->id; ?>">


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



    <script src="../../src/js/movimiento.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="../../src/js/sweetAlert.js"></script>

</body>
</html>