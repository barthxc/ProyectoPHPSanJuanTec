<?php
namespace Controllers;
use PhpFashionTextil\Router;
use Models\Materiales;
class MaterialesController{
    public static function mostrarMateriales(Router $router)
    {
        $Materiales = Materiales::all();
        $router->view('admin/gestionMateriales',['materiales' => $Materiales]);
    }
    
}