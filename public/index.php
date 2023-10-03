<?php
require __DIR__.'/../includes/app.php';
use PhpFashionTextil\Router;
use Controllers\AdminController;
use Controllers\LoginController;
use Controllers\ProductosController;
use Controllers\MaterialesController;
use Controllers\LogisticaController;

$router = new Router();
$router->get('/admin',[AdminController::class,'index']);
//PORTAL + LOGIN
$router->get('/', [LoginController::class, 'loginUsuario']);
$router->post('/', [LoginController::class, 'loginUsuario']);
//REGISTRAR 
$router->get('/registrar',[LoginController::class,'crearCuenta']);
$router->post('/registrar',[LoginController::class,'crearCuenta']);

//VISTAS ADMNISTRADOR
$router->get('/gestion-productos',[ProductosController::class,'mostrarProductos']);
$router->get('/gestion-productos',[ProductosController::class,'detalleProductos']);
$router->post('/gestion-productos',[ProductosController::class,'comprobarFuncion']);

$router->get('/gestion-materiales',[MaterialesController::class,'mostrarMateriales']);

//INFORMES

$router->get('/logistica',[LogisticaController::class,'mostrarLogistica']);
$router->post('/logistica',[LogisticaController::class,'comprobarOrden']);



$router->comprobarRutas();

