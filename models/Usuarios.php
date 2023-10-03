<?php
namespace Models;

class Usuarios extends ActiveRecord{

    

    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id','usuario','contraseña','email'];

    public $id;
    public $usuario;
    public $contraseña;
    public $email;

    public function __construct($args =[]){
        $this->id = $args['id'] ?? null;
        $this->usuario = $args['usuario'] ?? null;
        $this->contraseña = $args['contraseña'] ?? null;
        $this->email = $args['email'] ?? null;
    }
    public function ValidarUsuario(){
        if(!$this->usuario){
            self::$errores[] = 'El usuario es obligatorio';
        }
        if(!$this->email){
            self::$errores[] = 'El email es obligatorio';
        }
        if(!$this->contraseña){
            self::$errores[] = 'Contraseña obligatoria';
        }
        if(strlen($this->contraseña) < 6){
            self::$errores[] = 'La contraseña debe ser min 6 carácteres';
        }
    }

    public function validarLogin(){
        if(!$this->usuario){
            self::$errores[] = 'El usuario es obligatorio';
        }
        if(!$this->contraseña){
            self::$errores[] = 'Contraseña obligatoria';
        }

    }

    public function verificarContraseña(string $contraseña){
        $resultado = password_verify($contraseña, $this->contraseña);
        if($resultado){
            return true;
        }else{
            self::$errores[] = 'Credenciales Incorrectas';
        }
    }

    public function hashContraseña(){
        $this->contraseña = password_hash($this->contraseña, PASSWORD_BCRYPT);
    }



}