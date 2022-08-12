<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\PaginasController;

$router = new Router();

//Zona publica
$router->get('/',[PaginasController::class,'index']);
$router->post('/',[PaginasController::class,'index']);
$router->get('/nosotros',[PaginasController::class,'nosotros']);
$router->post('/nosotros',[PaginasController::class,'nosotros']);
$router->get('/servicios',[PaginasController::class,'servicios']);
$router->post('/servicios',[PaginasController::class,'servicios']);
$router->get('/contacto',[PaginasController::class,'contacto']);
$router->post('/contacto',[PaginasController::class,'contacto']);
$router->get('/servicios/servicio',[PaginasController::class,'servicio']);
$router->post('/servicios/servicio',[PaginasController::class,'servicio']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();