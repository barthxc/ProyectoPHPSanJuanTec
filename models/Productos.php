<?php
namespace Models;

class Productos extends ActiveRecord{

    protected static $tabla = 'productos';
    protected static $columnasDB = ['id','nombre','talle','stock','categorias_id'];

    public $id;
    public $nombre;
    public $talle;
    public $stock;
    public $categorias_id;

    public static function filtrarProductos($categoria, $talle) {
        // Asegúrate de sanitizar y escapar las variables para evitar inyecciones SQL
        $categoria = self::$db->escape_string($categoria);
        $talle = self::$db->escape_string($talle);
    
        $query = "SELECT * FROM " . self::$tabla;
    
        if ($categoria != "todas" && $talle != "todas") {
            $query .= " WHERE categorias_id = '{$categoria}' AND talle = '{$talle}'";
        } elseif ($categoria != "todas") {
            $query .= " WHERE categorias_id = '{$categoria}'";
        } elseif ($talle != "todas") {
            $query .= " WHERE talle = '{$talle}'";
        }
    
        return self::consultarSQL($query);
    }
    
    

}