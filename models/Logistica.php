<?php
namespace Models;

class Logistica extends ActiveRecord{

    protected static $tabla = 'registros_materiales';
    protected static $columnasDB = ['id','fecha','tipo','cantidad','materiales_nombre','materiales_id'];

    public $id;
    public $fecha;
    public $tipo;
    public $cantidad;
    public $materiales_nombre;


}