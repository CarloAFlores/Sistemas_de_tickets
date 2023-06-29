<?php 

require_once __DIR__ . '/../includes/app.php';

//Importamos todos los modulos que ocuparemos, en este caso el mas importante es el Router, pues
//es el encargado de dirigirnos a nuestra vistas
use MVC\Router;
use Controllers\LoginController;
use Controllers\inicioController;

//Creamos la instanciasdel Router
$router = new Router();

//En este aparto le decimos con que ruta iremos al controller y que funcion ocuparenis
$router->get('/',[LoginController::class, 'index']);
$router->get('/nosotros','funcion_nosotros');


$router->comprobarRutas();