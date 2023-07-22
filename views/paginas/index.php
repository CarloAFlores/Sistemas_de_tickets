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
</head>

<body>
	<div class="botones">
    <button class="boton1">Volver</button>
    <button class="boton2">Crear</button>
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
            <tr class="tbrow">
                <td data-label="No. Ticket">1</td>
                <td data-label="Etiqueta">Cambio de Diadema</td>
                <td data-label="Asunto">Lorem ipsum dolor sit amet.</td>
                <td data-label="Comentario">Cambios de diademas para todos los coaches</td>
                <td data-label="Usuario Crea">Sergio Merino</td>
                <td data-label="Status Ticket">En proceso</td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>
                </td>
                <td data-label="Opciones">
                   	<div class="opciones_pequeñas"> 
                    	<div class="lista">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</div>
                    	<div class="subir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="resubir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="book">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</div>
                    	<div class="trash">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</div>
                    	<div class="revision">
                    	    <i class='bx bx-revision' style='color:#ffffff' ></i>
                    	</div>
                   	</div>
                </td>
                <td data-label="Detalles"><a href="#" class="btn">Ver más</a></td>
            </tr>
            <tr class="tbrow">
                <td data-label="No. Ticket">2</td>
                <td data-label="Etiqueta">Permisos</td>
                <td data-label="Asunto">Lorem ipsum dolor sit amet.</td>
                <td data-label="Comentario">Permisos para los chicos de validación </td>
                <td data-label="Usuario Crea">Hector Marroquin</td>
                <td data-label="Status Ticket">Terminado</td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </td>
                <td data-label="Opciones">
                   <div class="opciones_pequeñas"> 
                    	<div class="lista">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</div>
                    	<div class="subir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="resubir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="book">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</div>
                    	<div class="trash">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</div>
                    	<div class="revision">
                    	    <i class='bx bx-revision' style='color:#ffffff' ></i>
                    	</div>
                   	</div>
                </td>
                <td data-label="Detalles"><a href="#" class="btn">Ver más</a></td>
            </tr>
            <tr class="tbrow">
                <td data-label="No. Ticket">3</td>
                <td data-label="Etiqueta">Papeletas</td>
                <td data-label="Asunto">Lorem ipsum dolor sit amet.</td>
                <td data-label="Comentario">Me podria dar acceso para ver la papeleta de Megacable a no.nomina 2432</td>
                <td data-label="Usuario Crea">Carlos Flores</td>
                <td data-label="Status Ticket">Completado</td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                </td>
                <td data-label="Opciones">
                   	<div class="opciones_pequeñas"> 
                    	<div class="lista">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</div>
                    	<div class="subir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="resubir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="book">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</div>
                    	<div class="trash">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</div>
                    	<div class="revision">
                    	    <i class='bx bx-revision' style='color:#ffffff' ></i>
                    	</div>
                   	</div>
                </td>
                <td data-label="Detalles"><a href="#" class="btn">Ver más</a></td>
            </tr>
            <tr class="tbrow">
                <td data-label="No. Ticket">4</td>
                <td data-label="Etiqueta">Encuesta</td>
                <td data-label="Asunto">Lorem ipsum dolor sit amet.</td>
                <td data-label="Comentario">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td data-label="Usuario Crea">Sergio Merino</td>
                <td data-label="Status Ticket">Eliminado</td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                </td>
                <td data-label="Opciones">
                   	<div class="opciones_pequeñas"> 
                    	<div class="lista">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</div>
                    	<div class="subir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="resubir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="book">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</div>
                    	<div class="trash">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</div>
                    	<div class="revision">
                    	    <i class='bx bx-revision' style='color:#ffffff' ></i>
                    	</div>
                   	</div>
                </td>
                <td data-label="Detalles"><a href="#" class="btn">Ver más</a></td>
            </tr>
            <tr class="tbrow">
                <td data-label="No. Ticket">5</td>
                <td data-label="Etiqueta">Reporteador</td>
                <td data-label="Asunto">Lorem ipsum dolor sit amet.</td>
                <td data-label="Comentario">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td data-label="Usuario Crea">Hector Marroquin</td>
                <td data-label="Status Ticket">En proceso con falta de recursos</td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20%</div>
                    </div>
                </td>
                <td data-label="Opciones">
                   	<div class="opciones_pequeñas"> 
                    	<div class="lista">
                    	    <i class='bx bx-list-ul' style='color:#ffffff'></i>
                    	</div>
                    	<div class="subir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="resubir">
                    	    <i class='bx bx-upload' style='color:#ffffff'></i>
                    	</div>
                    	<div class="book">
                    	    <i class='bx bxs-book-content' style='color:#ffffff'></i>
                    	</div>
                    	<div class="trash">
                    	    <i class='bx bxs-trash' style='color:#ffffff' ></i>
                    	</div>
                    	<div class="revision">
                    	    <i class='bx bx-revision' style='color:#ffffff' ></i>
                    	</div>
                   	</div>
                </td>
                <td data-label="Detalles"><a href="#" class="btn">Ver más</a></td>
            </tr>
        </tbody>
</table>

<div></div>
<nav class="navegador" aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

    <script src="../../src/js/tabla.js"></script>

	
</body>

</html>

