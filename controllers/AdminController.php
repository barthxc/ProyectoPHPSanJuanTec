<?php
namespace Controllers;
use PhpFashionTextil\Router;
use Models\Usuarios;
class AdminController{
    public static function index(Router $router){
        
        $Users = Usuarios::all();
        $router->view('admin/index',['users' => $Users]);
    }
}