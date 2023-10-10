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
	<h1 class="titulo">Mis Tickets Creados</h1>
	<div class="botones">
        
        <a href="crear" class="boton2">Crear</a>
        <button href="#"class="boton1" id="ocultar-mostrar" onclick="obtener()">Buscar</button>
    </div>
    <div class="d-md-none content box" id="ocultar-y-mostrar">


            <form action='/search' id='search-form' method='get' target='_top'>
            <input id='search-text' name='q' placeholder='Busca tu ticket' type='text' class="buscador">
            <button id='search-button' type='submit'><span><i class='bx bx-search bx-spin' style='color:#ffffff'  id="lupa"></i></span></button>
            </form>
    </div>
    


<table class="tabla">
    <thead>
        <tr id="filterRow">
            <th>No. Ticket</th>
            <th>Etiqueta</th>
            <th>Asunto</th>
            <th>Comentario</th>
            <th>Usuario Responsable</th>
            <th>Usuario Corresponsable</th>
            <th>Status Ticket</th>
            <th>Progreso</th>

        </tr>
        <tr class="selectores">
            <th><input type="text" id="filterNoTicket" placeholder="No. Ticket"></th>
            <th><input type="text" id="filterEtiqueta" placeholder="Etiqueta"></th>
            <th><input type="text" id="filterAsunto" placeholder="Asunto"></th>
            <th><input type="text" id="filterComentario" placeholder="Comentario"></th>
            <th><input type="text" id="filterUsuarioResponsable" placeholder="Usuario Responsable"></th>
            <th><input type="text" id="filterUsuarioCorresponsable" placeholder="Usuario Corresponsable"></th>
            
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

            
        </tr>
    </thead>
        <tbody id="ticketsContainer">
            <?php foreach ($tickets as $ticket): ?>

            <tr class="tbrow">
                <td data-label="No. Ticket"><?php echo $ticket->id; ?></td>
                <td data-label="Etiqueta"><?php echo $ticket->etiqueta; ?></td>
                <td data-label="Asunto"><?php echo $ticket->asunto; ?></td>
                <td data-label="Comentario"><?php echo $ticket->descripcion; ?></td>
                <td data-label="Usuario Responsable"><?php echo $ticket->responsable; ?></td>
                <td data-label="Usuario Corresponsable"><?php echo $ticket->corresponsable; ?></td>
                <td data-label="Status Ticket"><?php echo $ticket->nombre_status; ?></td>
                <td data-label="Progreso">
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated barritamodal bg-<?php echo $ticket->color;?>" role="progressbar" style="width:<?php echo $ticket->progreso;?>%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ticket->progreso;?>%</div>
                    </div>
                    
                    
                    
                </td>

                
            </tr>
        <?php endforeach; ?>
        </tbody>
</table>


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


<script src="../../src/js/filtros2.js"></script>
	
</body>

</html>
