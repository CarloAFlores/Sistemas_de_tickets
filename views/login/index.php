<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | ECI</title>
	

	<link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Ysabeau+SC:wght@200;300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../src/css/style_incio.css">
	<link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@600&display=swap" rel="stylesheet">	
</head>

<body>

	<div class="login-container contenedor1">
			
		<div class="contenedor">

			<div class="saludo">
				<h1>BIENVENIDO DE NUEVO :)!!!</h1>
					<p>Hoy es un nuevo Día</p>

				<div class="iconos">
					
					<p class="iconostotales">
						<a href="https://www.facebook.com/ECICONTACTCENTER/?locale=es_LA">
							<img class="facebook" src="../src/img/face-sinfondo.png">
						</a>
					</p>
					<p class="iconostotales">
						<a  class="notas" href="https://www.tiktok.com/discover/eci-contact-center">
							<img class="nota" src="../src/img/notatiktok.png" alt="tiktok">
						</a>
					</p>
				</div>
			</div>

			
			<div class="formulario">
					
				<!--
				//<script type="text/javascript">
				//	Swal.fire({
  				//		icon: 'error',
  				//		title: 'Oops...',
  				//		text: '',
  				//		footer: '<a href="">Why do I have this issue?</a>'
				//	})
				//</script>-->
				
				<img class="logo" src="../src/img/logosinfondo.png" alt="LOGO LCC">
				<h2>LOGIN</h2>
				
				<form action="" method="POST" id="form">
					
					<svg class="fa-solid" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="28" height="28" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
					  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					  <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
					  <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
					</svg>
					<input type="text" placeholder="Introduce tu Usuario" name="identificador" id="name">
					
					<svg class="fa-solid" xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-lock" width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
					  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
					  <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z" />
					  <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />
					  <path d="M8 11v-4a4 4 0 1 1 8 0v4" />
					</svg>

					<input type="password" placeholder="Introduce tu Contraseña" name="password" id="password">

					<input class="boton" type="submit" value="Entrar" id="btnMostrar">
				
					
				</form>
				<?php include_once __DIR__.'/../templates/alertas.php'; ?>
			
				
			</div>
	</div>	
</div>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../src/js/index.js"></script>

		
</body>
		<footer class="footer">
       		 <h3>Desarrollado BY ECI© 2023</h3>

    	</footer> 
</html>