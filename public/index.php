<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AdminController;
use Controllers\LoginController;
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

//Zona Login
$router->get('/login',[LoginController::class,'login']);
$router->post('/login',[LoginController::class,'login']);
$router->get('/logout',[LoginController::class,'logout']);

//Zona Privada
$router->get('/admin',[AdminController::class,'index']);
$router->post('/admin',[AdminController::class,'index']);
$router->post('/admin',[AdminController::class,'index']);
$router->get('/servicios/crear',[AdminController::class,'crearServicio']);
$router->post('/servicios/crear',[AdminController::class,'crearServicio']);
$router->post('/servicios/eliminar',[AdminController::class,'servicioEliminar']);
$router->get('/servicios/actualizar',[AdminController::class,'actualizarServicio']);
$router->post('/servicios/actualizar',[AdminController::class,'actualizarServicio']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();