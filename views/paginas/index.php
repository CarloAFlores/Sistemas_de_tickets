<?php 
$auth = $_SESSION['login'];
if($auth == false){
header('Location: pagina_no_encontrada');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../node_modules/boxicons/css/boxicons.min.css">
	<link rel="stylesheet" href="../../src/css/style_tabla.css">
    <link rel="stylesheet" href="../../src/css/modales_style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@200;300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
	<div class="botones">
        
        <a href="crear" class="boton2" type="button">Crear</a>
        <button class="boton1" id="ocultar-mostrar" onclick="obtener()">Buscar</button>
    </div>

    <div class="d-xl-none content box" id="ocultar-y-mostrar">

            <form action='/search' id='search-form' method='get' target='_top'>
                <input id='search-text' name='q' placeholder='Busca tu ticket' type='text' class="buscador">
                <button id='search-button' type='submit'>
                    <span>
                        <i class='bx bx-search bx-spin' style='color:#ffffff'  id="lupa"></i>
                    </span>
                </button>
            </form>
    </div>
    


<table class="tabla">
    <thead>
        <tr id="filterRow">
            <th>No. Ticket</th>
            <th>Etiqueta</th>
            <th>Asunto</th>
            <th>Motivo</th>
            <th>Usuario Crea</th>
            <th>Status Ticket</th>
            <th>Progreso</th>
            <th>Opciones</th>
            <th>Detalles</th>

        </tr>
        <tr class="selectores">
            <th><input type="text" id="filterNoTicket" placeholder="No. Ticket"></th>
            <th><input type="text" id="filterEtiqueta" placeholder="Etiqueta"></th>
            <th><input type="text" id="filterAsunto" placeholder="Asunto"></th>
            <th><input type="text" id="filterComentario" placeholder="Motivo"></th>
            <th><input type="text" id="filterUsuarioCrea" placeholder="Usuario Crea"></th>
            <th>
                <select id="filterStatusTicket">
                    <option value=""></option>
                    <option value="Creado">Creado</option>
                    <option value="En Proceso">En Proceso</option>
                    <option value="Validado">Validado</option>
                    <option value="Terminado">Terminado</option>
                    <option value="En espera por falta de recurso">En espera por falta de recurso</option>
                    <option value="No procede">No procede</option>
                    <option value="Eliminado">Eliminado</option>

                </select>
            </th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
        <tbody id="ticketsContainer">


            <?php foreach ($tickets as $ticket): ?>
            <tr class="tbrow">
                <td data-label="No. Ticket"><?php echo $ticket->id; ?></td>
                <td data-label="Etiqueta"><?php echo $ticket->etiqueta; ?></td>
                <td data-label="Asunto"><?php echo $ticket->asunto; ?></td>
                <td data-label="Comentario"><?php echo $ticket->descripcion; ?></td>
                <td data-label="Usuario Crea"><?php echo $ticket->nombre; ?> </td>
                <td data-label="Status Ticket"><?php echo $ticket->nombre_status; ?></td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated barritamodal bg-<?php echo $ticket->color;?>" role="progressbar" style="width:<?php echo $ticket->progreso;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ticket->progreso;?>%</div>
                    </div>
                    
                    
                    
                </td>

                <td data-label="Opciones">
                   	<div class="opciones_pequeñas"> 

                    	<button href="#" class="boton-li icono " title="Status" type="button" id="miboton" onclick="hola(<?php echo $ticket->id; ?>)">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-subir icono" title="Archivo" onclick="hola2(<?php echo $ticket->id; ?>)" id="">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-resubir icono" title="AdRespuesta" onclick="hola3(<?php echo $ticket->id; ?>)">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-book icono" title="Resumen">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</button>

                        <form action="" method="GET">
                    	<button class="boton-trash icono" title="Eliminar" type="button" id="Seraeliminado" onclick="hola4(<?php echo $ticket->id; ?>);">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</button>
                        </form>
                        
                        <button class="boton-revision icono" title="Actualizar" data-id="<?php echo $ticket->id; ?>">
                            <i class='bx bx-revision' style='color:#ffffff'></i>
                        </button>


                        
                   	</div>
                </td>
                <td data-label="Detalles">
                    <a href="en_proceso?id=<?php echo $ticket->id; ?>" class="btn" type="button">Ver mas</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>

<!--primer modal-->
<div class="primermodal-container">
    <div class="primermodal modal-close">
        <p class="close" id="close">X</p>
        <img src="../../src/img/ilustracion2.svg" alt="ilustracion">
        <div class="modal-textos">
            <h2>STATUS <span> Ticket </span></h2>


            <form class="cajita">
                <div class="cajita__dos">
                    <h4>Status</h4>
                     
                    <select class="cajita__dos--opciones" id="estadoTicket">
                       
                        <option value="0">Selecciona</option>
                        <option value="5">En espera por falta de recurso</option>
                        <option value="2">En proceso</option>
                        <option value="6">No procede</option>
                    </select>
                    <input type="hidden" id="hiddenEstadoTicket" name="hiddenEstadoTicket" value="">
         

                </div>
                <!--<div class="cajita__tres">
                    <h4>Comentario</h4>
                    <textarea rows="1"></textarea>
                </div>-->
                <input type="hidden" name="id_ticketstatus" id="id_ticketstatus">

                <div class="cajita__cuatro">
                    <button type="button" title="subir" class="botonmodal guardastatus" onclick="guardarEstadoTicket(<?php echo $ticket->id; ?>)">Guardar</button>
                </div>


             </form>

        </div>
    </div>
</div>
<!--se cierra-->
<!--segundo modal-->
<div class="segundomodal-container">
    <div class="segundomodal modal-close2">
        <p class="close2">X</p>
        <img src="../../src/img/ilustracion3.svg" alt="ilustracion">
        <div class="modal-textos2">
            <h2>UPLOAD <span> Archivo </span></h2>


            <form class="cajita2">
                <div class="cajita__dos2">
                    <h4>Subir archivo</h4>
                    <label for="file">Choose file to upload</label>
                    <input type="file" name="file" accept="image/png, image/jpeg">
                </div>
                
                <div class="cajita__cuatro2">
                <button type="submit" title="subir" class="botonmodal">Guardar</button>
                </div>
             </form>

        </div>
    </div>
</div>
<!--se cierra-->
<!--tercer modal-->
<div class="tercermodal-container">
    <div class="tercermodal modal-close3">
        <p class="close3">X</p>
        <img src="../../src/img/ilustracion4.svg" alt="ilustracion">
        <div class="modal-textos3">
            <h2>UPLOAD <span> Respuesta </span></h2>


            <form class="cajita3">
                <div class="cajita__dos3">
                    <h4>Comentario</h4>
                    <textarea rows="1"></textarea>
                </div>
                
                <div class="cajita__cuatro3">
                <button type="submit" title="subir" class="botonmodal">Guardar</button>
                </div>
             </form>

        </div>
    </div>
</div>
<!--se cierra-->
<!--cuarto modal-->
<div class="cuartomodal-container">
    <div class="cuartomodal modal-close4">
        <p class="close4">X</p>
        <img src="../../src/img/ilustracion5.svg" alt="ilustracion">
        <div class="modal-textos4">
            <h2>BORRAR <span> Ticket </span></h2>


            <form class="cajita4">
                <div class="cajita__dos4">
                    <h4>¿Estás seguro que quieres eliminar el Ticket?</h4>
                </div>
                
                <div class="cajita__cuatro4">
                    <input type="hidden" name="id_ticket" id="id_ticket">
                    <button type="button" title="Aceptar" id="aceptar" class="aceptar1" onclick="aceptar4(<?php echo $ticket->id; ?>)">Aceptar
                    </button>

                    <button type="submit" title="Cancelar" >Cancelar</button>
                </div>
            </form>

        </div>
    </div>
</div>
<!--se cierra-->
<!--quinto modal-->
<div class="quintomodal-container">
    <div class="quintomodal modal-close5">
        <p class="close5">X</p>
        <img src="../../src/img/ilustracion6.svg" alt="ilustracion">
        <div class="modal-textos5">
            <h2>DETALLES<span> Ticket </span></h2>


            <form class="cajita5">
                    
                <div class="cajita__cuatro5">
                    <div class="tabla__modal">
                        <div class="fila">
                            <div class="columna">
                                <div class="cabeza">No.Ticket</div>
                                <div class="contenido">1</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Etiqueta</div>
                                <div class="contenido">Se necesita mejorar el sistema</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Asunto</div>
                                <div class="contenido">Se necesita mejorar el sistema</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Comentario</div>
                                <div class="contenido">Puede tener tiempo de diferencia</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Adjunto</div>
                                <div class="contenido">
                                    <h4>....</h4>
                                </div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Usuario Crea</div>
                                <div class="contenido">Abigail Zaragoza</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Puesto Crea</div>
                                <div class="contenido">Recursos Humanos</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Fecha creación</div>
                                <div class="contenido">8/08/2023</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Hora creacion</div>
                                <div class="contenido">12:40</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Usuario responsable</div>
                                <div class="contenido">Sergio Merino</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Puesto Responsable</div>
                                <div class="contenido">Auxiliar Sistemas</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Fecha Final</div>
                                <div class="contenido">20/08/2023</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Hora final</div>
                                <div class="contenido">13:20</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Status</div>
                                <div class="contenido">Terminado</div>
                            </div>
                            
                            <div class="columna">
                                <div class="cabeza">SI / NO Satisfacción</div>
                                <div class="contenido">SI</div>
                            </div>
                            <div class="columna">
                                <div class="cabeza">Progreso</div>
                                <div class="contenido">
                                    <div class="progress progress-barrita">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated barritamodal" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%">100%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </form>

        </div>
    </div>
</div>
<!--se cierra-->

<div class="paginacion">
    <nav aria-label="...">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            <li class="page-item numeros">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item numeros" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item numeros">
                <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
</div>

    <script src="../../src/js/tabla.js"></script>
    <script src="../../src/js/filtros.js"></script>
    <script src="../../src/js/redireccion_form.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="../../src/js/sweetAlert.js"></script>-->
	
</body>

</html>

