<?php
namespace Controllers;
use PhpFashionTextil\Router;
use Models\Usuarios;
class LoginController{

//LOGIN
    public static function loginUsuario(Router $router){
        $errores = [];
        if($_SERVER['REQUEST_METHOD'] ==='POST'){
            $auth = new Usuarios($_POST);
            $auth->validarLogin();
            $errores = $auth->getErrores();
            if(empty($errores)){
                $usuario = Usuarios::where('usuario',$auth->usuario);
                if($usuario){
                    //Verificar contraseña
                    if($usuario->verificarContraseña($auth->contraseña)){
                        //si esta logueado
                        session_start(); //iniciamos la sesión
                        $_SESSION['usuario'] = $usuario->usuario;
                        $_SESSION['email'] = $usuario->email;
                        $_SESSION['login'] = true;
                        //Redireccionar a la página
                        header('Location: /gestion-productos');
                        exit;

                    }else{
                        $errores[] = $auth->contraseña;
                    }
                }else{
                    $errores[] = Usuarios::where('usuario',$auth->usuario);
                }
            }
        }

        $router->view('/login/login',[
            'errores'=> $errores
        ]);


    }

//REGISTRO
    public static function crearCuenta(Router $router){
        $usuario = new Usuarios;
        $errores=[];
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $_POST = array_map('trim', $_POST);
            $usuario->sincronizar($_POST);
            $usuario->ValidarUsuario();
            $errores = $usuario->getErrores();
            if(empty($errores)){
                $usuario->hashContraseña();
                $usuario->guardar();
                header('Location: /');
            }
        }

        $router->view('/login/crear',[
            'errores' =>$errores,
            'usuario' =>$usuario,
        ]);
    }

}