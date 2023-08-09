<?php 
$auth = $_SESSION['login'];
if($auth == false){
header('Location: pagina_no_encontrada');
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DETALLES | ECI</title>
	<link rel="stylesheet" href="../../node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../node_modules/boxicons/css/boxicons.min.css">
	<link rel="stylesheet" href="../../src/css/vermas_style.css">
	<link href="https://fonts.googleapis.com/css2?family=Ysabeau+SC:wght@200;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

	<div class="img__ilustracion">
        
        <h1>Detalles<span> Ticket </span></h1>
        <img src="../../src/img/ilustracion6.svg" alt="ilustracion" class="img">
    </div>
        <div class="caja">

            <form class="cajita5">
                    <div class="tabla__movile">
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
             </form>

        </div>
<!--se cierra-->

</body>
</html>

	
