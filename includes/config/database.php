<?php
function conectarBD() : mysqli {
    $db = new mysqli('localhost:3308', 'root', '', 'gestor');
    if(!$db){
        echo 'Error no se pudo conectar';
        exit;
    }
    return $db;
}

