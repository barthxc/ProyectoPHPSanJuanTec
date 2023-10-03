<?php
namespace Models;

class Materiales extends ActiveRecord{

    protected static $tabla = 'materiales';
    protected static $columnasDB = ['id','nombre','stock','materialescol'];

    public $id;
    public $nombre;
    public $stock;
    public $materialescol;

}