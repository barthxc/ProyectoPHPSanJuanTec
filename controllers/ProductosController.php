<?php

namespace Controllers;

use PhpFashionTextil\Router;
use Models\Productos;

class ProductosController
{


    public static function comprobarFuncion(Router $router)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $productoID = $_POST['action'];
            self::aumentarStock($router, $productoID);
        } else {
            self::mostrarProductos($router);
        }
    }
    





    public static function mostrarProductos(Router $router)
    {  
        //Abro la sesion y miro si está logueado, si no lo está vuelve a / 
        session_start();
        estaLogueado();


        $Productos = Productos::all();
        $router->view('admin/gestionProductos', [
            'productos' => $Productos,
            'usuario'=> $_SESSION['usuario'] //Le paso el usuario que tiene la sesión a la vista
        ]);
    }

    public static function detalleProductos(Router $router)
    {
        $categoria = isset($_GET['categoria']) ? $_GET['categoria'] : null;
        $talle = isset($_GET['talle']) ? $_GET['talle'] : null;

        if ($categoria === "todas" && $talle === "todas") {
            $Productos = Productos::all();
        } else {
            $Productos = Productos::filtrarProductos($categoria, $talle);
        }

        // Renderizar la vista
        $router->view('admin/gestionProductos', ['productos' => $Productos]);
    }



    public static function aumentarStock(Router $router, $productoID)
    {
        if (!is_numeric($productoID) || $productoID <= 0) {
            header('Location: /gestion-productos');
            return; 
        }
    
        $producto = Productos::find($productoID);
    
        // Verifica si se encontró el producto y si el ID es válido
        if ($producto && $producto->id) {
            // Aumenta el stock del producto en 10 unidades
            $producto->stock += 10;
                $producto->guardar();
        }
        header('Location: /gestion-productos');
    }
    

    
    
    
    
}
