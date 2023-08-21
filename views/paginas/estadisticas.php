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
	<header>
		<h1 class="titulo_estadisticas">Estadísticas | ECI</h1>
	</header>

	<main>
		<h2>Reporte por Status <|:v</h2>
	
		<table id="" >
			<thead>
				
				<tr>
					<th>Color</th>
					<th>Status</th>
					<th>Trabajados</th>
					<th>%</th>
					<th>Solicitados</th>
					<th>%</th>
				</tr>
			</thead>
			<tbody>
					
				<tr>
					<td>Negro</td>
					<td>Creado ECI</td>
					<td>0</td>
					<td>0.00%</td>
					<td>0</td>
					<td>0.00%</td>
				</tr>
				<tr>
					<td>Gris</td>
					<td>En espera por falta de Recurso</td>
					<td>0</td>
					<td>0.00%</td>
					<td>0</td>
					<td>0.00%</td>
				</tr>
			<tr>
				<td>Verde</td>
				<td>En Proceso</td>
				<td>0</td>
				<td>0.00%</td>
				<td>0</td>
				<td>0.00%</td>
			</tr>
			<tr>
				<td>Amarillo</td>
				<td>Validado-Entregado</td>
				<td>0</td>
				<td>0.00%</td>
				<td>0</td>
				<td>0.00%</td>
			</tr>
			<tr>
				<td>Rojo</td>
				<td>No procede</td>
				<td>0</td>
				<td>0.00%</td>
				<td>0</td>
				<td>0.00%</td>
			</tr>
			<tr>
				<td>Azul</td>
				<td>Terminado</td>
				<td>0</td>
				<td>0.00%</td>
				<td>0</td>
				<td>0.00%</td>
			</tr>
			<tr>
				<td>Naranja</td>
				<td>Cancelado</td>
				<td>0</td>
				<td>0.00%</td>
				<td>0</td>
				<td>0.00%</td>
			</tr>
			<tr>
				<td>Cafe</td>
				<td>Eliminado</td>
				<td>0</td>
				<td>0.00%</td>
				<td>0</td>
				<td>0.00%</td>
			</tr>
			<tr>
				<td>Blando</td>
				<td>Total</td>
				<td>0</td>
				<td>0.00%</td>
				<td>0</td>
				<td>0.00%</td>
			</tr>
		</tbody>
	</table>

	<h2>Reporte por Nivel de Satisfacción <|:v</h2>
	
		<table id="" >
			<thead>
				
				<tr>
					<th>Color</th>
					<th>Status</th>
					<th>Trabajados</th>
					<th>%</th>
					<th>Solicitados</th>
					<th>%</th>
				</tr>
			</thead>
			<tbody>
					
				<tr>
					<td>Verde</td>
					<td>Satisfeho</td>
					<td>0</td>
					<td>0.00%</td>
					<td>0</td>
					<td>0.00%</td>
				</tr>
				<tr>
					<td>Rosa</td>
					<td>No Satisfecho</td>
					<td>0</td>
					<td>0.00%</td>
					<td>0</td>
					<td>0.00%</td>
				</tr>
			</tbody>
	</table>
	</main>
</body>
 </html>

