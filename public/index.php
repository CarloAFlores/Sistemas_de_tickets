<?php 

require_once __DIR__ . '../../includes/app.php';

//Importamos todos los modulos que ocuparemos, en este caso el mas importante es el Router, pues
//es el encargado de dirigirnos a nuestra vistas
use MVC\Router;
use Controllers\LoginController;
use Controllers\InicioController;

//Creamos la instanciasdel Router
$router = new Router();

//En este aparto le decimos con que ruta iremos al controller y que funcion ocuparenis
$router->get('/',[LoginController::class, 'index']);
//Se agrego el metodo post, para mandar nuestro formulario medainet el metodo POST
$router->post('/',[LoginController::class, 'index']);

$router -> get('/logout',[LoginController::class, 'logout']);

$router->get('/inicio',[InicioController::class, 'index']);

$router->get('/crear',[InicioController::class, 'crear']);

$router->post('/crear',[InicioController::class, 'insertar']);

$router->post('/eliminar',[InicioController::class, 'eliminar']);

$router->post('/mirar',[InicioController::class, 'mirar']);

//--------------------------------------------------------------------------------------------------------

$router->get('/pendientes',[InicioController::class, 'pendientes']);

$router->get('/en_proceso',[InicioController::class, 'proceso']);

$router->get('/falta_recursos',[InicioController::class, 'falta_recursos']);

$router->get('/terminados',[InicioController::class, 'terminados']);

$router->get('/cancelados',[InicioController::class, 'cancelados']);

//--------------------------------------------------------------------------------------------------------

$router->get('/estadisticas',[InicioController::class, 'estadisticas']);

$router->comprobarRutas();