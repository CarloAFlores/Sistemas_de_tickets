<?php 
$auth = $_SESSION['login'];
if($auth == false){
header('Location: pagina_no_encontrada');
}

 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>Estadísticas | ECI</title>
 	<link rel="stylesheet" href="../../src/css/estadisticas_style.css" />
 	<meta name="viewport" content="width=device-width, initial-scale=1" />
 </head>
 <body>
	<div>
		<h1 class="titulo_estadisticas">Estadísticas | ECI</h1>
	</div>

	<div class="botones__modales">
		<button class="botones boton__areas"><i class='bx bx-bar-chart-alt bx-tada' ></i>StatsÁreas</button>
		<button class="botones boton__persona"><i class='bx bx-bar-chart-alt bx-tada' ></i>StatsPersona</button>
	</div>

	<main>
		<h2 class="titulo__dos">Reporte por Status</h2>
	
		<table id="" >
			<thead>
				
				<tr>
					<th></th>
					<th>Status</th>
					<th>Trabajados</th>
					<th>%</th>
					<th>Solicitados</th>
					<th>%</th>
				</tr>
			</thead>
			<tbody>
					
				<tr>
					<td data-label="Color" class="color__negro"></td>
					<td data-label="Status">Creado ECI</td>
					<td data-label="Trabajados">0</td>
					<td data-label="%">0.00%</td>
					<td data-label="Solicitados">0</td>
					<td data-label="%">0.00%</td>
				</tr>
				<tr>
					<td data-label="Color" class="color__gris"></td>
					<td data-label="Status">En espera por falta de Recurso</td>
					<td data-label="Trabajados">0</td>
					<td data-label="%">0.00%</td>
					<td data-label="Solicitados">0</td>
					<td data-label="%">0.00%</td>
				</tr>
			<tr>
				<td data-label="Color" class="color__verde"></td>
				<td data-label="Status">En Proceso</td>
				<td data-label="Trabajados">0</td>
				<td data-label="%">0.00%</td>
				<td data-label="Solicitados">0</td>
				<td data-label="%">0.00%</td>
			</tr>
			<tr>
				<td data-label="Color" class="color__amarillo"></td>
				<td data-label="Status">Validado Entregado</td>
				<td data-label="Trabajados">0</td>
				<td data-label="%">0.00%</td>
				<td data-label="Solicitados">0</td>
				<td data-label="%">0.00%</td>
			</tr>
			<tr>
				<td data-label="Color" class="color__rojo"></td>
				<td data-label="Status">No procede</td>
				<td data-label="Trabajados">0</td>
				<td data-label="%">0.00%</td>
				<td data-label="Solicitados">0</td>
				<td data-label="%">0.00%</td>
			</tr>
			<tr>
				<td data-label="Color" class="color__azul"></td>
				<td data-label="Status">Terminado</td>
				<td data-label="Trabajados">0</td>
				<td data-label="%">0.00%</td>
				<td data-label="Solicitados">0</td>
				<td data-label="%">0.00%</td>
			</tr>
			<tr>
				<td data-label="Color" class="color__naranja"></td>
				<td data-label="Status">Cancelado</td>
				<td data-label="Trabajados">0</td>
				<td data-label="%">0.00%</td>
				<td data-label="Solicitados">0</td>
				<td data-label="%">0.00%</td>
			</tr>
			<tr>
				<td data-label="Color" class="color__cafe"></td>
				<td data-label="Status">Eliminado</td>
				<td data-label="Trabajados">0</td>
				<td data-label="%">0.00%</td>
				<td data-label="Solicitados">0</td>
				<td data-label="%">0.00%</td>
			</tr>
			
		</tbody>
	</table>

	<h2 class="titulo__dos">Reporte por Nivel de Satisfacción</h2>
	
		<table id="" >
			<thead>
				
				<tr>
					<th></th>
					<th>Status</th>
					<th>Trabajados</th>
					<th>%</th>
					<th>Solicitados</th>
					<th>%</th>
				</tr>
			</thead>
			<tbody>
					
				<tr>
					<td data-label="Color" class="color__verde2"></td>
					<td data-label="Status">Satisfeho</td>
					<td data-label="Trabajados">0</td>
					<td data-label="%">0.00%</td>
					<td data-label="Solicitados">0</td>
					<td data-label="%">0.00%</td>
				</tr>
				<tr>
					<td data-label="Color" class="color__rosa"></td>
					<td data-label="Status">No Satisfecho</td>
					<td data-label="Trabajados">0</td>
					<td data-label="%">0.00%</td>
					<td data-label="Solicitados">0</td>
					<td data-label="%">0.00%</td>
				</tr>
			</tbody>
		</table>
	</main>
 </body>
</html>

