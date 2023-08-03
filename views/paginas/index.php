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
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@200;300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
	<div class="botones">
        <!--<button class="boton1">Volver</button>-->
        <a href="crear" class="boton2">Crear</a>
    </div>

<table class="tabla">
    <thead>
        <tr>
            <th>No. Ticket</th>
            <th>Etiqueta</th>
            <th>Asunto</th>
            <th>Comentario</th>
            <th>Usuario Crea</th>
            <th>Status Ticket</th>
            <th>Progreso</th>
            <th>Opciones</th>
            <th>Detalles</th>

        </tr>
        <tr class="selectores">
            <th><input type="text" name=""></th>
            <th><input type="text" name=""></th>
            <th><input type="text" name=""></th>
            <th><input type="text" name=""></th>
            <th><input type="text" name=""></th>
            <th>
                <select>
                    <option value="1"></option>
                    <option value="2">Value 1</option>
                    <option value="3">Value 2</option>
                </select>
            </th>
            <th></th>
            <th></th>
            <th></th>

        </tr>
    </thead>
        <tbody>
            <?php foreach ($tickets as $ticket): ?>
            <tr class="tbrow">
                <td data-label="No. Ticket"><?php echo $ticket->id; ?></td>
                <td data-label="Etiqueta"><?php echo $ticket->etiqueta; ?></td>
                <td data-label="Asunto"><?php echo $ticket->asunto; ?></td>
                <td data-label="Comentario"><?php echo $ticket->descripcion; ?></td>
                <td data-label="Usuario Crea">Sergio Merino</td>
                <td data-label="Status Ticket"><?php echo $ticket->nombre_status; ?></td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar bg-<?php echo $ticket->color;?>" role="progressbar" style="width:<?php echo $ticket->progreso;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ticket->progreso;?>%</div>
                    </div>
                </td>
                <td data-label="Opciones">
                   	<div class="opciones_pequeñas"> 

                    	<button href="#" class="boton-li icono cta" title="Status" type="button" id="miboton">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-subir icono" title="Archivo">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-resubir icono" title="AdRespuesta">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-book icono" title="Resumen">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</button>

                    	<button class="boton-trash icono" title="Eliminar">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</button>

                    	<button class="boton-revision icono" title="Actualizar">
                    	    <i class='bx bx-revision' style='color:#ffffff' ></i>
                    	</button>
                        
                   	</div>
                </td>
                <td data-label="Detalles"><a href="#" class="btn">Ver más</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>

<!--primer modal-->
<div class="primermodal-container">
    <div class="primermodal modal-close">
        <p class="close">X</p>
        <img src="../../src/img/ilustracion.svg" alt="ilustracion">
        <div class="modal-textos">
            <h2>STATUS <span> Ticket </span></h2>


            <form class="cajita">
                <div class="cajita__dos">
                    <h4>Status</h4>
                    <select>
                        <option value="1">Proceso</option>
                        <option value="2">Validacion</option>
                    </select>
                </div>
                <div class="cajita__tres">
                    <h4>Comentario</h4>
                    <textarea rows="2"></textarea>
                </div>
                <button type="submit" title="subir" class="botonmodal">Guardar</button>
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

	
</body>

</html>

